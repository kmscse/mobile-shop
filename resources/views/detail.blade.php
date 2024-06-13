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
				@foreach(explode(',', $product->product_photo) as $k=>$p)
			    <div class="carousel-item @if($k==0) active @endif">
			      <img src="{{ asset('photos/'.$p) }}" class="d-block w-100" alt="...">
			    </div>
				@endforeach
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
			<h3>{{ $product->name }}</h3>
            @if($product->created_at->format('Y-m-d') >= date('Y-m-d', strtotime('-1days')))
			  		<span class="badge bg-warning rounded-pill">New</span>
			@endif
			<span class="badge bg-danger rounded-pill">Best Seller</span>
            @if($product->discount_price)
				<span class="badge bg-success rounded-pill">
					{{ round(100-$product->discount_price/$product->price*100, 2) }}%off - Upto {{$product->discount_expire_date}}
				</span>
			@endif
			@foreach($available_products as $available_product)
			<span class="badge bg-info rounded-pill">{{ $available_product->storage }} / {{ $available_product->color->color }} - {{ $available_product->quantity }} items in stock</span>
			@endforeach

			<br><br>
			<label class="fw-bold"> Price :</label> {{ number_format($available_product->product->price) }} MMK <br>
			@if($product->discount_price)
			<label class="fw-bold"> Discount Price :</label> {{ number_format($available_product->product->discount_price) }} MMK <br><br>
			@endif

			<label class="fw-bold">Descriptions</label>
			<p>{!! $available_product->product->description !!}</p>
			<form>
			<div class="row">   
			<div class="col-md-5">
				<label class="fw-bold mb-2">Available Color </label>
				<select class="form-control color">
					<option>--- Choose ---</option>
					@foreach($available_products as $available_product)
					<option value="{{ $available_product->color_id }}">{{ $available_product->color->color }}</option>
					@endforeach
				</select>	
			</div>
			<div class="col-md-5">
				<label class="fw-bold mb-2">Available Memory</label>
				<select class="form-control storage">
					<option>--- Choose ---</option>
					@foreach($available_products as $available_product)
					<option value="{{ $available_product->storage }}">{{ $available_product->storage }}</option>
					@endforeach
				</select>	
			</div>
			<div class="col-md-2">
				<label class="fw-bold mb-2">Quantity</label>
				<input type="number" class="form-control quantity" value="1" >	
				<span class="badge qty_error bg-warning"></span>
			</div>
			</div>
			<button class="btn btn-primary mt-4 atc_btn">Add to Cart</button>
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

<script>
	$('.color').change(function(){
		var color_id = $(this).val()
		var product_id = {{ $product->id }}
		$.ajax({
			url:"{{ route('detail.color') }}",
			method:'GET',
			data:{color_id, product_id},
			success:function(result)
			{
				var a = "";
				a+='<option value="">--Choose--</option>'
				for(var i=0; i<result.length; i++)
				{
					a+='<option value="'+result[i].storage+'">'+result[i].storage+'</option>'
				}
				$('.storage').html(a)
			}
		})
	})

	$('.quantity').keyup(function() {
		var quantity = $(this).val()
		var color_id = $('.color').val()
		var product_id = {{ $product->id }}
		var storage = $('.storage').val()
		$.ajax({
			url:"{{ route('detail.storage') }}",
			method: "GET",
			data: {product_id, color_id, storage},
			success: function(result)
			{
				if(quantity > result.quantity)
				{
					$('.qty_error').text("Sorry we have "+result.quantity+" items in stock")
					$('.atc_btn').attr('disabled', true)
				} else if(quantity == "" || quantity < 1)
				{
					$('.atc_btn').attr('disabled', true)
				}else 
				{
					$('.qty_error').text("")
					$('.atc_btn').removeAttr('disabled')
				}
			}
		})
	})
</script>

@endsection