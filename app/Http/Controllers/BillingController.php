<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Billing;
use App\Installment;
use App\Installmentstatus;
use App\Installmentmonth;
use Carbon\Carbon;
use DB;
use App\Month;

class BillingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function billing_add()
    {
        $customer_details =    Customer::all();

        return view('admin.billing.billing_add', compact('customer_details'));
    }

    public function billing_add_sub(Request $req)
    {
        // return $req->all();
        $this->validate($req, [
     'total_amount'=> 'required|numeric',
   ], [
     'total_amount.required'=>"Please Enter Total Amount.",
     'total_amount.numeric'=>"Please Enter Only Number.",
   ]);

        $insert=  Billing::insert([
        'select_company_name'=>$req->select_company_name,
        'quotation'=>$req->quotation,
        'invoice'=>$req->invoice,
        'services'=>$req->services,
        'total_amount'=>$req->total_amount,
        'paid'=>$req->paid,
        'balance'=>$req->balance,
        'remark'=>$req->remark,
        'created_at'=>Carbon::now(),
      ]);
        if ($insert) {
            return redirect()->back()->with('status', 'Accounts Add Successfully !');
        } else {
            return redirect()->back();
        }
    }

    public function company_add(Request $req)
    {
        $this->validate($req, [
          'company_name'=>'required',
          'customer_name'=>'required',
          'contact'=>'required',
        ]);
        $insert=  Customer::insert([
            'company_name' =>$req->company_name,
            'customer_name' =>$req->customer_name,
            'contact' =>$req->contact,
          ]);
        return back();
    }


    public function billing_all()
    {
        $all_billing = Billing::all();
        return view('admin.billing.billing_all', compact('all_billing'));
    }

    public function billing_edit($id)
    {
        $edit_billing = Billing::where('id', $id)->first();
        // return $edit_billing;
        $customer_details =    Customer::all();
        return view('admin.billing.billing_edit', compact('edit_billing', 'customer_details'));
    }
    public function billing_edit_submit(Request $req)
    {
        $id =$req->id;
        $bill =  Billing::where('id', $id)->update([

          'select_company_name'=>$req->select_company_name,
          'quotation'=>$req->quotation,
          'invoice'=>$req->invoice,
          'services'=>$req->services,
          'total_amount'=>$req->total_amount,
          'paid'=>$req->paid,
          'balance'=>$req->balance,
          'remark'=>$req->remark,
        ]);
        return back()->with('status', "Billing Edited Successfully !");
    }
    public function billing_view($id)
    {
        $bill_view = Billing::where('id', $id)->first();
        return view('admin.billing.billing_view', compact('bill_view'));
    }
}
