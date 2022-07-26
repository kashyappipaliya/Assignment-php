<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Example</title>
  </head>
  <body>

    <!-- Example Code -->
    
    <nav class="navbar bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><b><strong>K.P.</strong></b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">List Of Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
			  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Product Management
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
				 <li><a href="listproduct.php" class="dropdown-item">  Product List</a>
				 
                  
                 
                  
                  
                </ul>
              </li>
            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categary 
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
				<a href="category.php" class="dropdown-item">  Category</a>
                  
                </ul>
              </li>
			  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  User Management 
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
				<a href="user.php" class="dropdown-item"> User Management</a>
                  
                </ul>
              </li>
			  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Order Management 
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
				<button type="button" class="btn btn-outline-secondary btn-lg mb-3"><a href="#">  Order_Management</a></button>
                  
                </ul>
              </li>
			  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Billing 
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
				<button type="button" class="btn btn-outline-secondary btn-lg mb-3"><a href="#">  Billing_Details</a></button>
                  
                </ul>
              </li>
            </ul>
			<br>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    
    <!-- End Example Code -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	
</div>
  </body>
</html>