@extends('admin.layouts.nav')

@section('content')
<h3 class="text-center mt-2 mb-4">Add Products</h3>
        <form>
          <input class="form-control mb-2" placeholder="Name">

          <div class="row">
            <div class="col-md-4">
              <input type="" name="" class="form-control mb-2" placeholder="Enter Price">
            </div>
            <div class="col-md-4">
              <input type="" name="" class="form-control mb-2" placeholder="Enter Discount Price">
            </div>
            <div class="col-md-4">
              <input type="" name="" class="form-control mb-2" placeholder="Enter Quantity">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-md-3">
              <label class="fw-bold mb-2">Category</label>
              <select class="form-control">
                <option>-- Choose ---</option>
                <option>White</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="fw-bold mb-2">Discount Expire Date</label>
              <input type="date" name="" class="form-control mb-2">
            </div>
            <div class="col-md-3">
              <label class="fw-bold mb-2">Available Color</label>
              <select class="form-control">
                <option>-- Choose ---</option>
                <option>White</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="fw-bold mb-2">Available Storage</label>
              <select class="form-control">
                <option>-- Choose ---</option>
                <option>32gb</option>
              </select>
            </div>
          </div>

          <label class="fw-bold my-2">Description</label>
          <textarea id="editor"></textarea>

          <label class="fw-bold my-4">Product Photo Upload</label>
          <input type="file" name=""><br>

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