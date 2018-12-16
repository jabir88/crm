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
                                                          <li class="breadcrumb-item"><a href="#!">Monthly Installment List</a>
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
                                        <table id="" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Months</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                              @php
                                                 $start_month = $convert;
                                                 $month_number =$months;
                                              $month_number;
                                              @endphp

@for ($i=0; $i < $month_number; $i++)

  <tr>

      <td>
@if ($start_month == 1)
  {{ 'January' }}
@elseif ($start_month == 2)
  {{ 'February' }}
@elseif ($start_month == 03)
  {{ 'March' }}

@elseif ($start_month == 4)
  {{ 'April' }}

@elseif ($start_month == 5)
  {{ 'May' }}

@elseif ($start_month == 6)
  {{ 'June' }}

@elseif ($start_month == 7)
  {{ 'July' }}

@elseif ($start_month == 8)
  {{ 'August' }}

@elseif ($start_month == 9)
  {{ 'September' }}

@elseif ($start_month == 10)
  {{ 'October' }}

@elseif ($start_month == 11)
  {{ 'November' }}

@elseif ($start_month == 12)
  {{ 'Decebemer' }}

@elseif ($start_month == 13)
    {{ 'January' }}
  @elseif ($start_month == 14)
    {{ 'February' }}
  @elseif ($start_month == 15)
    {{ 'March' }}

  @elseif ($start_month ==16)
    {{ 'April' }}

  @elseif ($start_month == 17)
    {{ 'May' }}

  @elseif ($start_month == 18)
    {{ 'June' }}

  @elseif ($start_month == 19)
    {{ 'July' }}

  @elseif ($start_month == 20)
    {{ 'August' }}

  @elseif ($start_month == 21)
    {{ 'September' }}

  @elseif ($start_month == 22)
    {{ 'October' }}

  @elseif ($start_month == 23)
    {{ 'November' }}

  @elseif ($start_month == 24)
    {{ 'Decebemer' }}

@elseif ($start_month == 25)
    {{ 'January' }}
  @elseif ($start_month == 26)
    {{ 'February' }}
  @elseif ($start_month == 27)
    {{ 'March' }}

  @elseif ($start_month ==28)
    {{ 'April' }}

  @elseif ($start_month == 29)
    {{ 'May' }}

  @elseif ($start_month == 30)
    {{ 'June' }}

  @elseif ($start_month == 31)
    {{ 'July' }}

  @elseif ($start_month == 32)
    {{ 'August' }}

  @elseif ($start_month == 33)
    {{ 'September' }}

  @elseif ($start_month == 34)
    {{ 'October' }}

  @elseif ($start_month == 35)
    {{ 'November' }}

  @elseif ($start_month == 36)
    {{ 'Decebemer' }}

@elseif ($start_month == 37)
    {{ 'January' }}
  @elseif ($start_month == 38)
    {{ 'February' }}
  @elseif ($start_month == 39)
    {{ 'March' }}

  @elseif ($start_month == 40)
    {{ 'April' }}

  @elseif ($start_month == 41)
    {{ 'May' }}

  @elseif ($start_month == 42)
    {{ 'June' }}

  @elseif ($start_month == 43)
    {{ 'July' }}

  @elseif ($start_month == 44)
    {{ 'August' }}

  @elseif ($start_month == 45)
    {{ 'September' }}

  @elseif ($start_month == 46)
    {{ 'October' }}

  @elseif ($start_month == 47)
    {{ 'November' }}

  @elseif ($start_month == 48)
    {{ 'Decebemer' }}
@endif

        {{-- {{ $start_month }} --}}
      </td>
      <td>{{ $installmentstatus_details->per_month_amount }}</td>
      <td>
         {{-- {{ $installmentstatus_details->total_months }} --}}

        @if ($installmentstatus_details->total_months == $installmentstatus_details->total_months_remaining )
          <a href="{{url('/installment/months/show/'.$installmentstatus_details->id .'/'.$installmentstatus_details->total_months_remaining)}}" >
            <div class="label-main">
              <label class="label label-primary">Pending</label>
            </div>
          </a>
        @elseif ($installmentstatus_details->total_months > $installmentstatus_details->total_months_remaining &&  $installmentstatus_details->total_months_remaining ==0 )
          <a href="{{url('/installment/months/show/')}}" >
            <div class="label-main">
              <label class="label label-info">Due</label>
            </div>
          </a>
        @else
          <a href="{{url('/installment/months/show/')}}" >
            <div class="label-main">
              <label class="label label-success">Paid</label>
            </div>
          </a>
        @endif

      </td>
  </tr>
  @php
    $start_month++;
  @endphp
@endfor



                                            </tbody>
                                        </table>
                                        <h1>
                                          <a href="{{url('/installment/months/show/update/') }}">
                                            To Update
                                          </a>
                                        </h1>
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
         "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
         dom: 'Bfrtip',
         buttons: [
             {
                 extend: 'copyHtml5',
                 text: 'Reports',
                 exportOptions: {
                     columns: [  0, 1, 2, 3,4,5,6,7,8,9,10,11,12,13,14,15]
                 }
             },
             {
                 extend: 'excelHtml5',
                 text: 'Print',
                 exportOptions: {
                   columns: [ 0, 1, 2, 3,4,5,6,7,8,9,10,11,12,13,14,15]
                 }
             },
             {
                 extend: 'pdfHtml5',
                 text: 'Export',
                 exportOptions: {
                     columns: [1, 2, 3,4,5,12]
                 }
             }
         ]
     } );
   });
  </script>
@endsection
