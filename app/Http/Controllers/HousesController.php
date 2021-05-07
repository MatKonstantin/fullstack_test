<?php

namespace App\Http\Controllers;

use App\Http\Requests\HousesFindRequest;
use App\Models\Houses;

class HousesController extends Controller
{

    /**
     * Find houses ids by condition.
     *
     * @param  \Illuminate\Http\HousesFindRequest $request
     * @return \Illuminate\Http\Response
     */
    public function find(HousesFindRequest $request)
    {
        $form = $request->validated();
        return response()->json(Houses::filterFind($form)->get());
    }
}
