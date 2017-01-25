<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Click;
class ClicksController extends Controller
{
    public function visit($id)
    {
        $click = Click::create(['tracking_id' => $id]);
        return $click->toArray();
    }
}
