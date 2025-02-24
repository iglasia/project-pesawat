@extends('layouts.app')

@section('include')
    <div id="Background"
        class="absolute top-0 w-full h-[810px] bg-[linear-gradient(180deg,#85C8FF_0%,#D4D1FE_47.05%,#F3F6FD_100%)]">
        <img src="{{ asset('assets/images/backgrounds/Jumbo Jet Sky (1) 1.png') }}"
            class="absolute right-0 top-[147px] object-contain max-h-[481px]" alt="background image">
    </div>
@endsection

    

@section('content')
    <main class="relative flex flex-col w-full max-w-[1280px] px-[75px] mx-auto mt-[50px] mb-[62px]">
        <h1 class="font-extrabold text-[50px] leading-[75px] mt-[30px]">Success Booking</h1>
        <div class="flex gap-[30px] mt-[30px]">
            <div id="Left-Content" class="flex flex-col gap-[30px] w-[470px] shrink-0">
                <div id="Flight-Info"
                    class="accordion group flex flex-col h-fit rounded-[20px] bg-white overflow-hidden has-[:checked]:!h-[75px] transition-all duration-300">
                    <label class="flex items-center justify-between p-5">
                        <h2 class="font-bold text-xl leading-[30px]">Your Flight</h2>
                        <img src="assets/images/icons/arrow-up-circle-black.svg"
                            class="w-9 h-8 group-has-[:checked]:rotate-180 transition-all duration-300" alt="icon">
                        <input type="checkbox" class="hidden">
                    </label>
                    <div class="accordion-content p-5 pt-0 flex flex-col gap-5">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm text-garuda-grey">Departure</p>
                                <p class="font-semibold text-lg">Jakarta (CGK)</p>
                            </div>
                            <div class="text-end">
                                <p class="text-sm text-garuda-grey">Arrival</p>
                                <p class="font-semibold text-lg">Tokyo (HND)</p>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm text-garuda-grey">Date</p>
                                <p class="font-semibold text-lg">15 Sep 2024</p>
                            </div>
                            <div class="text-end">
                                <p class="text-sm text-garuda-grey">Quantity</p>
                                <p class="font-semibold text-lg">3 people</p>
                            </div>
                        </div>
                        <div class="flex flex-col rounded-[20px] border border-[#E8EFF7] p-5 gap-5">
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-[10px]">
                                        <img src="assets/images/logos/ana.svg" class="h-[100px] flex shrink-0"
                                            alt="logo">
                                    </div>
                                    <a href="#"
                                        class="flex items-center rounded-[50px] py-3 px-5 gap-[10px] w-fit bg-garuda-black">
                                        <p class="font-semibold text-white">Details</p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="font-semibold">Angga Air</p>
                                        <p class="text-sm text-garuda-grey mt-[2px]">08:30 - 12:00</p>
                                    </div>
                                    <div class="flex flex-col gap-[2px] items-center justify-center">
                                        <p class="text-sm text-garuda-grey">12 hours</p>
                                        <div class="flex items-center gap-[6px]">
                                            <p class="font-semibold">CGK</p>
                                            <img src="assets/images/icons/transit-black.svg" alt="icon">
                                            <p class="font-semibold">HND</p>
                                        </div>
                                        <p class="text-sm text-garuda-grey">Transit 1x</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="border-[#E8EFF7]">
                            <div class="flex items-center rounded-[20px] gap-[14px]">
                                <div class="flex w-[120px] h-[100px] shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="assets/images/thumbnails/business-seat.png"
                                        class="w-full h-full object-cover" alt="icon">
                                </div>
                                <div>
                                    <p class="font-bold text-xl leading-[30px]">Business Class</p>
                                    <p class="text-garuda-grey mt-1">Enjoy our good flight experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Right-Content" class="flex flex-col gap-[30px] w-[490px] shrink-0">
                <div id="Booking-details" class="flex flex-col rounded-[20px] p-5 gap-5 bg-white overflow-hidden">
                    <h2 class="font-bold text-xl leading-[30px]">Booking Details</h2>
                    <p>Gunakan kode booking di bawah dan nomor hp anda untuk memeriksa status pemesanan tiket pesawat
                    </p>
                    <div class="flex flex-col gap-5">
                        <p class="font-semibold">Booking Transaction ID</p>
                        <div class="flex items-center rounded-full py-3 px-5 gap-[10px] bg-garuda-bg-grey">
                            <img src="assets/images/icons/note-favorite-black.svg" class="w-5 flex shrink-0" alt="icon">
                            <p class="font-semibold">GARUDABWA19384923</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-5">
                        <p class="font-semibold">Phone No.</p>
                        <div class="flex items-center rounded-full py-3 px-5 gap-[10px] bg-garuda-bg-grey">
                            <img src="assets/images/icons/call-black.svg" class="w-5 flex shrink-0" alt="icon">
                            <p class="font-semibold">628123123123123</p>
                        </div>
                    </div>
                    <a href="index.html"
                        class="w-full rounded-full py-3 px-5 text-center bg-garuda-blue hover:shadow-[0px_14px_30px_0px_#0068FF66] transition-all duration-300">
                        <span class="font-semibold text-white">Book More Tickets</span>
                    </a>
                    <a href="booking-details.html" class="w-full rounded-full py-3 px-5 text-center bg-garuda-black ">
                        <span class="font-semibold text-white">View My Booking Details</span>
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection