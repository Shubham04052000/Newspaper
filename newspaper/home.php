<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>newspaper</title>
    <style>
      body{

        /* background-color: #777; */
      }
.carousel-item{
  height:100%;
  
}
img{
  height:25rem;

}
button{
  margin: 10px;
  border-radius: 5px;
  background:  rgb(214, 219, 219);
 
  



}
#btn{
  box-shadow:0 5px 5px 5px rgba(0,0,0.5)
}
#a{
  text-decoration: none;
  color:black;
  cursor: pointer;
}
/* #btn:hover:not(.active) {
           
      
           transform: scale(1.1)
       } */



    </style>
  </head>
  <body>
  
  <!-- nevbar cding -->


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> newspaper</a>
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
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
  <h1>Language of newspaper</h1>
    
<button  id="btn" type="button" ><h1><a  href="" id="a">Language<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg></a></h1></button>
    <button  id="btn" type="button" ><h1><a  href="hindi.php" id="a">hindi</a></h1></button>
    <button  id="btn" type="button" ><h1><a  href="English.php" id="a">English </a></h1></button>
    <button   id="btn"type="button" ><h1><a  href="Marathi.php" id="a">Marathi </a></h1></button>
    <button  id="btn" type="button" ><h1><a  href="Urdu.php" id="a">Urdu </a></h1></button>
    <button  id="btn" type="button" ><h1><a  href="Kannada.php" id="a">Kannada</a></h1></button>

    <button  id="btn" type="button" ><h1><a  href="Tamil.php" id="a">Tamil </a></h1></button>
   
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="newspaperpic1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="newspaperpic2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="newspaperpic3.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  
      


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>