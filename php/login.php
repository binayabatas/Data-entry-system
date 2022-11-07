
    <?php
      session_start();
      if ($_POST) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $encpassword=md5($password);
        //establish a database connection
        $con=mysqli_connect('localhost', 'root' ,'', 'kavre_municipality');
        //
        $sql="SELECT * from user_details where username='$username' and password='$encpassword'";
        $res=mysqli_query($con,$sql);
        $count=mysqli_num_rows($res);
        if($count==1){
          $_SESSION['username']=$username;
          header("location:dashboard.php");
        }
        else
        {
          echo"<script>alert('Invalid username or password!'); window.location='login.php'</script>";
        }
      }
      ?>
    
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
    <div class="icon">
      <div class="l-icon">
        <a href="https://www.facebook.com/Kavrerm">
           <img src="../img/fb.png" alt="facebook">
        </a>
        <a href="https://twitter.com/Kavrerm">
          <img src="../img/twitter.png" alt="twitter">
        </a>
      </div>
      <div class="r-icon">
        <a href="login.php"><span>Sign In</span></a>
        <a href="register.php">Register</a>
      </div>
    </div>
    <header>
      <div class="container-fluid">
        <div class="logo">
          <a href="#">
            <img src="../img/logo.png" alt="Government Logo">
          </a>
          <div class="span">
            <span>Kavre Municipality</span><br>
            <p>Office of Municipal Executive<br>
            Dhulikhel, Kavre</p>
          </div>
        </div>
        <div class="visitnepal">
          <img src="../img/visitnepal.gif">
        </div>
      </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          eGov Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Personal</a>
          <a class="dropdown-item" href="#">Industrial</a>
          <a class="dropdown-item" href="#">Organizational</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Notices and Information</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
  <div class="page" style="height: 400px; padding: 20px; padding-top: 50px;">
   <center>
    <h1 style="color: #234A83;">Login</h1><br>
    <form action="" method="POST"> 
      <div class="form-group">
        <input type="text" class="form-control" style="width: 20%;" name="username" placeholder="Enter username" id="username" required>
      </div>
      <div class="form-group">
          <input type="password" class="form-control" style="width: 20%;" name="password" placeholder="Enter password" id="password" required>
      </div>
      <div class="form-group">
        <button type="submit" name="login" class="btn btn-danger" style="width: 90px">Login</button>
      </div><br>
      <p style="letter-spacing: 1px;">Don't have an account?<a href="register.php">Create new!</a></p>     
    </form>
  </center>
</div>   
<footer>
  <div class="container-fluid">
    <div class="foot">
    <div class="col-md-3">
      <h5 style="padding-top: 15px;">Notices</h5><hr>
      <ul>
        <li>Public Purchase / Bid Notice</li>
        <li>Law and directory</li>
        <li>Taxes and fees</li>
      </ul>
    </div>
    <div class="col-md-3">
      <h5 style="padding-top: 15px;">eGov Services</h5><hr>
      <ul>
        <li>Personal Registration</li>
        <li>Industrial Registration</li>
        <li>Organizational Registration</li>
      </ul>
    </div>
    <div class="col-md-3">
      <h5>Location</h5><hr>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.2921263470535!2d85.5547643145179!3d27.615467836131653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb09016937a81f%3A0x38b52593791e2abf!2sDhulikhel%20Municipality%20Office!5e0!3m2!1sen!2snp!4v1635341070871!5m2!1sen!2snp" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="col-md-3">
      <h5>Contact Details</h5><hr>
      <p style="color: white">
        Kavre Village Office<br>
        Dhulikhel, Kavre<br>
        Phone No: 01-6924118<br>
        Email: info@Kavremunicipality.gov.np<br>
    </div>
  </div>
  </div>
</footer>
<div class="copyright">
  <h6 style="color: #234A83; text-align: center; padding-top: 15px;">© 2021  Kavre Municipality</h6>
  <p style="float: right;">Developed By:<a href="https://github.com/binayabatas/" target="_blank"> Binaya Batas</a></p>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
