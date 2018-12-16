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
                                                          <li class="breadcrumb-item"><a href="#!">All Installments</a>
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
@php
  // echo "<pre>";
  // print_r($customers);
  // echo "</pre>";
  $i =1;
@endphp
  <div class="card-block table-border-style">
                                    <div class="table-responsive">
                                        <table id="table_customer" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>manage</th>
                                                    {{-- <th>Month Chats</th> --}}
                                                    <th>Select Company Name</th>
                                                    <th>Quotation</th>
                                                    <th>Invoice</th>
                                                    <th>Services</th>
                                                    <th>Total Amount</th>
                                                    <th>Installment Duration</th>
                                                    <th>Installment Unit</th>
                                                    <th>Per Unit Repayment</th>
                                                    <th>Installment Start Date</th>
                                                    <th>Installment End Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($installment_all as $installment)
                                                <tr>
                                                  <td>{{ $installment->id }}</td>
                                                  <td>
                                                    <a href="{{url('/installment/edit/'.$installment->id)}}" style="padding:5px; background-color:#30caf0; color:#fff;margin-right:5px;">
                                                        <i class="ti-pencil-alt" ></i>
                                                    </a>
                                                  </td>
                                                  <td>
                                                    <a href="{{url('/installment/view/'.$installment->id)}}" style="padding:5px; background-color:#30caf0; color:#fff;margin-right:5px;">
                                                      <i class="ti-eye"></i>
                                                    </a>
                                                  </td>
                                                    {{-- <td>
                                                      <a href="{{url('/')}}" style="padding:5px; background-color:#30caf0; color:#fff;margin-right:5px;">
                                                        <i class="ti-bar-chart-alt"></i>
                                                      </a>
                                                    </td> --}}
                                                    {{-- <td>{{$installment->Chart_list->amount}}</td> --}}
                                                    <td>{{$installment->select_company_name}}</td>
                                                    <td>{{$installment->quotation}}</td>
                                                    <td>{{$installment->invoice}}</td>
                                                    <td>{{str_limit($installment->services,35)}}</td>
                                                    <td>{{$installment->total_amount}}</td>
                                                    <td>{{$installment->installment_duration}}</td>
                                                    <td>{{$installment->installment_unit}}</td>
                                                    <td>{{$installment->per_unit_repayment}}</td>
                                                    <td>{{$installment->installment_start_date}}</td>
                                                    <td>{{$installment->installment_end_date}}</td>
                                                </tr>

                                                  @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

          </div>
            </div>
        </div>

    </div>
</div>

@endsection
@section('script_here')

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
   $(document).ready(function() {
     $('#table_customer').DataTable( {


         "lengthMenu": [[ 10, 25, 50, -1], [ 10, 25, 50, "All"]],
         dom: 'Bfrtip',
         buttons: [
             {
                 extend: 'copyHtml5',
                 text: 'Reports',
                 exportOptions: {
                     columns: [  0, 3,4,5,6,7,8,9,10,11,12]
                 }
             },
             {
                 extend: 'excelHtml5',
                 text: 'Print',
                   title: 'Installment All Accounts',
                 exportOptions: {
                   columns: [ 0,  3,4,5,6,7,8,9,10,11,12]
                 }
             },
             {
                 extend: 'pdfHtml5',
                  title: 'Installment All Accounts ',
                 text: 'Export',
orientation: 'landscape',
                 exportOptions: {
                     columns: [0,3,4,5,6,7,8,9,10,11,12]
                 }
             }
         ]
     } );
   });
  </script>
@endsection
