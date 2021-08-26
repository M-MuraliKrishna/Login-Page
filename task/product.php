<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link rel="stylesheet" href="product style.css">
</head>

<body>
    <section class="product">
        <div class="container">
        <h2 class="text-center">  <a href="welcome.php">Home</a> &nbsp;&nbsp;
            <a href="product.php">Product</a> &nbsp;&nbsp;
            <a href="logout.php">Logout</a>
            </h2>
            <br>
            <h1 class="text-center">Product Page</h1>
            <?php
                require 'config.php';
                
                $query="SELECT * FROM product ";
                $query_run=mysqli_query($conn,$query);
                $check_product=mysqli_num_rows($query_run)>0;
                
                if($check_product){
                    while($row=mysqli_fetch_array($query_run))
                    {
                    
                    ?>
                    <div class="product-box">                
                        <div class="product-desc">
                            <h4><?php echo $row['pName']; ?></h4>
                            <p class="product-price"><?php echo $row['pPrice']; ?></p>
                            <p class="product-detail">
                            <?php echo $row['pDesc']; ?>
                            </p>
                            <br>
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                    <?php                                    
                    }                
                }
                else{
                    echo"No Product Found!!!";
                }
            ?>

            <div class="clearfix"></div>        
        </div>
    </section>    

</body>
</html>

