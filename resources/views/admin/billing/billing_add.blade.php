@extends('admin.adminmaster') @section('contents')
<div class="page-header card">
  <div class="card-block">
    <ul class="breadcrumb-title ">
      <li class="breadcrumb-item">
        <a href="{{url('/')}}"> <i class="fa fa-home"></i> </a>
      </li>
      <li class="breadcrumb-item"><a href="#!">Billing Payment</a>
      </li>
      <li class="breadcrumb-item"><a href="#!">Add Billing</a>
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


                <select id="email_hosting_years" name="select_company_name" class="form-control ">
                  <option value=" " selected>Select Company Name</option>



                  {{--
                  <option value="other">Other</option> --}} @foreach ($customer_details as $customer_detail) @if (!empty($customer_detail->company_name))

                  <option value="{{ $customer_detail->company_name }}">{{ $customer_detail->company_name }}</option>
                  @endif @endforeach


                </select>
                {{--
                <input type="text" id="select_company_name2" class="d-none" name="select_company_name2" value=""> --}} {{--
                <input type="text" id="seo_services" class="form-control" name="seo_services" placeholder="Seo Services Years"> --}}
                <button type="button" class="btn btn-mat btn-info " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Other</button>
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
                <textarea name="services" id="services" rows="5" cols="5" class="form-control" placeholder="Services">{{ old('services') }}</textarea>
              </div>
            </div>


            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="total_amount">Total Amount</label>
              <div class="col-sm-10">
                <input type="number" id="total_amount" class="form-control" name="total_amount" value="{{old('total_amount')}}" placeholder="$ Total Amount"> @if ($errors->has('total_amount'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('total_amount') }}</strong>
                </span> @endif
              </div>
            </div>


            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="paid">Paid </label>
              <div class="col-sm-10">
                <input type="number" id="paid" class="form-control" name="paid" value="{{old('paid')}}" placeholder="$ Paid "> @if ($errors->has('paid'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('paid') }}</strong>
                </span> @endif
              </div>
            </div>



            {{--
            <script type="text/javascript">
              function SubtractionBy() {
                num1 = document.getElementById("first").value;
                num2 = document.getElementById("second").value;
                document.getElementById("result").innerHTML = Number(num1) - Number(num2);
              }
            </script> --}}

            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="balance">Balance</label>
              <div class="col-sm-10">
                <input type="number" id="balance" onClick="SubtractionBy()" class="form-control" name="balance" value="{{old('balance')}}" placeholder="$ Balance">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="remark">Remark</label>
              <div class="col-sm-10">
                <textarea name="remark" id="remark" rows="5" cols="5" class="form-control" placeholder="Remark">{{ old('remark') }}</textarea>
              </div>
            </div>


            <div class="form-group row">
              <label class="col-sm-2 col-form-label"> </label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-out-dotted btn-primary btn-square">Add Billing Accounts</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <form action="{{route('company.add')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label class="col-sm-2 col-form-label" for="company_name">Company Name</label>
            <div class="col-sm-10">
              <input type="text" id="company_name" class="form-control" name="company_name" value="{{old('company_name')}}" placeholder="Company Name">
            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-2 col-form-label" for="customer_name">Customer Name</label>
            <div class="col-sm-10">
              <input type="text" id="customer_name" class="form-control" name="customer_name" value="{{old('customer_name')}}" placeholder="Customer Name"> @if ($errors->has('customer_name'))
              <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('customer_name') }}</strong>
                      </span> @endif
            </div>

          </div>

          <div class="form-group">
            <label class="col-sm-2 col-form-label" for="contact">Contact</label>
            <div class="col-sm-10">
              <input type="text" id="contact" class="form-control" name="contact" value="{{old('contact')}}" placeholder="Contact"> @if ($errors->has('contact'))
              <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('contact') }}</strong>
                      </span> @endif
            </div>
          </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Company</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



@endsection @section('script_here')
<script>
  $(document).ready(function() {
    $('#email_hosting_years').select2();
  });
</script>
@endsection
