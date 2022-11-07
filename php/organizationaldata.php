<?php
 include_once 'sessionconfirmation.php';
      if($_POST)
      {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $profession = $_POST['profession'];
        
        if (empty($fname) || empty($lname) ||empty($dob) || empty($address) || empty($gender) || empty($profession)) 
        {
         echo '<p class=text-danger>*Please fill in the requested field</p>';
        }
        else
        {
          $con=mysqli_connect('localhost', 'root', '', 'kavre_municipality');
          $rem ="INSERT INTO personal_details ( First_name, Last_name, Date_of_Birth, Address, Gender, Profession) VALUES ('$fname', '$lname', '$dob', '$address', '$gender', '$profession')";
            mysqli_query($con, $rem);
            echo"<script>alert('Data submited successfully!'); window.location='personal.php'</script>";
        }  
      }
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="../img/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Admin Dashboard</title>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
 
              <div class="bottom-border pb-3">
                <img src="../img/logo.png" width="50" class="rounded-circle mr-3" style="margin-top: 20px;">
                <a href="#" class="text-white" style="font-size: 15px;">Kavre</a>
                <a href="#" class="text-white" style="font-size: 15px; position: relative; left: 70px; bottom: 20px;">Municipality</a>
              </div>
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="dashboard.php" class="nav-link text-white p-3 mb-2 "><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
                <li class="nav-item"><a class="nav-link text-white p-3 mb-2 sidebar-link " href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-user fa-lg mr-3"></i>
                <span>Personal</span></a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="py-2 collapse-inner rounded"  style="padding-left: 50px;">
                  <a class="collapse-item" href="personal.php" style="color: white;">Add New</a>
                </div>
                <div class="py-2 collapse-inner rounded" style="padding-left: 50px;">
                  <a class="collapse-item" href="personaldata.php" style="color: white;">View All</a>
                </div>
              </div>
            </li>

                <li class="nav-item"><a class="nav-link text-white p-3 mb-2 sidebar-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-industry fa-lg mr-3"></i>
                <span>Industrial</span></a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="py-2 collapse-inner rounded"  style="padding-left: 50px;">
                  <a class="collapse-item" href="industrial.php" style="color: white;">Add New</a>
                </div>
                <div class="py-2 collapse-inner rounded" style="padding-left: 50px;">
                  <a class="collapse-item" href="industrialdata.php" style="color: white;">View All</a>
                </div>
              </div>
            </li>

                <li class="nav-item"><a class="nav-link text-white p-3 mb-2 sidebar-link current" href="organizational.php" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                <i class="fas fa-building fa-lg mr-3" style="font-size: 14px;"></i><span>Organizational</span></a>
                
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                <div class="py-2 collapse-inner rounded"  style="padding-left: 50px;">
                  <a class="collapse-item" href="organizational.php" style="color: white;">Add New</a>
                </div>
                <div class="py-2 collapse-inner rounded" style="padding-left: 50px;">
                  <a class="collapse-item" href="organizationaldata.php" style="color: white;">View All</a>
                </div>
              </div>
            </li>
            </div>
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto fixed-top py-2 top-navbar" style="background-color: #234a83;">
              <div class="row align-items-center">
                <div class="col-md-8">
                  <h4 class="text-light text-uppercase mb-0" style="text-align: center; float: left;">ORGANIZATIONAL DETAILS</h4>
                </div>
                <div class="col-md-4" style="padding-top: 10px;">
                  <a href="logout.php">
                    <i class="fas fa-sign-out-alt text-light fa-lg mr-3" style="float: right;"></i>
                    <p style="float: right; color: #fff; padding-right: 10px;">Sign Out <span style="color:red;">(<?php echo("{$_SESSION['username']}");?>)</span></p>
                  </a>
                </div>
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
<!--Start of form-->
 <section class="pertb" style="margin-top: 50px; margin-left: 220px;">
  <div class="container-fluid">
  <?php
    $con=mysqli_connect('localhost','root','','kavre_municipality');
    $sql='SELECT *FROM organization_details';
    $res=mysqli_query($con,$sql);

    $result=array();
    while($row=mysqli_fetch_assoc($res)){
      $result[]=$row;
    }

  ?>
 <div class="table-wrapper-scroll-y my-custom-scrollbar">
  <table class="table table-bordered table-striped mb-0" style="font-size: 14px;">
    <thead>
      <tr>
      <th scope="col">Organization ID</th>
      <th scope="col">Organization Name</th>
      <th scope="col">Location</th>
      <th scope="col">Estd Date</th>
      <th scope="col">Ownership</th>
     <th scope="col">Organization Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody> 
    <?php foreach ($result as $value) {?>
      <tr>
        <th scope="row"><?php echo $value['organization_id'];?></th>
        <td><?php echo $value['organization_name'];?></td>
        <td><?php echo $value['organization_location'];?></td>
        <td><?php echo $value['established_date'];?></td>
        <td><?php echo $value['organization_ownership'];?></td>
        <td><?php echo $value['organization_type'];?></td>
        <td><a class="btn btn-primary" href="organizationaledit.php?id=<?php echo $value['organization_id']?>">Edit</a>
          <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" href="organizationaldelete.php?id=<?php echo $value['organization_id']?>">Delete</a></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>
</div>
</section>

    <!-- footer -->
    <footer>
      <hr><div style="text-align: center; font-size: 14px; padding-left: 90px;">
                <p>&copy; 2021 Kavre Municipality. Developed By: <a href="https://github.com/binayabatas/" target="_blank"><span class="text-success">Binaya Batas</span></a></p>
              </div>
    </footer>
    <!-- end of footer -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
  </body>
</html>






