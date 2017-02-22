<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Click;
use DB;

class ClicksController extends Controller
{
    /**
     * [visit function]
     *
     * @param string $id
     * @return array
     */
    public function visit($id)
    {
        $click = Click::create(['tracking_id' => $id]);
        return $click->toArray();
    }
    
    /**
     * get stats
     *
     * @return \View
     */
    public function getStats()
    {
        $stats = DB::table('clicks')->select('tracking_id', DB::raw('count(*) as nb_clicks'))->groupBy('tracking_id')->get();

        return view('stats')->with(compact('stats'));
    }
}
