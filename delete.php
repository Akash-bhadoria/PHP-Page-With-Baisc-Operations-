<?php
include "giit.php";
$regis =$_GET["regis"];
mysqli_query($conn,"delete from giit where regis=$regis");
?>

<script type="text/javascript">
window.location.href="editable.php";
</script>
