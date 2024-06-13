@extends('layouts.nav')

@section('content')
<div class="container mt-5 pt-5 ">
	<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<tr>
			<th width="100px">ID</th>
			<th>Name</th>
			<th width="100px">Photo</th>
			<th width="150px">Unit Price <small>(MMK)</small></th>
			<th width="70px">Qty</th>
			<th width="100px">Color</th>
			<th width="100px">Size</th>
			<th width="150px">Price <small>(MMK)</small></th>
			<th width="90px">Remove</th>
		</tr>
		<tr>
			<td>1dfsdfdfd</td>
			<td>Iphone 13pro Max</td>
			<td><img src="images/iphone1.jpg" width="70px" ></td>
			<td>1000</td>
			<td><input type="number" value="2" class="form-control"></td>
			<td>Black</td>
			<td>64gb</td>
			<td>2000</td>
			<td><button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button></td>
		</tr>
		<tr>
			<td colspan="7" class="text-end"><b>Delivery Fee</b></td>
			<td colspan="2">200</td>
			
		</tr>
		<tr>
			<td colspan="7" class="text-end"><b>Total Price</b></td>
			<td colspan="2">2200</td>
			
		</tr>
	</table>
	</div>
	<button class="btn btn-primary mb-5">Order</button>

	<div class="row">
		<div class="col-md-5">
			<ul class="list-group shadow-sm">
			  <li class="list-group-item bg-light"><b>Kpay :</b> 0978343243</li>
			  <li class="list-group-item bg-light"><b>WavePay :</b> 0978343243</li>
			  <li class="list-group-item bg-light"><b>KBZ :</b> 4344 4324 2342 2223</li>
			  <li class="list-group-item bg-light"><b>AYA :</b> 4211 6724 2542 6653</li>
			  <li class="list-group-item bg-light"><b>CB :</b> 7653 3224 7742 8723</li>
			  <li class="list-group-item bg-light"><b>UAB :</b> 7544 5524 2342 2763</li>
			</ul>
		</div>
		<div class="col-md-7">
			<form>
				<label class="fw-bold mb-2">Delivery Address ( Without using registrated address )</label> <br>
				<textarea rows="5" class="form-control mb-3" placeholder="Enter Delivery Address ( If you want to add a delivery address without using registrated address, you can fill in there. If not, you can skip this.)"></textarea>

				<label class="fw-bold mb-2">Message</label> <br>
				<textarea rows="5" class="form-control mb-3" placeholder="Enter Message (Optional)"></textarea>
				<label class="fw-bold mb-5">Payment Screenshot :</label> <input type="file" name=""><br>
				<button class="btn btn-primary">CheckOut</button>
			</form>
		</div>
	</div>
	
</div>
@endsection