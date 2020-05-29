<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div style="margin:200px; padding:50px; border-style: solid;">
<h1><a href="test1.php"><i class="fa fa-arrow-left"></i></a> Add New contacts</h1>
<form method="post" action="function.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="Enter name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">DOB</label>
    <input type="dob" name="dob" class="form-control"  placeholder="dd/mm/yyyy">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mobile No. 1.</label>
    <input type="tel" name="mob1" class="form-control"  placeholder="9999999999">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mobile No. 2.</label>
    <input type="tel" name="mob2" class="form-control"  placeholder="9999999999">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">email 1.</label>
    <input type="email" name="email1" class="form-control"  placeholder="abc@gmail.com">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">email 2.</label>
    <input type="email" name="email2" class="form-control"  placeholder="abc@gmail.com">
  </div>
  


  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>



</div>
</body>
</html>