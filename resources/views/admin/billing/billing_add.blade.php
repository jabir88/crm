@extends('admin.adminmaster')
@section('contents')
  <div class="page-header card">
                                          <div class="card-block">
                                                      <ul class="breadcrumb-title ">
                                                  <li class="breadcrumb-item">
                                                      <a href="{{url('/')}}"> <i class="fa fa-home"></i> </a>
                                                  </li>
                                                  <li class="breadcrumb-item"><a href="#!">Billing Payment</a>
                                                          </li>
                                                          <li class="breadcrumb-item"><a href="#!">Add Accounts</a>
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

  <form action="{{ route('add.accounts.submit') }}" method="post" enctype="multipart/form-data">
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
        <label class="col-sm-2 col-form-label" for="paid">Paid </label>
        <div class="col-sm-10">
            <input type="number" id="paid" class="form-control" name="paid" value="{{old('paid')}}" placeholder="$ Paid ">
            @if ($errors->has('paid'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('paid') }}</strong>
                </span>
            @endif
        </div>
    </div>



    {{-- <script type="text/javascript">


      function SubtractionBy()
      {
        num1 = document.getElementById("first").value;
        num2 = document.getElementById("second").value;
        document.getElementById("result").innerHTML = Number(num1) - Number(num2);
      }
    </script> --}}

    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="balance">Balance</label>
        <div class="col-sm-10">
            <input type="number" id="balance" onClick="SubtractionBy()"  class="form-control" name="balance" value="{{old('balance')}}" placeholder="$ Balance">
        </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="remark">Remark</label>
      <div class="col-sm-10">
        <textarea name="remark" id="remark"  rows="5" cols="5" class="form-control" placeholder="Remark">{{ old('remark') }}</textarea>
      </div>
    </div>


    <div class="form-group row">
      <label class="col-sm-2 col-form-label"> </label>
      <div class="col-sm-10">
        <button type="submit"  class="btn btn-out-dotted btn-primary btn-square">Add Accounts</button>
      </div>
    </div>
            </form>
          </div>
            </div>
        </div>

    </div>
</div>

@endsection
