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
            <div class="form">
                 <div class="container header">
                     <div class="row">
                         <div class=" col-xs-4 col-xs-4">
                            <form method="post" action="user_joinus.php">
                                 <div class="form-group">
                                   <input type="Name" class="form-control" placeholder="Name" name="name">
                                 </div>
                                 <div class="form-group">
                                     <input type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                 </div>                                 
                                 <div class="radio" name="gender">
                                   GENDER:
                                     <label>
                                       <input type="radio" name="gender" value="male">male
                                     </label>
                                     <label>
                                       <input type="radio" name="gender" value="female">female
                                     </label>
                                     <label>
                                       <input type="radio" name="gender" value="other">other
                                     </label>
                                 </div>
                                 <div class="form-group">
                                     <input type="date" class="form-control" placeholder="Date-Of-Birth(yy-mm-dd)" name="dob" pattern="^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$">
                                 </div>
                                 <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Adhar card-Number" name="acno">
                                 </div>
                                 <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Shop Licence-Number" name="slno">
                                 </div>
                                 <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Contact Number" name="contactno">
                                 </div>                                 
                                 <div class="form-group">
                                      <input type="City" class="form-control" placeholder="City" name="city">
                                 </div>
                                 <div class="form-group">
                                      <input type="Address" class="form-control" placeholder="Address" name="address">
                                 </div>
                                 <center><input type="submit" class="btn btn-primary" value="Send Responsive"></center>
                            </form>                  
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
        </div>
    </body>
</html>
