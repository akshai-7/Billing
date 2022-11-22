<?php
$con = new mysqli('localhost','root','','Billing');
if(!$con){
    die(mysqli_error($con));
}
?> 
<?php


if(isset($_POST['submit'])){ 

   
    $BillNum=$_POST['billnum'];
    $CustomerName = $_POST['customername'];
    $Contact= $_POST['contact'];
    
  
  
        $sql = "INSERT INTO details (BillNum,CustomerName,Contact)  VALUES ('$BillNum','$CustomerName','$Contact')";
        $result=mysqli_query($con,$sql);
  
    
        if($result){
         header('location:index.php');
         
        //    echo "Data stored Succesfully";
            // die(mysqli_errno($con));
            // unset($_POST);
        }
        else{
         die(mysqli_error($con));
        }  
    }
    

  


$con->close();


?> 