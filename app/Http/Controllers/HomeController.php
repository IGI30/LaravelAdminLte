<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Excel::load('emp_email.xls', function ($reader) {

            $reader->each(function($sheet) {
                //
            });
        })->get();
        return view('home');
    }
}
