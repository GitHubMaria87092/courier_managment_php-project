<!-- 
<?php

// session_start();

?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
     <!-- PAGE CONTAINER-->
     <div class="page-container">
     <?php  include('header.php');
     ?>


        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li class="active">
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

    



<?php
include('config.php');

$urlid=$_GET['proid'];

if (isset($_POST['sub']))
{

$name=$_POST['name'];
$desc=$_POST['desc'];
$price=$_POST['price'];
$qty=$_POST['qty'];
$cat=$_POST['cat'];

$imageName = $_FILES['file']['name'];
$imageTmpName = $_FILES['file']['tmp_name'];
echo $imageName;
if ($imageName) {
    $imagePath = "upload/". $imageName;
    move_uploaded_file($imageTmpName, $imagePath);

  
    $sql = "UPDATE products SET name='$name', descrip='$desc', price='$price', qty='$qty' ,catid=$cat ,image='$imagePath' WHERE Id='$urlid'";
} 


else {
    
    $sql = "UPDATE products SET name='$name', descrip='$desc', price='$price', qty='$qty',catid=$cat  WHERE Id='$urlid'";
}
$abc=mysqli_query($con,$sql);

if($abc)
 {

 echo " <script> alert('successfully updated'); </script>";
 echo '<script>window.location="catshow.php";</script>';
}
else{

    $mess=mysqli_error($con); }




}




?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Credit Card</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Update Product</h3>
                                        </div>
                                        <hr>





                                        <?php

$urlid=$_GET['proid'];
$sql="select * from products where Id='$urlid'";
$exe = mysqli_query($con, $sql);
$row = mysqli_fetch_array($exe);


?>


                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Cat Name</label>
                                                <input  name="name" type="text" class="form-control"  value="<?php echo $row['name'];?>">
                                            </div>
                                            <div class="form-group has-success">
                                                <label  class="control-label mb-1">Desc</label><input  name="desc" type="text" class="form-control cc-name valid" 
             value="<?php echo $row['descrip'];?>">
                                                
                                            </div>
                                            <div class="form-group has-success">
                                                <label  class="control-label mb-1">Price</label><input  name="price" type="text" class="form-control cc-name valid" 
             value="<?php echo $row['price'];?>">
                                              
                                            </div>
                                            <div class="form-group has-success">
                                               <input  name="imgid" type="hidden"  
             value="<?php echo $row['image'];?>">
                                               
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Image</label> 
                                                <img src="<?php echo $row['image']; ?>"/> 
                                                <input type="file" name="file" />
                                                                        
                                            </div>
                                            <div>

                                

                                            
                                            </div>
                              
                                            <div class="form-group has-success">
<label for="cc-name" class="control-label mb-1">Qty</label><input  name="qty" type="text" class="form-control cc-name valid" 
             value="<?php echo $row['qty'];?>">
                                                
                                            </div>
                                          
                                            </div>

<div>
<div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Category</label><input  name="catiid" type="hidden" 
             value="<?php echo $row['catid'];?>">
             

                                               
            
                                      

<Select for="cc-name" class="control-label mb-1 form-control" name="cat">Select Category
                                                <?php
				
					$sql = "select * from category";
					$exe = mysqli_query($con, $sql);
					while($roww = mysqli_fetch_array($exe)) {
				?>

                                               
<option value="<?php echo $roww['Id'];?>" <?php if ($row['Id'] == $productRow['catid']) echo 'selected'; ?>>
            <?php echo $row['name'];?>
        </option> 
                                              <?php
                                              }
                                              ?>
                                                </Select>

</div>

                                            </div>

                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="sub">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Update</span>
                                                    
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           
                          
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->