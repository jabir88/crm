@extends('admin.adminmaster')
@section('contents')
  <div class="page-header card">
                                          <div class="card-block">
                                                      <ul class="breadcrumb-title ">
                                                  <li class="breadcrumb-item">
                                                      <a href="{{url('/')}}"> <i class="fa fa-home"></i> </a>
                                                  </li>
                                                  <li class="breadcrumb-item"><a href="#!">Installment</a>
                                                          </li>
                                                          <li class="breadcrumb-item"><a href="#!">Add Installment</a>
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

  <form action="{{ route('installment_add.submit') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group row">
  <label class="col-sm-2 col-form-label" for="email_hosting_years">Company Name</label>
  <div class="col-sm-10">

    <select id="email_hosting_years" name="select_company_name" class="form-control">
        <option value="" selected >Select Company Name</option>

        @foreach ($customer_details as $customer_detail)

          @if (!empty($customer_detail->company_name))

          <option value="{{ $customer_detail->company_name }}" >{{ $customer_detail->company_name }}</option>
        @endif
        @endforeach


    </select>
    {{-- <input type="text" id="seo_services" class="form-control" name="seo_services" placeholder="Seo Services Years"> --}}
  </div>
</div>



    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="quotation">Quotation</label>
        <div class="col-sm-10">
            <input type="text" id="quotation" class="form-control" name="quotation" value="{{old('quotation')}}" placeholder="Quotation">
        </div>
    </div>



    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="invoice">Invoice</label>
        <div class="col-sm-10">
            <input type="text" id="invoice" class="form-control" name="invoice" value="{{old('invoice')}}" placeholder="Invoice">

        </div>
    </div>


        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="services">Services</label>
          <div class="col-sm-10">
            <textarea name="services" id="services"  rows="5" cols="5" class="form-control" placeholder="Services">{{ old('services') }}</textarea>
          </div>
        </div>


    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="total_amount">Total Amount</label>
        <div class="col-sm-10">
            <input type="number" id="total_amount" class="form-control" name="total_amount" value="{{old('total_amount')}}" placeholder="$ Total Amount">
            @if ($errors->has('total_amount'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('total_amount') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="email_hosting_years">Installment Durations</label>
      <div class="col-sm-10">

        <select id="email_hosting_years" name="select_company_name" class="form-control">
            <option value="1" selected>Monthly</option>
              <option value="0" >Yearly</option>
    </select>
      </div>
    </div>

    {{--
    Carbon::parse('2000-01-15 12:00')->floatDiffInMonths('2000-02-24 06:00');
    --}}

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="per_year_repayment">Per Years Repayment</label>
            <div class="col-sm-10">
                <input type="number" id="per_year_repayment" class="form-control" name="per_year_repayment" value="{{old('per_year_repayment')}}" placeholder="$ Per Years Repayment">
                @if ($errors->has('per_year_repayment'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('per_year_repayment') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="">Start Date and End Date</label>
          <div class="col-sm-5">
            <div class='input-group date datepicker'>
                            <input type='text' class="form-control" name="installment_start_date" value="{{old('installment_start_date')}}" placeholder="Start Date" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
          <div class="col-sm-5">
            <div class='input-group date datepicker'>
                            <input type='text' class="form-control" name="installment_end_date" value="{{old('installment_end_date')}}" placeholder="End Date" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
        </div>


    <div class="form-group row">
      <label class="col-sm-2 col-form-label"> </label>
      <div class="col-sm-10">
        <button type="submit"  class="btn btn-out-dotted btn-primary btn-square">Add Installment Accounts</button>
      </div>
    </div>



            </form>
          </div>
            </div>
        </div>

    </div>
</div>

@endsection
