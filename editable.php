<?php
include "giit.php";
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
<h1 class="a">Candidate Status</h1><hr>
<!---enter details--------------------------------------------------------------------------------------------------------------------------------->
<div class="container-fluid">
  <div class="row">
   <div class="col-md-4">
     <div class="">
       <h1 class="c">Enter the details of candidate</h1>
   <form action="" name="form1" method="POST">
     <div class="b" class="form-group">
       <label for="Registration No.">Resgistration No.</label>
       <input type="text" class="form-control" id="regis" placeholder="Enter Your Registration No." name="regis">
     </div><br>
     <div class="b" class="form-group">
       <label for="name">Name</label>
       <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
     </div><br>
     <div class="b" class="form-group">
       <label for="email">Email ID</label>
       <input type="email" class="form-control" id="email" placeholder="Enter Your Email ID" name="email">
     </div><br>
     <div class="b" class="form-group">
       <label for="Profession">Profession</label>
       <input type="text" class="form-control" id="profession" placeholder="Enter Your Profession" name="profession">
     </div><br>
     <div class="b" class="form-group">
       <label for="status">Status</label>
       <input type="text" class="form-control" id="status" placeholder="Enter Your Status (Active/Non-active)" name="status">
     </div><br>
     <div class="form-group form-check">
     </div>
     <button type="submit" name="insert" class="btn btn-dark btn-block">Insert</button>
     <button type="submit" name="delete" class="btn btn-dark btn-block">Delete</button>
   </form>
 </div>
   </div>
   <div class="v1"></div>
   <!---records---------------------------------->
   <div class="col-md-7">
     <div class="container-fluid">
     <h1 class="c">Records Of Candidate</h1>
   <table  class="table table-hover table-bordered ">
     <thead>
       <tr class="d">
         <th>Registration No.</th>
         <th>Name</th>
         <th>Email ID</th>
         <th>Profession</th>
         <th>Status</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>

       <?php
       $res=mysqli_query($conn,"select * from giit");
       while($row=mysqli_fetch_array($res))
       {
         echo "<tr>";
         echo "<td>"; echo $row["regis"]; echo "</td>";
         echo "<td>"; echo $row["name"]; echo "</td>";
         echo "<td>"; echo $row["email"]; echo "</td>";
         echo "<td>"; echo $row["profession"]; echo "</td>";
         echo "<td>"; echo $row["status"]; echo "</td>";
         echo "<td>"; ?> <a href="edit.php?regis=<?php echo $row["regis"]; ?>"><button type="button" class="btn btn-success">Edit</button></a>|<a href="delete.php?regis=<?php echo $row["regis"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
       }
       ?>

     </tbody>
   </table>
 </div>
   </div>
  </div>
 </div>



</body>


<?php
if(isset($_POST["insert"]))
{
  mysqli_query($conn,"insert into giit values ('$_POST[regis]','$_POST[name]','$_POST[email]','$_POST[profession]','$_POST[status]')");

  ?>
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php

}

if(isset($_POST["delete"]))
{
  mysqli_query($conn,"delete from giit where regis ='$_POST[regis]'");
  mysqli_query($conn,"delete from giit where name ='$_POST[name]'");
  mysqli_query($conn,"delete from giit where email ='$_POST[email]'");
  mysqli_query($conn,"delete from giit where profession ='$_POST[profession]'");
  mysqli_query($conn,"delete from giit where status ='$_POST[status]'");

  ?>
  <script type="text/javascript">
  window.location.href=window.location.href;
  </script>
  <?php
}

?>


</html>
