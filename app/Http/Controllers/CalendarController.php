<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('calendar.index');
    }
}
