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
                    <li class="breadcrumb-item"><a href="#!">View Notepad</a>
                    </li>
                  </ul>
              </div>
            </div>
<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
          <div class="row">
                      <div class="col-md-10 ">
                                  <table class="table table-striped table-bordered w-100" >
                                      <tr>
                                        <td>ID</td>
                                        <td>:</td>
                                        <td>
                                          {{$notepad_one->id}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Notepad Title</td>
                                        <td>:</td>
                                        <td>
                                          {{$notepad_one->notepad_title}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Description</td>
                                        <td>:</td>
                                        <td>
                                          {{$notepad_one->notepad_des}}
                                        </td>
                                      </tr>



                                  </table>
                                </div>


            </div>
          </div>
        </div>
      <div id="styleSelector">
    </div>
  </div>
</div>

@endsection
