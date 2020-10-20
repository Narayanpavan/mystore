<?php
    session_start();
    session_unset();
    session_destroy();
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
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy Lifestyle Store. All Rights Reserved. | Contact Us: +91 90000 00000</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
