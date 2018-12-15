@extends('admin.adminmaster')
@section('contents')

    <div class="page-header card">
                                            <div class="card-block">
                                                        <ul class="breadcrumb-title ">
                                                    <li class="breadcrumb-item">
                                                        <a href="{{url('/')}}"> <i class="fa fa-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Customers</a>
                                                            </li>
                                                            <li class="breadcrumb-item"><a href="#!">Add Customer</a>
                                                            </li>
                                                </ul>
                                            </div>
                                        </div>
<div class="main-body">
    <div class="page-wrapper">

        <div class="page-body">
          <div class="row">
<div class="col-lg-12">
  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif

  <form action="{{ route('customer.submit') }}" method="post" enctype="multipart/form-data">
@csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="company_name">Company Name</label>
        <div class="col-sm-10">
            <input type="text" id="company_name" class="form-control" name="company_name" value="{{old('company_name')}}" placeholder="Company Name">
        </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="customer_name">Customer Name</label>
        <div class="col-sm-10">
            <input type="text" id="customer_name" class="form-control" name="customer_name" value="{{old('customer_name')}}" placeholder="Customer Name">
            @if ($errors->has('customer_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('customer_name') }}</strong>
                </span>
            @endif
        </div>

      </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="contact">Contact</label>
        <div class="col-sm-10">
            <input type="text" id="contact" class="form-control" name="contact" value="{{old('contact')}}" placeholder="Contact">
            @if ($errors->has('contact'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('contact') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="email">Email</label>
        <div class="col-sm-10">
            <input type="email" id="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email Address">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="domain">Domain Name</label>
        <div class="col-sm-10">
            <input type="text" id="domain" class="form-control" name="domain" value="{{old('domain')}}" placeholder="Domain Name">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="cpanel_link">Cpanel Link</label>
        <div class="col-sm-10">
            <input type="text" id="cpanel_link" class="form-control" name="cpanel_link" value="{{old('cpanel_link')}}" placeholder="Cpanel Link">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="cpanel_id_pw">Cpanel ID and Password</label>


        <div class="col-sm-5">

            <input type="text" id="cpanel_id_pw" class="form-control" name="cpanel_id" value="{{old('cpanel_id')}}" placeholder="Cpanel ID">
        </div>
        <div class="col-sm-5">
          <input type="text" id="cpanel_password" class="form-control" name="cpanel_password" value="{{old('cpanel_password')}}" placeholder="Cpanel Password">
        </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="website_link">Website Admin Link</label>
      <div class="col-sm-10">
        <input type="text" id="website_link" class="form-control" name="website_link" value="{{old('website_link')}}" placeholder="Website Admin Link">
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="website_link">Website ID and Password</label>
      <div class="col-sm-5">

          <input type="text" id="website_id_pw" class="form-control" name="website_id" value="{{old('website_id')}}" placeholder="Website ID">
      </div>
      <div class="col-sm-5">
        <input type="text" id="website_password" class="form-control" name="website_password" value="{{old('website_password')}}" placeholder="Website Password">
      </div>
    </div>


    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="services_type">Type Of Services</label>
      <div class="col-sm-10">
        <textarea name="services_type" id="services_type"  rows="5" cols="5" class="form-control" placeholder="Type Of Services">{{ old('services_type') }}</textarea>
        {{-- <input type="text" id="services_type" class="form-control" name="services_type" placeholder="Cpanel Link"> --}}
      </div>
    </div>

    <hr>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="email_hosting_years">Email Hosting Years</label>
      <div class="col-sm-5">

        <select id="email_hosting_years" name="email_hosting_year" class="form-control">
            <option value="0" selected >Select Year</option>
            <option value="1">1 Year</option>
            <option value="2">2 Years</option>
            <option value="3">3 Years</option>
            <option value="4">4 Years</option>
            <option value="5">5 Years</option>
            <option value="6">6 Years</option>
            <option value="7">7 Years</option>
            <option value="8">8 Years</option>
            <option value="9">9 Years</option>
            <option value="10"> 10 Years</option>
            <option value="11"> 11 Years</option>
            <option value="12">12 Years</option>
            <option value="13">13 Years</option>
            <option value="14">14 Years</option>
            <option value="15">15 Years</option>
            <option value="16">16 Years</option>
            <option value="17">17 Years</option>
            <option value="18">18 Years</option>
            <option value="19">19 Years</option>
            <option value="20">20 Years</option>
        </select>
        {{-- <input type="text" id="seo_services" class="form-control" name="seo_services" placeholder="Seo Services Years"> --}}
      </div>
      <div class="col-sm-5">

        <select name="email_hosting_month" class="form-control">
            <option value="0" selected>Select Month</option>
            <option value="1">1 Month </option>
            <option value="2">2 Months</option>
            <option value="3">3 Months</option>
            <option value="4">4 Months</option>
            <option value="5">5 Months</option>
            <option value="6">6 Months</option>
            <option value="7">7 Months</option>
            <option value="8">8 Months</option>
            <option value="9">9 Months</option>
            <option value="10">10 Months</option>
            <option value="11">11 Months</option>
        </select>
        {{-- <input type="text" id="seo_services" class="form-control" name="seo_services" placeholder="Seo Services Years"> --}}
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="">Start Date and End Date</label>
      <div class="col-sm-5">
        <div class='input-group date datepicker'>
		                    <input type='text' class="form-control" name="hosting_start_date" value="{{old('hosting_start_date')}}" placeholder="Email Hosting Start Date" />
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
                  </div>
      <div class="col-sm-5">
        <div class='input-group date datepicker'>
		                    <input type='text' class="form-control" name="hosting_end_date" value="{{old('hosting_end_date')}}" placeholder="Email Hosting End Date" />
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
                  </div>
    </div>

  <hr>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="seo_services" value="{{old('seo_services')}}">Seo Services Years</label>
      <div class="col-sm-5">

        <select id="seo_services" name="seo_year" class="form-control">
            <option value="0" selected>Select Year</option>
            <option value="1">1 Year</option>
            <option value="2">2 Years</option>
            <option value="3">3 Years</option>
            <option value="4">4 Years</option>
            <option value="5">5 Years</option>
            <option value="6">6 Years</option>
            <option value="7">7 Years</option>
            <option value="8">8 Years</option>
            <option value="9">9 Years</option>
            <option value="10">10 Years</option>
            <option value="11">11 Years</option>
            <option value="12">12 Years</option>
            <option value="13">13 Years</option>
            <option value="14">14 Years</option>
            <option value="15">15 Years</option>
            <option value="16">16 Years</option>
            <option value="17">17 Years</option>
            <option value="18">18 Years</option>
            <option value="19">19 Years</option>
            <option value="20">20 Years</option>
        </select>
        {{-- <input type="text" id="seo_services" class="form-control" name="seo_services" placeholder="Seo Services Years"> --}}
      </div>
      <div class="col-sm-5">

        <select name="seo_month" value="{{old('seo_month')}}" class="form-control">
            <option value="0" selected>Select Month</option>
            <option value="1">1 Month </option>
            <option value="2">2 Months</option>
            <option value="3">3 Months</option>
            <option value="4">4 Months</option>
            <option value="5">5 Months</option>
            <option value="6">6 Months</option>
            <option value="7">7 Months</option>
            <option value="8">8 Months</option>
            <option value="9">9 Months</option>
            <option value="10">10 Months</option>
            <option value="11">11 Months</option>
        </select>
        {{-- <input type="text" id="seo_services" class="form-control" name="seo_services" placeholder="Seo Services Years"> --}}
      </div>
    </div>


    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="">Start Date and End Date</label>
      <div class="col-sm-5">
        <div class='input-group date datepicker'>
                        <input type='text' class="form-control" name="seo_start_date" value="{{old('seo_start_date')}}" placeholder="Seo Start Date" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
      <div class="col-sm-5">
        <div class='input-group date datepicker'>
                        <input type='text' class="form-control" name="seo_end_date" value="{{old('seo_end_date')}}" placeholder="Seo End Date" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
    </div>
    <hr>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label" >Files</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" name="img_name" >
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"> </label>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-out-dashed btn-primary btn-square">Submit</button>
        {{-- <input type="file" id="files" class="form-control" name="files" > --}}
      </div>
    </div>




    {{-- <div class="form-group row">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="Password input">
        </div>
    </div> --}}
    {{--         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Select Box</label>
            <div class="col-sm-10">
                <select name="select" class="form-control">
                    <option value="opt1">Select One Value Only</option>
                    <option value="opt2">Type 2</option>
                    <option value="opt3">Type 3</option>
                    <option value="opt4">Type 4</option>
                    <option value="opt5">Type 5</option>
                    <option value="opt6">Type 6</option>
                    <option value="opt7">Type 7</option>
                    <option value="opt8">Type 8</option>
                </select>
            </div>
        </div> --}}
            </form>
          </div>
            </div>
        </div>

        <div id="styleSelector">

        </div>
    </div>
</div>

@endsection
