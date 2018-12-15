<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Carbon\Carbon;
use Artisan;



use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function clear()
    {
        Artisan::call('config:cache');
        Artisan::call('config:clear');
        // return redirect('/admin')->with('success', 'Database Backup Successfully Completed!');
        echo "Done bro";
    }
    public function customeradd()
    {
        return view('admin.customer.addcustomer');
    }
    public function customersubmit(Request $req)
    {
        // $file = $req->file('img_name');

        if ($req->hasFile('img_name')) {
            $file_path = $req->file('img_name')->store('customer');
            // return $file_path;
        }


        $this->validate($req, [
       'customer_name'=> 'required|min:2',
       'contact'=> 'required',
     ], [
       'customer_name.required'=>"Please Enter Customer Name.",
       'contact.required'=>"Please Enter Contact Details.",
     ]);
        $email_year = $req->email_hosting_year;
        $email_years =$email_year*12;
        $email_hosting_month = $req->email_hosting_month;
        $email_months_last = $email_years +$email_hosting_month ;

        $seo_year = $req->seo_year;
        $seo_years =$seo_year*12;
        $seo_month = $req->seo_month;
        $seo_last = $seo_years +$seo_month ;

        $insert=  Customer::insert([
          'company_name' =>$req->company_name,
          'customer_name' =>$req->customer_name,
          'contact' =>$req->contact,
          'email' =>$req->email,
          'domain' =>$req->domain,
          'cpanel_link' =>$req->cpanel_link,
          'cpanel_id' =>$req->cpanel_id,
          'cpanel_password' =>$req->cpanel_password,
          'website_link' =>$req->website_link,
          'website_id' =>$req->website_id,
          'website_password' =>$req->website_password,
          'services_type' =>$req->services_type,
          'email_hosting_month' =>$email_months_last,
          'hosting_start_date' =>$req->hosting_start_date,
          'hosting_end_date' =>$req->hosting_end_date,
          'seo_month' =>$seo_last,
          'seo_start_date' =>$req->seo_start_date,
          'seo_end_date' =>$req->seo_end_date,
          'files' =>$file_path,
          'created_at'=>Carbon::now(),
     ]);

        if ($insert) {
            return redirect()->back()->with('status', 'Customer Add Successfully!');
        } else {
            return redirect()->back();
        }
    }
    public function customer_all()
    {
        $customers =     Customer::all();
        return view('admin.customer.customer_all', compact('customers'));
    }


    public function customer_edit($id)
    {
        $customer_edit =     Customer::where('id', $id)->first();
        $email_customer_year = round($customer_edit->email_hosting_month / 12);
        $email_customer_month = $customer_edit->email_hosting_month % 12;

        $seo_year = round($customer_edit->seo_month / 12);
        $seo_month = $customer_edit->seo_month % 12;
        // return $seo_month;
        return view('admin.customer.customer_edit', compact('customer_edit', 'email_customer_year', 'seo_year', 'seo_month', 'email_customer_month'));
    }
    public function customereditsubmit(Request $req)
    {
        $email_year = $req->email_hosting_year;
        $email_years =$email_year*12;
        $email_hosting_month = $req->email_hosting_month;
        $email_months_last = $email_years +$email_hosting_month ;

        $seo_year = $req->seo_year;
        $seo_years =$seo_year*12;
        $seo_month = $req->seo_month;
        $seo_last = $seo_years +$seo_month ;
        $seo_last;

        $insert=  Customer::where('id', $req->id)->update([
          'company_name' =>$req->company_name,
          'customer_name' =>$req->customer_name,
          'contact' =>$req->contact,
          'email' =>$req->email,
          'domain' =>$req->domain,
          'cpanel_link' =>$req->cpanel_link,
          'cpanel_id' =>$req->cpanel_id,
          'cpanel_password' =>$req->cpanel_password,
          'website_link' =>$req->website_link,
          'website_id' =>$req->website_id,
          'website_password' =>$req->website_password,
          'services_type' =>$req->services_type,
          'email_hosting_month' =>$email_months_last,
          'hosting_start_date' =>$req->hosting_start_date,
          'hosting_end_date' =>$req->hosting_end_date,
          'seo_month' =>$seo_last,
          'seo_start_date' =>$req->seo_start_date,
          'seo_end_date' =>$req->seo_end_date,
    ]);
        if ($req->hasFile('img_name')) {
            $file_path = $req->file('img_name')->store('customer');
            $insert=  Customer::where('id', $req->id)->update([
              'files' =>$file_path,
            ]);
        }
        if ($insert) {
            return redirect()->back()->with('status', 'Customer Updated Successfully!');
        } else {
            return redirect()->back();
        }

        // return $req->all();
    }

    public function download($filename)
    {
        $product_pdf = Customer::where('id', $filename)->first();

        $product_pdf = $product_pdf->files;
        return   Storage::download($product_pdf);
    }
    public function customer_view($id)
    {
        $customer_view = Customer::where('id', $id)->first();
        // return $customer_view;
        return view('admin.customer.customer_view', compact('customer_view'));
    }
}
