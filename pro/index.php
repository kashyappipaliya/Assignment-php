<?php
  include('config.php');
?>
<!doctype html>
<form action="config.php" method="post">
      <html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-3  justify-content-center">
    <H4 class="text-center">Login Form</H4>
    <div class="form-group mb-3 " >
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email"  placeholder="Enter email" name="email">
      </div>

      <div class="form-group mb-3 ">
        <label for="Phone" class="form-label">Password</label>
        <input type="password" class="form-control" id="Phone" placeholder="Enter password" name="password">
      </div>

     
        <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
    </form>
  </div>
</body>
</html>