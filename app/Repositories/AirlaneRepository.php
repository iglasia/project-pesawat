<?php

namespace App\Repositories;

use App\Interfaces\AirlaneRepositoryInterface;
use App\Models\Airlane;

class AirlaneRepository implements AirlaneRepositoryInterface
{
    public function getAllAirlanes()
    {
        return Airlane::all();
    }
}