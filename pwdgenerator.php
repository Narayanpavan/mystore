
<!DOCTYPE html>
<html>
    <head>
   <title>NH-Company</title>
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
            <div class="std3">
              <div id="wrapper">
                 <div id="signup_form">
                    <p id="signup_label">Random Password Generator</p>
                    <form method="post"action="generate_password.php">
                                 <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                 <br>
                                 <input type="date" class="form-control"  name="dob" placeholder="DOB(YY-MM-DD)" pattern="^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$">
                                 <br>
                                 <input type="submit" name="signup" value="DO SIGNUP">
                    </form>
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
