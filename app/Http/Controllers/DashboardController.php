<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function home()
    {



        return view('account.home');
    }

    public function blank()
    {


        return view('account.blank');
    }
    public function form()
    {



        return view('account.forms');
    }


    public function table()
    {



        return view('account.table');
    }
}
