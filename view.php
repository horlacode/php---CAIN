<?php 
    require_once('includes/header.php');
    require_once('includes/connection.php');

     


    if(isset($_SESSION['StudentID']) || isset($_SESSION['admin']))
    {
        $_SESSION['GET']=$GetID = $_GET['success'];
        $query = " select * from student_data where ID='".$GetID."'";
        $result = mysqli_query($con,$query);
     
        while($row=mysqli_fetch_assoc($result))
        {
            $StudentID = $row['ID'];
            $Image = $row['img'];
            $FName = $row['FName'];
            $LName = $row['LName'];
            $UName = $row['UName'];
            $DOB = $row['DOB'];
            $Gender = $row ['Gender'];
            $Email = $row['Email'];
            $Date = $row['Date'];
        }
    }


   
?>
<script type="text/javascript">
    

    alert("Welcome to C.A.I.N <?php echo $FName ." " . $LName; ?>");
</script>



<div class="container">
    <div class="row">
        
         <div class="col-lg-12">
            <div class="card bg-dark text-white mt-3">
                <h3 class="text-center py-3"> Student Personal Details</h3>
            </div>
        </div>

    </div>

    <?php
    
        if(isset($_SESSION['admin']) || $_SESSION['GET']==$_SESSION['StudentID'])
        {
            
    ?>        

    <div class="row">
        <div class="col-lg-3">
            <div class="card mt-3">
                <div class="card-title bg-primary text-white py-2 rounded-top">
                    <h4 class="text-center"><?php echo $FName." ".$LName ?></h4>
                </div>
                <div class="card-body">
                    <img src="images/<?php echo $Image ?>" width="200" height="200" class="rounded-circle">
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="card mt-3">
                <table class="table table-striped">
                    <tr>
                        <td>Student ID</td>
                        <td><?php 
                        if ($StudentID <= 9)
                         echo 14090400 .  $StudentID ;
                        else{
                            echo 1409040 .  $StudentID;
                        }

                         ?></td>
                    </tr>

                     <tr>
                        <td>First Name</td>
                        <td><?php echo $FName ?></td>
                    </tr>

                     <tr>
                        <td>Last Name</td>
                        <td> <?php echo $LName ?> </td>
                    </tr>

                    <tr>
                        <td>User Name</td>
                        <td> <?php echo $UName ?> </td>
                    </tr>

                    <tr>
                        <td> Date of Birth</td>
                        <td> <?php echo $DOB ?> </td>
                    </tr>

                    <tr>
                        <td> Gender</td>
                        <td> <?php echo $Gender ?> </td>
                    </tr>

                    <tr>
                        <td> Email</td>
                        <td> <?php echo $Email ?> </td>
                    </tr>

                    <tr>
                        <td> Date of Registeration</td>
                        <td> <?php echo $Date ?> </td>
                    </tr>

                </table>

                 <button class="btn btn-success" style="float: center;"  name="updated"><a href="updated.php">Update Record</button>
            </div>

        </div>

    </div>
    
     <div class="row" style="background-color: gray;">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Build a website
                        <strong>worth visiting</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="images/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
                    <p>A huge thanks to <a href="http://join.deathtothestockphoto.com/" target="_blank">Death to the Stock Photo</a> for allowing us to use the beautiful photos that make this template really come to life. When using this template, make sure your photos are decent. Also make sure that the file size on your photos is kept to a minumum to keep load times to a minimum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
        </div>
    


    <?php
     }
     else
     {
         $Error = " Something Wrong ";
         echo ' <div class="alert alert-danger text-center">'.$Error.'</div>';
     }

    require_once('includes/footer.php');
 
      
    
    ?>

</div>