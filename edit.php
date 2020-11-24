<?php
include "giit.php";
$regis=$_GET["regis"];

$name="";
$email="";
$profession="";
$status="";

$res=mysqli_query($conn,"select * from giit where regis=$regis");
while($row=mysqli_fetch_array($res))
{
  $name=$row["name"];
  $email=$row["email"];
  $profession=$row["profession"];
  $status=$row["status"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CANDIDATE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<!---enter details--------------------------------------------------------------------------------------------------------------------------------->
<div class="container">
       <h1 class="c">Enter the Updated Data</h1>
   <form action="" name="form1" method="POST">
     <div class="b" class="form-group">
       <label for="Registration No.">Resgistration No.</label>
       <input type="text" class="form-control" id="regis" placeholder="Enter Your Registration No." name="regis" value="<?php echo $regis ?>">
     </div><br>
     <div class="b" class="form-group">
       <label for="name">Name</label>
       <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" value="<?php echo $name ?>" >
     </div><br>
     <div class="b" class="form-group">
       <label for="email">Email ID</label>
       <input type="email" class="form-control" id="email" placeholder="Enter Your Email ID" name="email"value="<?php echo $email ?>"  >
     </div><br>
     <div class="b" class="form-group">
       <label for="Profession">Profession</label>
       <input type="text" class="form-control" id="profession" placeholder="Enter Your Profession" name="profession" value="<?php echo $profession ?>" >
     </div><br>
     <div class="b" class="form-group">
       <label for="status">Status</label>
       <input type="text" class="form-control" id="status" placeholder="Enter Your Status (Active/Non-active)" name="status" value="<?php echo $status ?>"  >
     </div><br>
     <div class="form-group form-check">
     </div>
     <button type="submit" name="update" class="btn btn-dark btn-block">Update</button>
   </form>
 </div>
   </div>



</body>


<?php
if(isset($_POST["update"]))
{
  mysqli_query($conn,"update giit set regis='$_POST[regis]',name='$_POST[name]',email='$_POST[email]',status='$_POST[status]' where regis=$regis");
  ?>
  <script type="text/javascript">
  window.location.href="editable.php";
  </script>
  <?php
}

?>


</html>
