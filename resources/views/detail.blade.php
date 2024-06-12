@extends('layouts.nav')

@section('content')
<div class="container mt-5 pt-5">
	<div class="row">
        
		<div class="col-md-4">
			<div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
			  <div class="carousel-indicators">
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			  </div>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="images/iphone1.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="images/iphone1.jpg" class="d-block w-100" alt="...">
			    </div>
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  </button>
			</div>
		</div>
		<div class="col-md-8 py-5">
			<h3>{{ $available_product->product->name }}</h3>
            @if($available_product->product->created_at->format('Y-m-d') >= date('Y-m-d', strtotime('-1days')))
			  		<span class="badge bg-warning rounded-pill">New</span>
			@endif
			<span class="badge bg-danger rounded-pill">Best Seller</span>
            @if($available_product->product->discount_price)
				<span class="badge bg-success rounded-pill">
					{{ round(100-$available_product->product->discount_price/$available_product->product->price*100, 2) }}%off - Upto {{$available_product->product->discount_expire_date}}
				</span>
			@endif
			@foreach($available_product->product as $qcs)
			<!-- <span class="badge bg-success rounded-pill">30%Off - Upto {{ $available_product->product->discount_expire_date }}</span> -->
			<span class="badge bg-info rounded-pill">{{ $qcs->name }} items in stock</span><br><br>
			@endforeach
			<label class="fw-bold"> Price :</label> {{ number_format($available_product->product->price) }} MMK <br>
			<label class="fw-bold"> Discount Price :</label> {{ number_format($available_product->product->discount_price) }} MMK <br><br>

			<label class="fw-bold">Descriptions</label>
			<p>{!! $available_product->product->description !!}</p>
			<form>
			<div class="row">   
			<div class="col-md-5">
				<label class="fw-bold mb-2">Available Color </label>
				<select class="form-control">
					<option>--- Choose ---</option>
					<option>Black</option>
					<option>White</option>
				</select>	
			</div>
			<div class="col-md-5">
				<label class="fw-bold mb-2">Available Memory</label>
				<select class="form-control">
					<option>--- Choose ---</option>
					<option>64gb</option>
					<option>128gb</option>
				</select>	
			</div>
			<div class="col-md-2">
				<label class="fw-bold mb-2">Quantity</label>
				<input type="number" class="form-control" value="1" >	
			</div>
			</div>
			<button class="btn btn-primary mt-4">Add to Cart</button>
			</form>

		</div>
	</div>
	<h3 class="my-5 pt-5">Related Items</h3>
	<div class="row">
		<div class="col-sm-2">
			<div class="card mb-4 shadow-sm">
			  <img src="images/iphone1.jpg" class="card-img-top" alt="...">
			  <div class="card-body text-center bg-light">
			  	<span class="badge bg-warning rounded-pill">New</span>
				<span class="badge bg-success rounded-pill">30%Off</span>
				<span class="badge bg-danger rounded-pill">Best Seller</span>
			    <h6 class="card-title">i-phone 14Pro Max</h6>
			    <p class="card-text"><small>2,300,000 MMK</small></p>
			    <a href="detail.php" class="btn btn-primary btn-sm">Buy Item</a>
			  </div>
			</div>
		</div>
		
	</div>
</div>

@endsection