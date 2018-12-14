@extends('admin.adminmaster')
@section('contents')

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
                                          {{$customer_view->id}}
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>Company Name</td>
                                        <td>:</td>
                                        <td>
                                            {{$customer_view->company_name}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Customer Name</td>
                                        <td>:</td>
                                        <td>
                                            {{$customer_view->customer_name}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Contact</td>
                                        <td>:</td>
                                        <td>
                                            {{$customer_view->contact}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>
                                            {{$customer_view->email}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Domain Name</td>
                                        <td>:</td>
                                        <td>
                                            {{$customer_view->domain}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Cpanel Link</td>
                                        <td>:</td>
                                        <td>
                                            {{$customer_view->cpanel_link}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Cpanel ID</td>
                                        <td>:</td>
                                        <td>
                                            {{$customer_view->cpanel_id}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Cpanel Password</td>
                                        <td>:</td>
                                        <td>
                                            {{$customer_view->cpanel_password}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Website Admin Link</td>
                                        <td>:</td>
                                        <td>
                                            {{$customer_view->website_link}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Website ID</td>
                                        <td>:</td>
                                        <td>
                                            {{$customer_view->website_id}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Website Password</td>
                                        <td>:</td>
                                        <td>
                                            {{$customer_view->website_password}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Type Of Services</td>
                                        <td>:</td>
                                        <td>
                                            {{$customer_view->services_type}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Email Hosting  Months</td>
                                        <td>:</td>
                                        <td>
                                            {{$customer_view->email_hosting_month}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Seo Services Mothns</td>
                                        <td>:</td>
                                        <td>
                                            {{$customer_view->seo_month}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Files</td>
                                        <td>:</td>
                                        <td>
                                          @php

                                           $one = $customer_view->files;
                                           // $ecten = $one['extension'];
                                           $ext = pathinfo(storage_path().$one, PATHINFO_EXTENSION);
                                            $ext;
                                          @endphp
                                          @if ($ext == 'jpeg' || $ext == 'jpg' || $ext == 'png')
                                            {{-- {{ "asasdfihn" }} --}}
                                            <a href="{{url('download/'.$customer_view->id)}}">
                                            <img src="{{ asset('storage/') }}/{{ $customer_view->files }}" height="200" alt="">
                                          </a>
                                          @elseif ($ext == 'pdf')
                                                 {{-- @php
                                                   $newFileName = substr($one, 0 , (strrpos($one, ".")));
                                                 @endphp --}}
                                                 <a href="{{url('download/'.$customer_view->id)}}">
                                              <i class="ti-save" style="
    padding: 11px;
    font-size: 60px;
    color: #fff;
    background: red;">
                                              </i>
                                            </a>
                                          @endif
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
