<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Installment;

use App\Customer;
use App\Billing;

use App\Installmentmonth;
use Carbon\Carbon;

use App\Month;

class InstallmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function installment_add()
    {
        $customer_details =    Customer::all();
        $months =        Month::all();

        // foreach ($months as $month) {
        //     echo $month['id'];
        // }

        // return $months[0]->month_name;
        return view('admin.installment.installment_add', compact('customer_details', 'months'));
    }

    public function installment_submit(Request $req)
    {
        $this->validate($req, [
            'total_amount'=> 'required|numeric',
            'installment_unit'=> 'required|numeric',
            'installment_start_date'=> 'required',
            'installment_end_date'=> 'required',
            'installment_end_date'=> 'required',
            // 'seleted_month_name'=> 'required',
            // 'amount'=> 'required',
            // 'status'=> 'required',
            // 'balance'=> 'required',
          ], [
            'total_amount.required'=>"Please Enter Total Amount.",
            'total_amount.numeric'=>"Please Enter Only Number.",
            'installment_unit.required'=>"Please Enter Total Installment Unit.",
            'installment_unit.numeric'=>"Please Enter Only Number.",
          ]);
        $insert_installment_id = Installment::insertGetId([
            'installment_end_date'=>$req->installment_end_date,
            'installment_start_date'=>$req->installment_start_date,
            'installment_unit'=>$req->installment_unit,
            'invoice'=>$req->invoice,
            'per_unit_repayment'=>$req->per_unit_repayment,
            'quotation'=>$req->quotation,
            'select_company_name'=>$req->select_company_name,
            'installment_duration'=>$req->installment_duration,
            'services'=>$req->services,
            'total_amount'=>$req->total_amount,
            'created_at'=>carbon::now(),

          ]);
        // $i = 0;
        if ($insert_installment_id != 0) {
            foreach ($req->amount as $key => $v) {
                $data =array(
                      'installment_id' => $insert_installment_id,
                      'seleted_month_name' => $req->seleted_month_name[$key],
                      'amount' => $req->amount[$key],
                      'status' => $req->status[$key],
                      'balance' => $req->balance[$key],
                      'created_at' =>  Carbon::now(),
                );
                Installmentmonth::insert([
                  'installment_id'=>$insert_installment_id,
                  'seleted_month_name'=>$data['seleted_month_name'],
                  'amount'=>$data['amount'],
                  'status'=>$data['status'],
                  'balance'=>$data['balance'],
                  'created_at'=>Carbon::now(),
                ]);
                // echo $data['balance']."<br>";
                // print_r($data);
                // echo "</pre>";
            }
        }
        // return "done";
        return back()->with('status', "Add Installment Accounts Add Successfully!");
    }


    public function installment_all()
    {
        $installment_all =  Installment::get();

        return view('admin.installment.installment_all', compact('installment_all'));
    }
    public function installment_view_chart($id)
    {
        $installment_details =    Installment::findOrFail($id);
        $customer_details =    Customer::all();
        $months =        Month::all();
        //
        return view('admin.installment.installment_view_chart', compact('customer_details', 'months', 'installment_details'));
    }
    public function installment_view_chart_submit(Request $req)
    {
        // return $req->all();
        $one_ins = Installment::where('id', $req->my_id)->update([
          'installment_end_date'=>$req->installment_end_date,
          'installment_start_date'=>$req->installment_start_date,
          'installment_unit'=>$req->installment_unit,
          'invoice'=>$req->invoice,
          'per_unit_repayment'=>$req->per_unit_repayment,
          'quotation'=>$req->quotation,
          'select_company_name'=>$req->select_company_name,
          'installment_duration'=>$req->installment_duration,
          'services'=>$req->services,
          'total_amount'=>$req->total_amount,
        ]);
        $installmentmonth =  Installmentmonth::where('installment_id', $req->my_id)->get();

        foreach ($installmentmonth as $key => $id_month) {
            $id_last = $id_month->id;
            // echo "1";
            // return print_r($installmentmonth->id);
            // $id_installment = $one_ins->id;


            // foreach ($req->amount as $key => $v) {
            $data =array(
                      'seleted_month_name' => $req->seleted_month_name[$key],
                      'amount' => $req->amount[$key],
                      'status' => $req->status[$key],
                      'balance' => $req->balance[$key],
                      'created_at' =>  Carbon::now(),
                );
            // echo $data['amount'];
            // echo $data['amount'];
            Installmentmonth::where('id', $id_last)->update([

                  'seleted_month_name'=>$data['seleted_month_name'],
                  'amount'=>$data['amount'],
                  'status'=>$data['status'],
                  'balance'=>$data['balance'],
                ]);
        }
        // echo $data['balance']."<br>";
        // print_r($data);
        // echo "</pre>";
        // }



        // $installment_month =    Installmentmonth::where('installment_id', $id_installment)->update([
        // // return $one_ins;
        //
        //   'seleted_month_name'=>$data['seleted_month_name'],
        //   'amount'=>$data['amount'],
        //   'status'=>$data['status'],
        //   'balance'=>$data['balance'],
        //   'created_at'=>Carbon::now(),
        // ]);
        return back()->with('status', 'Installment Accounts Updated Successfully !');
    }
    public function installment_view_one($id)
    {
        return $id;
    }
}
