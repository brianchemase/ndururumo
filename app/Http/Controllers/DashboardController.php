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

    public function clientsregister()
    {
        return view('account.registerClients');
    }

    public function clients_table()
    {



        return view('account.clientsTable');
    }


    public function billing()
    {


        return view('account.billing');
    }

    public function payment()
    {

        return view ('account.paymentregistration');
    }
}
