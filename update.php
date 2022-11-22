


<?php include'connect.php'?>

<?php
$id =$_GET['updateid'];
$sql = "SELECT * FROM product WHERE id = $id "; 
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
    $id=$row['id'];     
    $Itemcode = $row['Itemcode'];
    $Productname = $row['Productname'];
    $Quantity = $row['Quantity'];
    $Productprice = $row['Productprice'];
  
if(isset($_POST['submit'])){ 
    $Itemcode = $_POST['itemcode'];
    $Productname = $_POST['productname'];
    $Quantity = $_POST['quantity'];
    $Productprice = $_POST['productprice'];

   $sql = " UPDATE  product set Itemcode ='$Itemcode',Productname='$Productname',Quantity='$Quantity',Productprice=$Productprice WHERE id = $id ";
   $result=mysqli_query($con,$sql);
   if($result){
    // echo "Updated Succesfully";
    header('location:index.php');
   }
   else{
    die(mysqli_error($con));

   }  
}

$con->close();
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
<link rel="stylesheet" href="ak.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<form action="" method="post">
            <div class="navbar">
            <a class="#" href="#"> BillNum  <input type="number" name ="billnum" ></a>
            
            <a class="#" href="#" ><i class="fa fa-fw fa-user"></i> CustomerName  <input type="text" name ="customername"> </a> 

            <a href="#"><i class="fa fa-fw fa-phone"></i> Contact  <input type="text" name ="contact"> </a>
           

            <a href="#"><i class="bi bi-calendar-date"   ></i> Date  <input type="date" name ="date" > </a>
                  


            <a href="#"><i class="fa fa-fw fa-home my-2 col-sm-6" ></i> Home  </a> 


            

            </div>
      
        </form>
                
  
</nav>
<div class="parent"> 
        <div class="container">
    
          <form action="" class="form" method="post">
          <div class="form-group row my-5">
                <label for="colFormLabelSm" class=" col-sm-4 col-form-label col-form-label-sm"><h4>Itemcode</h4></label>
                <div class="col-sm-8">
                 <input type="text" name="itemcode" class="form-control" autocomplete="off" required value=<?php echo $Itemcode;?> >
                </div>

          </div>
          <div class="form-group row my-5">
                    <label for="colFormLabelSm" class=" col-sm-4 col-form-label col-form-label-sm"><h4>Prouductname</h4></label>
                    <div class="col-sm-8">
                    <input type="text" name="productname" class="form-control" autocomplete="off" required value=<?php echo $Productname;?> >
                    </div>
          </div>
          <div class="form-group row my-5 ">
                    <label for="colFormLabelSm" class=" col-sm-4 col-form-label col-form-label-sm"><h4>Quantity</h4></label>
                    <div class="col-sm-8">
                    <input type="text"  name="quantity" class="form-control" autocomplete="off"  required value=<?php echo $Quantity;?>>
                    </div>
          </div>
          <div class="form-group row my-4">
                    <label for="colFormLabelSm" class=" col-sm-4 col-form-label col-form-label-sm"><h4>Prouductprice</h4></label>
                    <div class="col-sm-8">
                    <input type="text"  name="productprice"  class="form-control" autocomplete="off"  required value=<?php echo $Productprice;?> >
                    </div>
          </div>
          <button type="submit" name="submit" class="btn btn-info" >ADD</button>
          
        </form>       
        </div>
        <div class="box">
        <table class="table table-transparent table-striped overflow-hidden" #id=table > 
            <thead class="header">
                <tr class="bg-dark text-white">
                <th scope="col">S.NO</th>
                <!-- <th scope="col">Itemcode</th> -->
                <th scope="col">Productname</th>
                <th scope="col">Quantity</th>
                <th scope="col">Productprice</th>
                <th scope="col">Total</th>
                <th scope="col" >Operations</th>
                </tr>
            </thead>
            <tbody>
            <?php include'getdata.php' ?>
                
            </tbody>
        </table>
        </div>
        </div>
     <div class="footer">
        <div class="paid"><button type="submit" name="paid" class="btn btn-info"><a href="submit.php" class="text-white"> Submit</a></button></div>
 </div>

        
        
</div>
</body>
</html>