<?php

namespace App\Http\Controllers;

use App\Models\ClientsModel;
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

        $clients_list= ClientsModel::all();

       // return $clients_list;

        return view('account.clientsTable', compact('clients_list'));
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
