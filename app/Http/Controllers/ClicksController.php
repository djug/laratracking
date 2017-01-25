<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Click;
use DB;

class ClicksController extends Controller
{
    public function visit($id)
    {
        $click = Click::create(['tracking_id' => $id]);
        return $click->toArray();
    }

    public function getStats()
    {
        $stats = DB::table('clicks')->select('tracking_id', DB::raw('count(*) as nb_clicks'))->groupBy('tracking_id')->get();

        return $stats;
    }
}
