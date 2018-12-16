@extends('admin.adminmaster') @section('contents')
<div class="page-header card">
  <div class="card-block">
    <ul class="breadcrumb-title ">
      <li class="breadcrumb-item">
        <a href="{{url('/')}}"> <i class="fa fa-home"></i> </a>
      </li>
      <li class="breadcrumb-item"><a href="#!">Installment</a>
      </li>
      <li class="breadcrumb-item"><a href="#!">Edit Installment</a>
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

          <form action="{{ route('installment.submit.chart') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="email_hosting_years">Company Name</label>
              <div class="col-sm-10">
                @php
                  // echo "<pre>";
                  // if ($installment_details->select_company_name == $customer_details[0]->company_name) {
                  //   return "yes";
                  // }
                  // print_r($installment_details->select_company_name);
                  // print_r($customer_details[0]);
                  // echo "</pre>";
                @endphp
                <select id="email_hosting_years" name="select_company_name" class="form-control">
                  <option value="" selected>Select Company Name</option>



                  @foreach ($customer_details as $customer_detail) @if (!empty($customer_detail->company_name))
                    <option value="{{$installment_details->select_company_name}}" @if ($installment_details->select_company_name == $customer_detail->company_name) {{ 'selected' }} @endif >{{$installment_details->select_company_name}}
                    </option>

                  <option value="{{$customer_detail->company_name}}">{{ $customer_detail->company_name }}</option>
                  @endif @endforeach


                </select>
                {{--
                <input type="text" id="seo_services" class="form-control" name="seo_services" placeholder="Seo Services Years"> --}}
                <button type="button" class="btn btn-mat btn-info " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Other</button>

              </div>
            </div>



            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="quotation">Quotation</label>
              <div class="col-sm-10">
                <input type="text" id="quotation" class="form-control" name="quotation" value="{{$installment_details->quotation}}" placeholder="Quotation">
                <input type="hidden" id="" class="form-control" name="my_id" value="{{$installment_details->id}}">
              </div>
            </div>



            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="invoice">Invoice</label>
              <div class="col-sm-10">
                <input type="text" id="invoice" class="form-control" name="invoice" value="{{$installment_details->invoice}}" placeholder="Invoice">

              </div>
            </div>


            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="services">Services</label>
              <div class="col-sm-10">
                <textarea name="services" id="services" rows="5" cols="5" class="form-control" placeholder="Services">{{ $installment_details->services }}</textarea>
              </div>
            </div>


            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="total_amount">Total Amount</label>
              <div class="col-sm-10">
                <input type="number" id="total_amount" class="form-control" name="total_amount" value="{{$installment_details->total_amount}}" placeholder="$ Total Amount"> @if ($errors->has('total_amount'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('total_amount') }}</strong>
                </span> @endif
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="installment_duration">Installment Durations</label>
              <div class="col-sm-10">

                <select id="installment_duration" name="installment_duration" class="form-control">
                  <option value="1" @if ($installment_details->installment_duration == 1) {{ 'selected' }} @endif>Monthly
                  </option>
                  <option value="0" @if ($installment_details->installment_duration == 0) {{ 'selected' }} @endif>Yearly
                  </option>
                </select>
              </div>
            </div>

            {{-- Carbon::parse('2000-01-15 12:00')->floatDiffInMonths('2000-02-24 06:00'); --}}

            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="installment_unit">Total Installment Unit</label>
              <div class="col-sm-10">
                <input type="number" id="installment_unit" class="form-control" name="installment_unit" value="{{$installment_details->installment_unit}}" placeholder="Total Installment Unit"> @if ($errors->has('installment_unit'))
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('installment_unit') }}</strong>
                    </span> @endif
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="per_unit_repayment">Per Unit Repayment</label>
              <div class="col-sm-10">
                <input type="number" id="per_unit_repayment" class="form-control" name="per_unit_repayment" value="{{$installment_details->per_unit_repayment}}" placeholder="$ Per Years Repayment"> @if ($errors->has('per_unit_repayment'))
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('per_unit_repayment') }}</strong>
                    </span> @endif
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="">Start Date and End Date</label>
              <div class="col-sm-5">
                <div class='input-group date datepicker'>
                  <input type='text' class="form-control" name="installment_start_date" value="{{$installment_details->installment_start_date}}" placeholder="Start Date" /> @if ($errors->has('installment_start_date'))
                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('installment_start_date') }}</strong>
                                </span> @endif
                  <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
              <div class="col-sm-5">
                <div class='input-group date datepicker'>
                  <input type='text' class="form-control" name="installment_end_date" value="{{$installment_details->installment_end_date}}" placeholder="End Date" /> @if ($errors->has('installment_end_date'))
                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('installment_end_date') }}</strong>
                                </span> @endif
                  <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <div class="card-block table-border-style">
                  <div class="table-responsive">
                    {{-- --}} {{-- <pre> --}}

                    {{-- {{$installment_details->Chart_list}} --}}

                  {{-- </pre> --}}
                    <table id="test-table" class="table table-condensed">
                      <thead>
                        <tr>
                          <th>Mothn</th>
                          <th>Amount</th>
                          <th>Status</th>
                          <th>Balance</th>

                        </tr>
                      </thead>
                      <tbody id="test-body">
                        @foreach ($installment_details->Chart_list as $v) {{-- @php print_r($v->id); @endphp --}}
                        <tr id="row0">
                          <td>

                            <select id="seleted_month_name" name="seleted_month_name[]" class="form-control">
                              {{--
                              <option value=" " selected>Select Month</option> --}} @foreach ($months as $month)
                              <option value="{{$month['id']}}" @if ($v->seleted_month_name == $month['id']) {{ 'selected' }} @endif >{{ $month['month_name']}}</option>

                              <option value="{{$month['id']}}">{{ $month['month_name']}}</option>

                              @endforeach


                            </select>
                            {{-- @if ($errors->has('seleted_month_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('seleted_month_name') }}</strong>
                              </span> @endif --}} {{--
                            <input name='from_value0' value='100' type='text' class='form-control' /> --}}
                          </td>
                          <td>
                            <input name='amount[]' value="{{$v->amount}}" type='number' class='form-control input-md' /> {{-- @if ($errors->has('amount'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('amount') }}</strong>
                              </span> @endif --}}
                          </td>
                          <td>
                            <select id="email_hosting_years" name="status[]" class="form-control">
                              {{--
                              <option value="" selected>Select Month</option> --}}


                              <option value="0" @if ($v->status == 0) {{ 'selected' }} @endif>{{ "Pending" }}</option>

                              <option value="1" @if ($v->status == 1) {{ 'selected' }} @endif>{{ "Due" }}</option>

                              <option value="2" @if ($v->status == 2) {{ 'selected' }} @endif>{{ "Paid" }}</option>



                            </select>
                            {{-- @if ($errors->has('status'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('status') }}</strong>
                              </span> @endif --}}
                          </td>
                          <td>
                            <input name='balance[]' value="{{$v->balance}}" type='number' class='form-control input-md' /> {{-- @if ($errors->has('balance'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('balance') }}</strong>
                              </span> @endif --}}
                          </td>
                          {{-- <td> --}}
                            {{-- <button class='delete-row btn btn-primary' id="one_delete" type='button'>Delete</button> --}}
                            {{--
                            <input value="Delete" class='delete-row btn btn-primary' type='button' /> --}}
                          {{-- </td> --}}
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{-- <input id='add-row' class='btn btn-primary' type='button' value='Add' /> --}}
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label"> </label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-out-dotted btn-primary btn-square">Edit Installment Accounts</button>
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
        <form action="{{route('company.add')}}"  method="post" enctype="multipart/form-data">
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
                  <input type="text" id="customer_name" class="form-control" name="customer_name" value="{{old('customer_name')}}" placeholder="Customer Name">
                  @if ($errors->has('customer_name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('customer_name') }}</strong>
                      </span>
                  @endif
              </div>

            </div>

          <div class="form-group">
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

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>

<script type="text/javascript">
  $(document).on("click", "#add-row", function() {
    var new_row = $('#row0').clone('#row0');
    // var new_row = '<tr id="row' + row + '"><td><input name="from_value' + row + '" type="text" class="form-control" /></td><td><input name="from_value' + row + '" type="text" class="form-control" /></td><td><input name="from_value' + row + '" type="text" class="form-control" /></td><td><input name="to_value' + row + '" type="text" class="form-control" /></td><td><input class="delete-row btn btn-primary" type="button" value="Delete" /></td></tr>';
    // var new_row = '<tr id="row' + row + '"><td><input name="from_value' + row + '" type="text" class="form-control" /></td><td><input name="from_value' + row + '" type="text" class="form-control" /></td><td><input name="from_value' + row + '" type="text" class="form-control" /></td><td><input name="to_value' + row + '" type="text" class="form-control" /></td><td><input class="delete-row btn btn-primary" type="button" value="Delete" /></td></tr>';
    // alert(new_row);
    new_row.find('input').val('');
    $('#test-body').append(new_row);
    row++;
    return false;
  });
  $("#add-row").click(function() {
    $("#row1").removeClass("d-none");
  });

  // Remove criterion
  $(document).on("click", ".delete-row", function() {
     // alert("deleting row#");
    if (row > 1) {
      $(this).closest('tr').remove();
      row--;
    }
    return false;
  });
  $(document).ready(function() {
      $('#email_hosting_years').select2();
  });
</script>
@endsection
