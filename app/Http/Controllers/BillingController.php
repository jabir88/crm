<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Billing;
use Carbon\Carbon;

class BillingController extends Controller
{
    public function billing_add()
    {
        $customer_details =    Customer::all();
        return view('admin.billing.billing_add', compact('customer_details'));
    }

    public function billing_add_sub(Request $req)
    {
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
    public function installment_add()
    {
        // code...
        $customer_details =    Customer::all();
        return view('admin.installment.installment_add', compact('customer_details'));
    }

    public function installment_submit(Request $req)
    {
        //
        // $customer_details =    Customer::all();
        return $req->all();
        // return view('admin.installment.installment_add', compact('customer_details'));
    }

    public function billing_all()
    {

        // return view('admin.billing.billing_all');
    }
}
