@extends('admin.adminmaster') @section('contents')
<div class="page-header card">
  <div class="card-block">
    <ul class="breadcrumb-title ">
      <li class="breadcrumb-item">
        <a href="{{url('/')}}"> <i class="fa fa-home"></i> </a>
      </li>
      <li class="breadcrumb-item"><a href="#!">Notepad</a>
      </li>
      <li class="breadcrumb-item"><a href="#!">Add Notepad</a>
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

          <form action="{{ route('add.notepad.submit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="notepad_title">Title</label>
              <div class="col-sm-10">
                <input type="text" id="notepad_title" class="form-control" name="notepad_title" value="{{old('notepad_title')}}" placeholder="Title">
                @if ($errors->has('notepad_title'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('notepad_title') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="notepad_des">Description</label>
              <div class="col-sm-10">
                <textarea name="notepad_des" id="notepad_des" rows="5" cols="5" class="form-control" placeholder="Description...">{{ old('notepad_des') }}</textarea>
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
