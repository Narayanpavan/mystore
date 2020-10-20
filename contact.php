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
              <div class="support">
                <div class="container">
                    <p><img src="C1.jpg" alt ="c1" class="align-right medium"/>
                    <h2><strong>LIVE SUPPORT</strong></h2>
                    <h3>24 hours|7 days a weak|365 days a year Live Technical Support</h3></p>
                    <b>Welcome to our site,our main branch is at samalkota</b>
                    <p><b>Sir/Madam if u have any problem in our site (or) with our shop holders (or) with our material.Please contact to our main branch</b></p>
                    <p>main branch phone-number:7995350886 </p>
                    <div class="row">
                        <div class="col-xs-7">
                             <form>
                                   <h4>CONTACT US:</h4>
                                    <div class="form-group">
                                                <label>Name:</label>
                                                <input type="text" class="form-control">
                                    </div>    
                                    <div class="form-group">
                                                <label>E-mail:</label>
                                                <input type="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                                <label>Location:('where you have problem')</label>
                                                
                                                <select  name="locations" class="form-control">
                                                    <option value=""></option>
                                                    <option value="rjy">Rajumandry</option>
                                                    <option value="kkd">Kakinada</option>
                                                    <option value="slo">samarlkota</option>
                                                    <option value="tuni">Tuni</option>
                                                </select>
                                    </div>                      
                                    <div class="form-group">
                                                <label>Message:</label>
                                                <textarea  class="form-control" cols="20" rows="4"></textarea>
                                    </div>
                                    <a href="products.html" <button type="submit" name="Submit" class="btn btn-primary">submit</button></a>
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
