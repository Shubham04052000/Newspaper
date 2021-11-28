<?php

  $server = "localhost";
  $username = "root";
  $password ="";
  $database = "puneet";
  $con = mysqli_connect($server, $username, $password, $database );

  ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- <link href="style.css" rel="stylesheet"> -->


    <title>join website</title>

    <style>

body{
background-image:url("newspaperpic6.jpeg")
  
}
     
  .container{
    background-color: #999;
    margin: 80px;
    padding: 10px 20px;
            position: absolute;
            top: 45%;
            left: 25%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            height: 85%;

          width: 40%;
        
          
     
    background:rgba(255,255,255,.2);
    box-shadow:0 25px 80px 60px rgba(0,0,0.5);

    font-size:20px;
  }
  h2{
    text-align: center;
    color: black;
    
    
  

  
  }

 button {
    text-align: center;


  
    
  }
p{

  font-family:"Time new roman",Times,serif;
 
    
  }
  
label{
  color:  rgb(3, 9, 28);
  font-family:"Time new roman",Times,serif;
  font-style:bold;




}
.img1{

  position: absolute;
            top: 35%;
            left: 885px;
            transform: translate(-50%, -50%);
            border-radius: 60px;
            height: 65%;

          width: 460px;
        
          
     
    background:rgba(255,255,255,.2);
    box-shadow:0 25px 80px 60px rgba(0,0,0.5);


}
#btn1{

  position: absolute;
            top: 85%;
            left: 885px;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            height: 15%;

          width: 450px;
          box-shadow:0 25px 80px 60px rgba(0,0,0.5);

      
}
#a1{
  cursor: pointer;
  color: white;
  text-decoration: none;
  font-size:40px;
}

/* texarea */
#name{
  
  cursor: pointer;
  border: 0.1rem solid black;
}
#email{
  
  cursor: pointer;
  border: 0.1rem solid black;
}
      
      
#inputcourses{
  
  cursor: pointer;
  border: 0.1rem solid black;
}
#mob{
  
  cursor: pointer;
  border: 0.1rem solid black;
}
#inputAddress{
  
  cursor: pointer;
  border: 0.1rem solid black;
}
#inputCity{
  
  cursor: pointer;
  border: 0.1rem solid black;
}
#inputstate{
  
  cursor: pointer;
  border: 0.1rem solid black;
}


#bt:hover:not(.active) {
           
            cursor: pointer;
            transform: scale(1.1)
        }

     #marku{
    
        color:red;
      }  


    </style>
  </head>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <body>

    
  <!-- nevbar cding -->
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">newspaper</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">

          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="singup.php">signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">login</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/newspaper/join.php">join</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="hindi.php">HINDI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="English.php">English</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="Marathi.php">Marathi</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="Urdu.php">Urdu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Kannada.php">Kannada</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="Tamil.php">Tamil</a>
        </li>
      
        


        
      </ul>
    </div>
  </div>
</nav>

<?php

if(isset($_POST["submit"]))
	 
{
$name = $_POST['name'];
$email = $_POST['email'];
$Language = $_POST['Language'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
 
 
$sqlq="INSERT INTO `admin` ( `name`, `email`, `Language`, `mobile`, `address`, `city`, `state`, `datetime`) VALUES ( '$name', '$email', '$Language ', '$mobile', '$address', '$city', '$state ', CURRENT_TIMESTAMP)

";

if(mysqli_query($con,$sqlq)){
  echo"<script> alert('Registed Succesfully!!!!') ;</script>";
  echo"<script> document.location.href='home.php'; </Script>";

  

}
}
?>

<marquee direction ="left" scrollamount="20" > <h2 id="marku">After joining daily  newspaper provide in your whatsApp number </h2> </marquee>
  
  


<!-- login code -->
<div class="container">
  <h2 class="text-centar"><P>join</P></h2>
  <div>
  <form class="row g-3" action ="join.php" method ="post">
  <div class="col-md-6">
    <label for="name" class="form-label"><h3>Name </h3></label>
    <input type="text" class="form-control" id="name"  placeholder="Enter your Name"  name="name">
  </div>
  <div class="col-md-6">
    <label for="lastname" class="form-label"><h3>Email Address</h3></label>
    <input type="email" class="form-control" id="email"  placeholder="Enter your email"  name="email">
  </div>

  <div class="col-md-4">
    <label for="inputcourses" class="form-label"><h3>Language</h3></label>
    <select id="inputcourses" class="form-select" name ="Language">
      
      <option>Hindi</option>
 <option>English</option>
 <option>Marathi</option>
 <option>urdu</option>
 <option>Kannada</option>
 <option>Tamil</option>
 
      </select>
      </div>
      <div class="col-md-6">
    <label for="lastname" class="form-label"><h3>mobile number</h3></label>
    <input type="text" class="form-control" required id="mob"  placeholder="Enter your number"  name="mobile">
  </div>
 

  
  <div class="col-12">
    <label for="inputAddress" class="form-label"><h3>Address</h3></label>
    <input type="text" class="form-control" required id="inputAddress" placeholder="Enter your Address" name= "address">
  </div>
  
  <div class="col-md-6">
    <label for="inputCity" class="form-label"><h3>City</h3></label>
    <input type="text" class="form-control" required id="inputCity"  placeholder="Enter your city"  name ="city">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label"><h3>State</h3></label>
    <select id="inputState" required class="form-select" name ="state">
      <option selected>Choose...</option>
      <option>Andhra Pradesh</option>
 <option>Arunachal Pradesh</option>
 <option>Assam</option>
 <option>Bihar</option>
 <option>Chhatisgarh</option>
 <option>Goa</option>
 <option>Gujarat</option>
 <option>Haryana </option>
<option> Himachal Pradesh</option>
<option> Jharkhand</option>
 <option>Karnataka</option>
 <option>Kerala</option>
 <option>Madhya Pradesh</option>
 <option>Maharashtra</option>
 <option>Manipur</option>
 <option>Meghalaya</option>
 <option>Mizoram</option>
 <option>Nagaland</option>
 <option>Odisha </option>
 <option>Punjab</option>
 <option>Rajasthan</option>
 <option>Sikkim</option>
 <option>Tamil Nadu</option>
 <option>Telangana</option>
 <option>Tripura</option>
 <option>Uttarakhand</option>
 <option>Uttar Pradesh</option>
 <option>West Bengal</option>
    </select>
 
  </div>
  <div class="col-12">
    <button name="submit"  type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<img src="WhatsApp.jpeg" class="img1" alt="..."> 
<button type="button" id="btn1" class="btn btn-success"><a class="new" id="a1" href="https://chat.whatsapp.com/IHo3EsDUcXUA3z0smxfiNH">Join WhatsApp Group </a></button>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <script>

  </script>

  </body>
</html>