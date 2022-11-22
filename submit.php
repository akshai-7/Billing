
<?php
$con = new mysqli('localhost','root','','Billing');
if(!$con){
    die(mysqli_error($con));
}
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous"> -->



</head> 
<body>


    
<form action="" method="post">
            <div class="navbar">
            <a class="#" href="#"> BillNum  <input type="number" name ="billnum" ></a>
            <a class="#" href="#" ><i class="fa fa-fw fa-user"></i> CustomerName  <input type="text" name ="customername"> </a> 
            <a href="#"><i class="fa fa-fw fa-phone"></i> Contact  <input type="text" name ="contact"> </a>
            <a href="#"><i class="bi bi-calendar-date"   ></i> Date  <input type="date" name ="date" > </a>
            <a href="#"><i class="fa fa-fw fa-home my-2 col-sm-6" ></i> Home  </a> 
            <!-- <div class="paid"><button type="hidden"  name="paid" class="btn btn-primary">PAID</button></div> -->
            </div>
        </form>
            
<div class="parent"> 
       
        <div class="box-1">
        <table class="table table-transparent table-striped overflow-hidden" #id=table > 
            <thead class="header">
                <tr class="bg-dark  text-white" >
                <th scope="col">S.NO</th>
                <!-- <th scope="col">BillNum</th>
                <th scope="col">Customername</th> -->
                <!-- <th scope="col">Contact</th> -->
                <th scope="col">Itemcode</th>
                <th scope="col">Productname</th>
                <th scope="col">Quantity</th>
                <th scope="col">Productprice</th>
                <th scope="col">Total</th>
                <th scope="col" >Operations</th>
                </tr>
            </thead>
            <tbody>
              

            <?php 
// <-Data get from table->
                $sql = " SELECT * FROM product details" ;
                    $result=mysqli_query($con,$sql);
                 if($result){
                    for($id=0;$row=mysqli_fetch_assoc($result);$id++)
                    {
                        
                
                    $id=$row['id'];  
                    // $BillNum=$_POST['BillNum'];
                    // $CustomerName = $row['customername'];
                    // $Contact = $row['contact'];   
                    $Itemcode = $row['Itemcode'];
                    $Productname = $row['Productname'];
                    $Quantity = $row['Quantity'];
                    $Productprice = $row['Productprice'];
                    $Total =$row['Productprice']*$row['Quantity'];
                    
                        echo '<tr><th scope="row">'.$id.'</th>
                      
                        <td>'.$Itemcode.'</td>
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
       
            </tbody>
        </table>
        </div>
<!-- <div class="footer">
        <div class="paid"><button type="submit" name="paid" class="btn btn-info"><a href="submit.php" class="text-white"> Home</a></button></div>
 </div> -->
        


        <?php include'connect.php' ?> 
     
        

        
     </div>
     <div class="footer">
        <div class="paid"><button type="submit" name="paid" class="btn btn-info"><a href="index.php" class="text-white"> Home</a></button></div>
 </div>
        
</div>





</body>
</html>