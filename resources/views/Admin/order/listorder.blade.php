@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card" style="margin-left: -40px; width: 60rem;padding-top: 10px;">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Danh sách đơn hàng</h3>
    </div>
    <form class="form-inline mr-auto" type="get" action="">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="button button1 " type="submit">Search</button>
  </form>
  <!-- /.card-header -->
  <div class="card-body">
    <table class="table table-bordered">
        @csrf
        <thead>
            <tr>
              <th>#</th>
              <th>Tên khách hàng</th>
              <th>Phương thức thanh toán</th>
              <th>Phương thức vận chuyển</th>
              <th>Tổng tiền</th>
              <th>Ghi chú</th>
              <th>Ngày tạo</th>
              <th>#</th>
          </tr>
      </thead>
      <tbody>
        @foreach( $transactions as $transactions )
        <tr>
          <td>{{$transactions->id}}</td>
          <td>{{$transactions->name}}</td>

          <td>{{$transactions->price}}</td>
          <td>
            <img src="{{asset('storage/app/avatar/'.$transactions->img)}}" alt="" width="100">
        </td>
        <td>{{$transactions->status==1? 'Chưa xử lý' : 'Đã xử lý'}}</td>
        <td>{!!$transactions->description!!}</td>
        <td>{{$transactions->created_at}}</td>
        <td>
            <a href=""><i class="far fa-eye"></i></a>
            <a href="{{ route('removelist_order',['id'=>$transactions -> id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"><i class="fas fa-trash-alt"></i></a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>

</div>
<span>{{ $transactions -> render()}}</span>
</div>
</div>
</div>
@endsection
