<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class MidtransController extends Controller
{
    public function callback(Request $request)
    {
        $serverKey = config('midtrans.serverKey');
        $hashedKey = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashedKey !== $request->signature_key) {
            return response()->json(['message' => 'Invalid signature key'], 404);
        }

        $transactionStatus = $request->transaction_status;
        $orderId = $request->order_id;
        $transaction = Transaction::where('code', $orderId)->first();

        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        switch ($transactionStatus) {
            case 'capture':
                if ($request->payment_type == 'credit_card') {
                    if ($request->fraud_status == 'challenge') {
                        $transaction->update(['payment_status' == 'pending']);
                    } else {
                        $transaction->update(['payment_status' == 'paid']);

                        //update the "is_available" status on the flight seat
                        foreach ($transaction->passengers as $passenger) {
                            $passenger->seat->update(['is_available' => false]);
                        }
                    }
                }
                break;
            case 'settlement':
                $transaction->update(['payment_status' => 'paid']);

                //update the "is_available" status on the flight seat
                foreach ($transaction->passengers as $passenger) {
                    $passenger->seat->update(['is_available' => false]);
                }
                break;
            case 'pending':
                $transaction->update(['payment_status' => 'paid']);
                break;
            case 'deny':
                $transaction->update(['payment_status' => 'paid']);
                break;
            case 'expire':
                $transaction->update(['payment_status' => 'paid']);
                break;
            case 'cancel':
                $transaction->update(['payment_status' => 'paid']);
                break;
            default:
                $transaction->update(['payment_status' => 'paid']);
                break;
        }

        return response()->json(['message' => 'Callback received successfully']);
    }
}
