

<?php include'connect.php'?>

<?php 
$sql = " SELECT * FROM product" ;
$result=mysqli_query($con,$sql);
 if($result){
 for($id=0;$row=mysqli_fetch_assoc($result);$id++)
 {
    

$id=$row['id'];  
$BillNum=$row['BillNum'];  
$CustomerName = $row['Customername'];
$Contact = $row['Contact'];   
$Itemcode = $row['Itemcode'];
$Productname = $row['Productname'];
$Quantity = $row['Quantity'];
$Productprice = $row['Productprice'];
$Total =$row['Productprice']*$row['Quantity'];
  
    echo '<tr><th scope="row">'.$id.'</th>
    
    <td>'.$Productname.'</td>
    <td>'.$Quantity.'</td>
    <td>'.$Productprice.'</td>
    <td>'.$Total.'</td>

    <td>
    
    <button class="btn btn-info"> <a href="update.php? updateid='.$id.'" class="text-white " >U</a></button>

    <button class="btn btn-danger"> <a href="delete.php? deleteid='.$id.'" class="text-white">X</a></button></td>
    
   
    </tr>';
 }
}else{
echo "not working";
}   
?>
<?php 
$sql = " SELECT * FROM details" ;
$result=mysqli_query($con,$sql);
 if($result){
 for($id=0;$row=mysqli_fetch_assoc($result);$id++)
 {
    
  
$Itemcode = $row['Itemcode'];
$Productname = $row['Productname'];

$Productprice = $row['Productprice'];

  
    echo  $Itemcode;
    echo  $Productname;
    echo  $Productprice;
 }
}else{
echo "not working";
}   
?>





