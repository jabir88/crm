@extends('admin.adminmaster')
@section('contents')

      <div class="page-header card">
          <div class="card-block">
                <ul class="breadcrumb-title ">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Billing</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">View Billing</a>
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
                                          {{$bill_view->id}}
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>Company Name</td>
                                        <td>:</td>
                                        <td>
                                          {{$bill_view->select_company_name}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Quotation</td>
                                        <td>:</td>
                                        <td>
                                          {{$bill_view->quotation}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Invoice</td>
                                        <td>:</td>
                                        <td>
                                          {{$bill_view->invoice}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Services</td>
                                        <td>:</td>
                                        <td>
                                          {{$bill_view->services}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Total Amount</td>
                                        <td>:</td>
                                        <td>
                                          {{$bill_view->total_amount}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Paid</td>
                                        <td>:</td>
                                        <td>
                                          {{$bill_view->paid}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Balance</td>
                                        <td>:</td>
                                        <td>
                                          {{$bill_view->balance}}
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Remark</td>
                                        <td>:</td>
                                        <td>
                                          {{$bill_view->remark}}
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
