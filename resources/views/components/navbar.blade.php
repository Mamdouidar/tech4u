<nav class="navbar navbar-expand-lg navbar-light bg-transparent d-flex align-items-center">
  <a class="navbar-brand mx-5" href="/">Tech4U</a>
  <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/products">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/categories">Categories</a>
      </li>
    </ul>
  </div>
  <div class="mx-5">
    <a href="/cart" class="btn btn-transparent btn-outline-dark"><i class="fa fa-shopping-cart"></i> Cart <span class="badge badge-success text-danger">{{ session()->has('cart') ? session()->get('cart')->totalQty : ''}}</span></a>
  </div>
  <span class="ml-5">Are you an Admin ?</span>
  <a href="/login" class="btn btn-transparent btn-outline-dark my-2 mx-2 my-sm-0">Login</a>
</nav>