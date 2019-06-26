<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Landing Page</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>

  <body>
    <section id="home">
<header id="header">
<nav id="nav-bar" class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
   <a class="navbar-brand" href="#">
     <img id="header-img" src="http://images2.imagebam.com/df/6c/62/2b0d781256052264.png" alt="Logo" style="width:40px;">
  </a>
<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#akademik">Akademik</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#fakultas">Fakultas</a>
    </li>
  </ul>
</nav>
</header>
    </section>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://images2.imagebam.com/54/d6/d5/9df32a1256271404.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://images2.imagebam.com/ca/cc/a0/2cc06c1256271474.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://images2.imagebam.com/69/18/38/fbbe471256271504.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section id="akademik">
    <div class="konten">
      
  <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="http://images2.imagebam.com/df/6c/62/2b0d781256052264.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
    
  </div>
  
  <div class="card">
    <img class="card-img-top" src="http://images2.imagebam.com/df/6c/62/2b0d781256052264.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="http://images2.imagebam.com/df/6c/62/2b0d781256052264.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
    </div>
   
</div>
 </section>
  

</div>
    <section id="fakultas">
<div class="video">
  <div class="embed-responsive embed-responsive-16by9">
  <iframe id="video" class="embed-responsive-item" src="https://www.youtube.com/embed/Idw3KqermYc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
  
  <form id="form" >
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input id="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <input id="submit" type="submit" class="btn btn-primary"></input>
</form>
  
    </div>
    </section>
  <footer>
      <ul>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Terms</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <span>Copyright 2019</span>
    </footer>
</body>

</html>