<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rate;

trait RatePoint {

    public function getRatePointOfUser($targetId, $rateType)
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $rate = Rate::where('type', $rateType)
                ->where('user_id', $userId)
                ->where('target_id', $targetId)
                ->first();
            return $rate ? $rate['point'] : 0;
        }
        return 0;
    }
}
