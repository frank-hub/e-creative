@extends('admin.layouts.frame')
@section('main')
  <div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
       <!-- Collapsable Card Example -->
       <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
          <h6 class="m-0 font-weight-bold text-primary">Current Cartegory</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
          <div class="card-body">
            @foreach ($cartegories as $cartegory)
              <a class=" d-flex align-items-center" href="#">
                <div class="mr-3">
                  <div class="icon-circle bg-primary">
                    <i class="fas fa-file-alt text-white"></i>
                  </div>
                </div>
                <div>
                <span class="font-weight-bold">{{$cartegory->cartegory}}</span>
                <div class="small text-gray-500">{{$cartegory->created_at->format('F-d-Y')}}</div>
                </div>
              </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
        <div class="flash-message">
          @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
            @endif
          @endforeach
        </div>
        <form class="user" method="POST" action="{{route('cartegory.store')}}">
            @csrf
            <input type="text" class="form-control form-control-user" id="cart" name="cartegory" placeholder="Add Cartegory">
            <hr>
            <button type="submit" class="btn btn-primary  btn-block">
            Add Cartegory
            </button>
          </form>
    </div>
  </div>

@endsection