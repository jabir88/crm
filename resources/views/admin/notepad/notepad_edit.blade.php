@extends('admin.adminmaster') @section('contents')
<div class="page-header card">
  <div class="card-block">
    <ul class="breadcrumb-title ">
      <li class="breadcrumb-item">
        <a href="{{url('/')}}"> <i class="fa fa-home"></i> </a>
      </li>
      <li class="breadcrumb-item"><a href="#!">Notepad</a>
      </li>
      <li class="breadcrumb-item"><a href="#!">Edit Notepad</a>
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

          <form action="{{ route('notepad.edit.submit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="notepad_title">Title</label>
              <div class="col-sm-10">
                <input type="text" id="notepad_title" class="form-control" name="notepad_title" value="{{$edit_notepad->notepad_title}}" placeholder="Title">
                <input type="hidden"  class="form-control" name="id" value="{{$edit_notepad->id}}" >
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
                <textarea name="notepad_des" id="notepad_des" rows="5" cols="5" class="form-control" placeholder="Description...">{{ $edit_notepad->notepad_des }}</textarea>
              </div>
            </div>




            <div class="form-group row">
              <label class="col-sm-2 col-form-label"> </label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-out-dotted btn-primary btn-square">Edit Billing Accounts</button>
              </div>
            </div>
          </form>
        </div>
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
