<?php

namespace Jayvaghela\Tinytimezone;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TinytimezonesController extends Controller
{

    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('timezones::time', compact('current_time'));
    }

}