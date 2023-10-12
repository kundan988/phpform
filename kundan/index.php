<?php
session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $pname=$_POST['name'];
    $pdescription=$_POST['description'];
    $pregularprice=$_POST['regularprice'];
    $pofferprice=$_POST['offerprice'];
    $pstatus=$_POST['status'];
    $pimage=$_POST['image'];
    $pskucode=$_POST['skucode'];
    $pcategory=$_POST['category'];

     if($pregularprice > $pofferprice)  {
    
        $query="insert into product (name,description,regularprice,offerprice,status,image,skucode,category)
         values('$pname','$pdescription','$pregularprice','$pofferprice','$pstatus','$pimage','$pskucode','$pcategory')";

        mysqli_query($con,$query);

        echo "<script type='text/javascript'>alert('successfully added')</script>";
     }
    
     else{
        echo "<script type='text/javascript'>alert('not added')</script>";

     }

}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
    
            <form  method="POST">
        <div class="head1">
            <h2>Product Form</h2>
        </div>

        
        
            <div class="productname">
                <label> Product Name :</label>
                <input type="text" name="name"  required placeholder="Product name" >
            </div>

            <br><br>

            <div class="description">
                <label >Description :</label>
                
                <textarea name="description"  rows="3" placeholder="Describe Your Product"></textarea>
            </div>
            <br>
             <div class="price">
                <h4>Pricing</h4>
                    <label >Regular Price</label>
                    <input type="text" name="regularprice"  placeholder="Regular Price" >

              
                    <label >Offer Price</label>
                    <input type="text" name="offerprice"  placeholder="Offer Price" >

            </div>
            <br>

            <div class="status">
                   <p>Status :</p> 
                    
                    <label >Active</label>
                    <input type="radio" name="status" id="ac"  >
                    <br>
                    <label >Inactive</label>
                    <input type="radio" name="status" id="ac" >

            </div>
            <br>
            
            
            <div class="image">
                <label for="">Upload Image</label>
                <input type="file" name="image"  required>
            </div>
            <br>

            <div class="sku_code">
                <label >SKU Code</label>
                <input type="text" name="skucode" placeholder="Enter SKU code" >
            </div>
            <br>


            <div class="category">

                <label for="categories">Product Category</label>
                <select name="category" id="categories">
                    <option value="men">Men</option>
                    <option value="women">Women</option>
                    <option value="kids">Kids</option>
                    <option value="infants">Infants</option>
                </select>
            </div> 
            <br>
            <input class="btn" type="submit" name="" value="Submit">
            </form>
        
    
    </div>
    
    
</body>
</html>