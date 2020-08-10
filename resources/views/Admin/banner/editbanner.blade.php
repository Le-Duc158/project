@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-6" style="margin-top: 25px;">
    <!-- general form elements -->
    <div class="card ">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Sửa Banner</h3>
    </div>
    <!-- /.card-header -->

    <!-- form start -->
    <form role="form" method="post" action="" enctype="multipart/form-data">

     {{ csrf_field() }}
     <div class="form-group">
        <label for="formGroupExampleInput" style="margin-left: 20px;">Ảnh</label>
        <input type="file" name="img" class="form-control" id="img" onchange="changeImg(this)" style="width: 250px;margin-left: 15px;">
        <img id="avatar" class="thumbnail" width="300px" src="{{asset($edit->image)}}" style="padding-top: 15px;">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2"  style="margin-left: 20px;">Link</label>
        <input type="text" class="form-control" id="link" name="link" value="{{$edit->link}}" style="width: 550px;margin-left: 15px;">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2"  style="margin-left: 20px;">Title</label>
        <input type="text" class="form-control" id="title" name="title"  value="{{$edit->title}}"  style="width: 550px;margin-left: 15px;">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2"  style="margin-left: 20px;">Position</label>
        <input type="number" class="form-control" id="position" name="position"  value="{{$edit->position}}"  style="width: 550px;margin-left: 15px;">
    </div>


    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-success" name="addNew">Cập nhật</button>
  </div>
</form>
</div>
<!-- /.card -->
</div>
</div>
@endsection
