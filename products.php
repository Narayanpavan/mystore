<?php
    require 'connection.php';
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>NH-Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="index.css" rel="stylesheet" type="text/css"/>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    </head>
    <body>
       
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our LifeStyle Store!</h1>
       
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
            <div id="product-grid">
                <div class="txt-heading">Products</div>
                    <?php    
                        $pro="SELECT * FROM items ORDER BY id ASC";
                        $product= mysqli_query($con,$pro);
                        if(!empty($product)){
                            while ($row=mysqli_fetch_array($product)){
                        ?>
                        <div class="product-item">
                            <form>
                                
                                <div class="product-image"><img src="<?php echo $row["image"]; ?>"></div>
			        <div class="product-tile-footer">
			        <div class="product-title"><?php echo $row["name"]; ?></div>
                                <div class="product-price">Price:<?php echo "$".$row["price"]; ?></div>
                                
                                       <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                           
                                            if(check_if_added_to_cart($row["id"])){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?> 
                                </div>                 
                            </form>
                        </div> 
 
                        <?php
		            }
	                }  else {
                            echo "No Records.";

	                }
	                ?>   
            </div>
            </div>
            <br><br><br><br><br><br>
            <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy; NH-Store. All Rights Reserved  |  Contact Us: 7995350886</p>
               </center>
               </div>
            </footer>
                  
    </body>
</html>

