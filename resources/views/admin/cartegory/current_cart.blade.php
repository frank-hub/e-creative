@extends('admin.layouts.frame')
@section('main')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>id</th>
            <th>Cartegory</th>
            <th>Created Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>id</th>
            <th>Cartegory</th>
            <th>Created Date</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
            @foreach ($cartegories as $cartegory)
            <tr>
                <td>CART{{$cartegory->id}}</td>
                <td>{{$cartegory->cartegory}}</td>
                <td>{{$cartegory->created_at->format('F-d-Y')}}</td>
                <td>
                  <a href="{{route('cartegory.edit', $cartegory['id'])}}" class="btn btn-xs btn-success">
                    <i class="fa fa-pencil-square-o"></i>
                  </a>
                <form method="post" action="{{route('cartegory.destroy',$cartegory['id'])}}">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection