<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rate;


class RateController extends Controller
{
    public function storeRateSong(Request $request)
    {
        $rate = Rate::create([
            'target_id' => $request->target_id,
            'point' => $request->point,
            'user_id' => $request->user_id,
        ]);
        $rateType = '1';
        $ratePoint = getRatePointOfUser($rate->target_id, $rateType);
        return view('userpage.song', compact('ratePoint'));
    }

    public function storeRateAlbum(Request $request)
    {
        $rate = Rate::create([
            'target_id' => $request->target_id,
            'point' => $request->point,
            'user_id' => $request->user_id,
        ]);
        $rateType = '2';
        $ratePoint = getRatePointOfUser($rate->target_id, $rateType);
        return view('userpage.song', compact('ratePoint'));
    }
}
