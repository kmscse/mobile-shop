<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@500&display=swap" rel="stylesheet">

  <style type="text/css">
    .l-side li:hover{
      background: #ddd;
    }
    .l-m-side::-webkit-scrollbar {
    display: none;
    }
    *{
     font-family: 'Urbanist', sans-serif;
    }
    .ck-editor__editable_inline {
    min-height: 200px;
}
  </style>

</head>
<body style="background: #ccc;">
<nav class="bg-white navbar shadow-sm navbar-expand-lg fixed-top">
  <div class="container-fluid px-5">
    <a class="navbar-brand" href="#"> 
      <img src="https://via.placeholder.com/100" width="32px">
    </a>

    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link text-dark" aria-current="page" href="#">
          Admin
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link p-0" aria-current="page" href="#">
          <img src="https://via.placeholder.com/100" width="35px" height="35px" class="rounded-circle">
        </a>
      </li>

      
    </ul>

    <i class="fa-solid fa-circle-left d-sm-none ms-1 fs-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive"></i>
  </div>
</nav>

<div class="container-fluid mt-2 pt-5">
  <div class="row mt-3">
    <div class="col-md-3 side"  >
  
      <div style="height:100vh!important; overflow: auto!important;"  class="offcanvas-sm  l-m-side offcanvas-start " tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">
            <img src="https://via.placeholder.com/100" width="35px">
          </h5>
          
          <i class="fa-solid fa-circle-xmark fs-4" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></i>
        </div>
        <div class="offcanvas-body">
          <ul class="list-group l-side w-100">
      <li class="list-group-item  py-3 rounded bg-white border" style="font-size: 18px;">
          <a href="" class="text-dark fw-bold page-link">
            <i class="fa-solid fa-gauge ms-4 me-2"></i>
            Dashboard
          </a>

          <a href="" class="text-dark fw-bold mt-3 page-link">
            <i class="fa-solid fa-gauge ms-4 me-2"></i>
            Category Management
          </a>

          <a href="" class="text-dark fw-bold mt-3 page-link">
            <i class="fa-solid fa-gauge ms-4 me-2"></i>
            Color Management
          </a>
      </li>

      <li class="list-group-item  py-3 bg-white border rounded mt-2" style="font-size: 18px;">
          <a href="" class="text-dark page-link fw-bold">
            <i class="fa-solid fa-cash-register ms-4 me-2"></i>
            Product Management
          </a>
          <a href="" class="text-dark page-link">
            <small><i class="fa-solid fa-cash-register ms-5 mt-3 me-2"></i>
            Add Product</small>
          </a>
          <a href="" class="text-dark page-link">
            <small><i class="fa-solid fa-cash-register ms-5 mt-3 me-2"></i>
            Product List</small>
          </a>
      </li>

      <li class="list-group-item  py-3 bg-white border rounded mt-2" style="font-size: 18px;">
          <a href="" class="text-dark page-link fw-bold">
            <i class="fa-solid fa-cash-register ms-4 me-2"></i>
            Delivery Management
          </a>
          <a href="" class="text-dark page-link">
            <small><i class="fa-solid fa-cash-register ms-5 mt-3 me-2"></i>
            Received Delivery Orders</small>
          </a>
          <a href="" class="text-dark page-link">
            <small><i class="fa-solid fa-cash-register ms-5 mt-3 me-2"></i>
            Delivering Orders</small>
          </a>
          <a href="" class="text-dark page-link">
            <small><i class="fa-solid fa-cash-register ms-5 mt-3 me-2"></i>
            Customer Received Orders</small>
          </a>
      </li>

      <li class="list-group-item  py-3 mt-2 rounded bg-white border" style="font-size: 18px;">
          <a href="" class="text-dark fw-bold page-link">
            <i class="fa-solid fa-gauge ms-4 me-2"></i>
            Order Management
          </a>

          <a href="" class="text-dark fw-bold mt-3 page-link">
            <i class="fa-solid fa-gauge ms-4 me-2"></i>
            Supplier Management
          </a>

          <a href="" class="text-dark fw-bold mt-3 page-link">
            <i class="fa-solid fa-gauge ms-4 me-2"></i>
            Customer Management
          </a>
      </li>

      <li class="list-group-item  py-3 rounded bg-white border mt-2 mb-5" style="font-size: 18px;">
          <a href="" class="text-dark page-link">
            <i class="fa-solid fa-gauge ms-4 me-2"></i>
            Logout
          </a>
      </li>

          </ul>
        </div>
      </div>

    </div>
    <div class="col-md-9 l-m-side content" style="height:95vh!important; overflow: auto!important;">
      <div class="alert bg-white shadow-sm border">

        <?php include('all.php'); ?>
       
      </div>
    </div>
  </div>
</div>
</body>
</html>