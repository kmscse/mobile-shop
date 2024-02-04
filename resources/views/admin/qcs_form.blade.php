@extends('admin.layouts.nav')

@section('content')
<h3 class="text-center mt-2 mb-4">Add QCS to Products</h3>
<form action="">
    <input type="" name="" class="form-control mb-2" placeholder="Enter Quantity">

    <label class="fw-bold mb-2">Available Color</label>
    <select class="form-control">
        <option>-- Choose ---</option>
        <option>White</option>
    </select>

    <label class="fw-bold mb-2">Available Storage</label>
    <select class="form-control">
        <option>-- Choose ---</option>
        <option>32gb</option>
    </select>

    <button class="btn btn-primary"></button>
</form>
@endsection