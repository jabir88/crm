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
                                                          <li class="breadcrumb-item"><a href="#!">All Customers</a>
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
                                                    <th>Manage</th>
                                                    <th>Company Name</th>
                                                    <th>Customer Name</th>
                                                    <th>Contact</th>
                                                    <th>Email</th>
                                                    <th>Domain Name</th>
                                                    <th>Cpanel Link</th>
                                                    <th>Cpanel ID</th>
                                                    <th>Cpanel Password</th>
                                                    <th>Website Admin Link</th>
                                                    <th>Website ID </th>
                                                    <th>Website Password</th>
                                                    <th>Type Of Services</th>
                                                    <th>Email Hosting  Months</th>
                                                    <th>Seo Services Mothns</th>
                                                    <th>Files</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($customers as $customer)
                                                <tr>
                                                    <td>{{ $customer->id }}</td>
                                                    <td>
                                                      <a href="{{url('/customer/edit/'.$customer->id)}}" style="padding:5px; background-color:#30caf0; color:#fff;margin-right:5px;">
                                                        <i class="ti-pencil-alt" s></i>
                                                      </a>
                                                      <a href="{{url('/customer/view/'.$customer->id)}}" style="padding:5px; background-color:#47E402; color:#fff;">
                                                      <i class="ti-eye"></i>
                                                      </a>
                                                    </td>
                                                    <td>{{ $customer->company_name }}</td>
                                                    <td>{{ $customer->customer_name }}</td>
                                                    <td>{{ $customer->contact }}</td>
                                                    <td>{{ $customer->email }}</td>
                                                    <td>{{ $customer->domain }}</td>
                                                    <td>{{ $customer->cpanel_link }}</td>
                                                    <td>{{ $customer->cpanel_id }}</td>
                                                    <td>{{ $customer->cpanel_password }}</td>
                                                    <td>{{ $customer->website_link }}</td>
                                                    <td>{{ $customer->website_id }}</td>
                                                    <td>{{ $customer->website_password }}</td>
                                                    <td>{{ $customer->services_type }}</td>
                                                    <td>{{ $customer->email_hosting_month }}</td>
                                                    <td>{{ $customer->seo_month }}</td>
                                                    <td>
                                                      @php

                                                       $one = $customer->files;
                                                       // $ecten = $one['extension'];
                                                       $ext = pathinfo(storage_path().$one, PATHINFO_EXTENSION);
                                                        $ext;
                                                      @endphp
                                                      @if ($ext == 'jpeg' || $ext == 'jpg' || $ext == 'png')
                                                        {{-- {{ "asasdfihn" }} --}}
                                                        <a href="{{url('download/'.$customer->id)}}">
                                                        <img src="{{ asset('storage/') }}/{{ $customer->files }}" height="50" alt="">
                                                      </a>
                                                      @elseif ($ext == 'pdf')
                                                             {{-- @php
                                                               $newFileName = substr($one, 0 , (strrpos($one, ".")));
                                                             @endphp --}}
                                                             <a href="{{url('download/'.$customer->id)}}">
                                                          <i class="ti-save" style="padding:12px ; font-size: 25px; color:#fff; background:red">
                                                          </i>
                                                        </a>
                                                      @endif
                                                    </td>

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
