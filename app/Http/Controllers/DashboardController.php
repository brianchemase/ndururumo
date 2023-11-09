<?php

namespace App\Http\Controllers;

use App\Models\ClientsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


    public function billing(Request $request)
    {
        $clients_list= ClientsModel::all();   
        //return $clients_list;
        if(isset($_GET['q']))
        {    
            $id_no=$_GET['q'];
            $details=$_GET['q'];

            $selectedOption = $request->input('q');
           
            $selectedValues = explode(',', $selectedOption);
            $mtr_no = $selectedValues[0];
            $client_id = $selectedValues[1];

            //return $client_id;

            $id_no = $selectedValues[0];

           // return $loanId;
            $details = $selectedValues[1];

            $results = DB::table('tbl_clients')->where('mtr_no', $mtr_no)->get();

            $date="";

            $running_balance=$client_id_no=$loan_id_no=$phone_no=$client_name=$loanId=0;

            //$loan_id_no = DB::table('loan_repayments')->orderBy('id', 'desc')->where('id_number', $id_no)->select('loan_id')->first()->loan_id;
            $prev_reading = DB::table('tbl_billing')->orderBy('id', 'desc')->where('mtr_no', $mtr_no)->select('last_reading')->first()->last_reading;
            $client_id_no = DB::table('tbl_billing')->orderBy('id', 'desc')->where('mtr_no', $mtr_no)->select('id_no')->first()->id_no;
            $prev_reading = DB::table('tbl_billing')->orderBy('id', 'desc')->where('mtr_no', $mtr_no)->select('last_reading')->first()->last_reading;
            //return $prev_reading;


            return view('account.billing', ['results'=>$results], compact( 'clients_list','date','mtr_no','client_id_no','prev_reading','phone_no','client_name','loanId'));
        }

        return view('account.billing', compact('clients_list'));
    }

    public function payment()
    {
        $clients_list= ClientsModel::all();

        return view ('account.paymentregistration', compact('clients_list'));
    }
}
