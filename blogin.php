<?php
    require 'connection.php';
    session_start();
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
            <br><br><br>
            <div class="std2">
              <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>MANAGER'S LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <form method="post" action="blogin_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div> 
                                    <div class="form-group">
                                        <input type="date" class="form-control"  name="dob" placeholder="date(YY-MM-DD)" pattern="^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="bpassword" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                    </div>                                    
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">If you need an account? <a href="joinus.php">Click here</a></div>
                        </div>
                    </div>
                </div>
              </div>    
           </div>
           <br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                     <center>
                       <p>Copyright &copy; NH-Store. All Rights Reserved  |  Contact Us: 7995350886</p>
                     </center>
               </div>
           </footer>                      
    </body>
</html>
