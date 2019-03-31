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
              <th>NO:</th>
              <th>Title</th>
              <th>Cartegory</th>
              <th>File Name</th>
              <th>Created date</th>
              <th>Status</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>NO:</th>
            <th>Title</th>
            <th>Cartegory</th>
            <th>File Name</th>
            <th>Created date</th>
            <th>Status</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach ($articles as $article)
            <tr>
              <td>PST{{$article->id}}</td>
              <td>{{$article->title}}</td>
              <td>{{$article->cartegory}}</td>
              <td>{{$article->image_name}}</td>
              <td>{{$article->created_at}}</td>
              <td>

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