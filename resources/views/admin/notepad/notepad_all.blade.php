@extends('admin.adminmaster')
@section('contents')
  <div class="page-header card">
                                          <div class="card-block">
                                                      <ul class="breadcrumb-title ">
                                                  <li class="breadcrumb-item">
                                                      <a href="{{url('/')}}"> <i class="fa fa-home"></i> </a>
                                                  </li>
                                                  <li class="breadcrumb-item"><a href="#!">Notepad</a>
                                                          </li>
                                                          <li class="breadcrumb-item"><a href="#!">All Notepad</a>
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
                                                    <th>Notepad Title</th>
                                                    <th>Description</th>
                                                    <th>Manage</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($all_notepad as $notepad)
                                                <tr>
                                                    <td>{{ $notepad->id }}</td>
                                                    <td>{{ $notepad->notepad_title }}</td>
                                                    <td>{{str_limit( $notepad->notepad_des, 45)}}</td>
                                                    <td>
                                                      <a href="{{url('/notepad/edit/'.$notepad->id)}}" style="padding:5px; background-color:#30caf0; color:#fff;margin-right:5px;">
                                                        <i class="ti-pencil-alt" s></i>
                                                      </a>
                                                      <a href="{{url('/notepad/view/'.$notepad->id)}}" style="padding:5px; background-color:#47E402; color:#fff;">
                                                      <i class="ti-eye"></i>
                                                      </a>
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
         "lengthMenu": [[10, 25, 50, -1], [ 10, 25, 50, "All"]],
         dom: 'Bfrtip',
         buttons: [
             {
                 extend: 'copyHtml5',
                 text: 'Reports',
                 exportOptions: {
                     columns: [ 0, 1,2]
                 }
             },
             {
                 extend: 'excelHtml5',
                 text: 'Print',
                 title: 'Notepad',
                 exportOptions: {
                   columns: [ 0,1,2]
                 }
             },
             {
                 extend: 'pdfHtml5',
                 text: 'Export',
                 title: 'Notepad',
                 exportOptions: {
                     columns: [0,1,2]
                 }
             }
         ]
     } );
   });
  </script>
@endsection
