<?php
$db = mysqli_connect('localhost', 'root', '', 'phonebook');


?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}


</style>
</head>
<body>
<div style="margin:200px;padding:20px;border-style:solid;">
<h2>RM - Phonebook</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<ul id="myUL">
<?php
                $selectSQL = "SELECT * FROM detail";
 # Execute the SELECT Query
  if( !( $selectRes = mysqli_query($db, $selectSQL) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysqli_errno($db).': '.mysqli_error($db);
  }else{
    while( $row = mysqli_fetch_assoc( $selectRes ) ){
      
    ?>
  <li id='hideover'><a href="#"><?php
    
    echo $row['name']
  
    ?></a>
  <div id='hideover1' style="padding:20px">
  <div class="container" style="background-color:#add8e6; border-style: solid; margin:10px">
  <div class="row" >
    <div class="col">
    <?php
    
      echo $row['name']."<br>";
      echo $row['date'];
    
      ?>
    </div>
    <form method="get" action="function.php">
    <div class="col">
    
    
    <a class="btn btn-info" style="border-radius:10px;" href='updatedetail.php?edit=<?php echo $row['id']?>' role='button'>Edit</a><br>
    <a class="btn btn-danger" style="border-radius:10px;" href="function.php?delete=<?php echo $row['id']?>" role='button'>remove</a>
    
    
    
    </div>
    </form>
  </div>
  <div class="row"  >
    <div class="col"><?php
    echo "<i class='fa fa-phone' aria-hidden='true'></i> {$row['mob1']} <br>";
    echo "<i class='fa fa-phone' aria-hidden='true'></i> {$row['mob2']}"
    
    ?>
    </div>
    <div class="col"><?php
    echo "<i class='fa fa-envelope' aria-hidden='true'></i> {$row['email1']} <br>";
    echo "<i class='fa fa-envelope' aria-hidden='true'></i> {$row['email2']}"
    
    ?>
    </div>
    
  </div>

  </div>

  </div>
  <script>
  jQuery(document).ready(function(){
    jQuery('#hideover').on('click', function(event) {        
        jQuery('#hideover1').toggle('show');
    });
});
</script>
  </li>
  <?php
    }
  }


  
  ?>
  <!-- <li><a href="#">Agnes</a></li>

  <li><a href="#">Billy</a></li>
  <li><a href="#">Bob</a></li>

  <li><a href="#">Calvin</a></li>
  <li><a href="#">Christina</a></li>
  <li><a href="#">Cindy</a></li> -->
</ul>
<div class="container" style="padding:50px">
  <div class="row">
    <div class="col">
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
    </div>
    <div class="col ">
    <div class="float-right">
    <a href="adddetail.php"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i> </a>
    </div>
    </div>
  </div>



</div>
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}


</script>



</div>
</body>
</html>
