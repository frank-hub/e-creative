@extends('admin.layouts.frame')
@section('main')
   <div class="container">
       <div class="row">
           <div class="col-md-6">
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                        @endif
                    @endforeach
                </div>
                <form class="user" method="post" action="{{route('cartegory.update',$cartegory['id'])}}">
                    @csrf
                    @method('PUT')
                    <input type="text" class="form-control form-control-user" id="cart" name="cartegory" value="{{$cartegory->cartegory}}">
                    <hr>
                    <button type="submit" class="btn btn-primary  btn-block">
                    Update Cartegory
                    </button>
                </form>
           </div>
       </div>
   </div>
@endsection