<?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'attendance';
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if(!$conn) {
    echo "Unable to connect database".mysqli_error($conn);die;
} else {
  echo '<script type="text/javascript"> alert("Database connected succesfully") </script>';
}
?>
