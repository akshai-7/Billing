

<?php
$con = new mysqli('localhost','root','','Billing');
if(!$con){
    die(mysqli_error($con));
}

if(isset($_GET['deleteid'])){
     $id = $_GET['deleteid'];

$sql = "DELETE FROM product WHERE id = $id ";
$result=mysqli_query($con,$sql);
if ($result) { 
//   echo "Record deleted successfully";
  header('location:index.php');
} else {
  echo "Error deleting record: " . mysqli_error($con);
}
}

?>