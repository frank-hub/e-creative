@extends('admin.layouts.frame')
@section('main')
<div class="flash-message">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
    @endif
  @endforeach
</div>
<form class="user" method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
  @csrf
  <div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <input type="text" class="form-control form-control-user" id="title" name="title" placeholder="Post Title">
    </div>
    <div class="col-sm-6">
      <select name="cartegory" class="form-control form-control-user" id="cart" style="height:auto;">
        <option class="select" selected>Select Cartegory</option>
        @foreach ($cartegories as $cartegory)
          <option value="{{$cartegory->cartegory}}">{{$cartegory->cartegory}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-sm-6 mb-3 mb-sm-0">
      <input type="file" class="form-control form-control-user" name="image_name" id="image" placeholder="Post Title" onchange="return imageval()">
    </div>
    <div id="imgvalidation" style="color:red;"></div>
  </div>
  <div class="form-group">
    <textarea name="body" class="form-control " id="" cols="30" rows="10"></textarea>
  </div>
<hr>
  <button type="submit" class="btn btn-primary btn-user btn-block">
    Publish Article
  </button>
</form>


<!-- /////////////////////////////////t -->

<script type="text/javascript">
  function imageval(){
var fileInput = document.getElementById('image');
var filePath = fileInput.value;
var FileSize = image.files[0].size / 1024 / 1024; // in MB
var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.JPG)$/i;

if(!allowedExtensions.exec(filePath)){
// alert('Please upload file having extensions .jpeg/.jpg/.png/.gif/.JPG only.');
document.getElementById('imgvalidation').innerHTML = 'invalid file format. Please choose .jpeg, .jpg, .png';

fileInput.value = '';
return false;


}else{
//Image preview

if (FileSize > 3) {
   document.getElementById('imgvalidation').innerHTML = 'The file is too big. Exceeds 3MB';
 // $(file).val(''); //for clearing with Jquery
      
fileInput.value = '';
return false;
} else {


   if (fileInput.files && fileInput.files[0]) {
  var reader = new FileReader();
  reader.onload = function(e) {
      // document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
  };
  reader.readAsDataURL(fileInput.files[0]);
}


}


}
}
</script>
@endsection