
<?php
$con = new mysqli('localhost','root','','Billing');
if(!$con){
    die(mysqli_error($con));
}
?>
<?php

if(isset($_POST['submit'])){ 

    $Itemcode = $_POST['itemcode'];
    $Productname = $_POST['productname'];
    $Quantity= $_POST['quantity'];
    $Productprice= $_POST['productprice'];
    

   $sql = "INSERT INTO product (Itemcode,Productname,Quantity,Productprice) VALUES('$Itemcode','$Productname','$Quantity','$Productprice')";
   $result=mysqli_query($con,$sql);
   if($result){
    // echo "Data stored Succesfully";
    // header('location:user.php');
   }
   else{
    die(mysqli_error($con));
   }  
}

$con->close();

?> 
	
    <!-- Itemcode	 -->
<!-- Productname	
Quantity	
Productprice	
	
Edit Edit
Copy Copy
Delete Delete
1
1001
apple
1kg
100
	
Edit Edit
Copy Copy
Delete Delete
2 -->
