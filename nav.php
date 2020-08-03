<?php session_start(); ?>
 
<nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">C.A.I.N</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><img src="images/logo.jpg">  Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <!-- <li>
                        <a href="blog.php">Blog</a>
                    </li> -->
                     
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li class="ml-auto">
                        <a href="register.php">Register</a>
                    </li>


                <li class="nav-item">

                    <?php 

                    if (isset($_SESSION['StudentID']) || isset($_SESSION['admin']))
                    {

                      echo '  <form action="logout.php" method="POST">
                               <button class="btn btn-block" style="margin-top:30px;" name="logout"><strong>LogOut</strong></button>
                              </form>  ';

                    }
                    else
                    {
                      echo ' <a href="login.php" class="nav-link">Login</a>';

                    }


                  ?>

                </li>
 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>