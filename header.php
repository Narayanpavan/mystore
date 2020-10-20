     <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <b><a class="navbar-brand" href="#">NH-Store</a></b>
         </div>
         <div class="collapse navbar-collapse" id ="mynavber">
           <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['email'])){
                ?>
                <li><a href="products.php"><span class=""></span> Products</a></li>
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                <?php
                }else{
                ?>
                <li><a href="aboutus.html"><span class="glyphicon glyphicon-user"></span>Aboutus</a></li>
                <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Branch <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li><a href="details.php">Details</a></li>
                        <li><a href="joinus.php">Join us</a></li>
                    </ul>
                </li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span>Contact</a></li>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>signup</a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span>Login <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li><a href="blogin.php">Branch Login</a></li>
                        <li><a href="plogin.php">people Login</a></li>
                    </ul>
                </li>
                <?php
                }
                ?>
           </ul>
         </div>
       </div>
     </nav>