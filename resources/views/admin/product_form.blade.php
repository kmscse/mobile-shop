@extends('admin.layouts.nav')

@section('content')
<h3 class="text-center mt-2 mb-4">Add Products</h3>
        <form method="POST" action="{{ route('add.product') }}"  enctype="multipart/form-data">
          @csrf
          <input class="form-control mb-2" placeholder="Name" name="name">

          <div class="row">
            <div class="col-md-6">
              <input type="" name="price" class="form-control mb-2" placeholder="Enter Price">
            </div>
            <div class="col-md-6">
              <input type="" name="discount_price" class="form-control mb-2" placeholder="Enter Discount Price">
            </div>
            
          </div>

          <div class="row mt-2">
            <div class="col-md-6">
              <label class="fw-bold mb-2">Category</label>
              <select class="form-control" name="category_id">
                <option>-- Choose ---</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category -> category}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6">
              <label class="fw-bold mb-2">Discount Expire Date</label>
              <input type="date" name="discount_expire_date" class="form-control mb-2">
            </div>
          </div>

          <label class="fw-bold my-2">Description</label>
          <textarea id="editor" name="description"></textarea>

          <label class="fw-bold my-4">Product Photo Upload</label>
          <input type="file" name="product_photos[]" multiple><br>

          <button class="btn btn-primary">Publish</button>
        </form>
    
    <script src="{{asset('ckeditor.js')}}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector('#editor'))
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection