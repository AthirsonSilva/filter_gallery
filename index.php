<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>PHP is bad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>  
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <li style="float:right; list-style: none;"><a class="active" href="#about">PHP SUCKS</a></li>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarSupportedContent">
    <form action=".//cookie.php" method="POST" class="d-flex">
    <select name="select-type" id="">
        <option value="">Select..</option>
        <option value="dark">Dark</option>
        <option value="nature">Nature</option>
        <option value="city">City</option>
        <option value="all">All</option>
      </select>
      <button class="btn btn-outline-info" style="height: 50px;" type="submit">Search</button>
    </form>
    </div>
  </div>
</nav>

<button onclick="toggleDark()">Toggle dark mode</button><!-- Gallery -->
<div class="container gallery">
<?php 
	if (isset($_COOKIE['filtro'])) {
    if ($_COOKIE['filtro'] == 'all') {
    $standard = '
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">New York rain</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Beautifull waves</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Dark street</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Dark mundi-map</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">City palm trees</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Afternoon lake</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Night city</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sunny mountains</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Darkest night</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">New york morning</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
      <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mountains and a lake</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Retro city</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Night lake</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pine tree forest</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Lonely wolf</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    </div>
    ';
    echo("$standard");
    } else if ($_COOKIE['filtro'] == 'dark') {
        $item = '
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
      <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    </div>
    ';
          
      echo($item);
      } else if ($_COOKIE['filtro'] == 'city') {
        $item = '
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
      <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    </div>
    ';
          
      echo($item);
      } else if ($_COOKIE['filtro'] == 'nature') {
        $item = '
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
      <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    </div>
    ';
          
      echo($item);
      }
	} else {
        $standard = '
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">New York rain</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Beautifull waves</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (1).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Dark street</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Dark mundi-map</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">City palm trees</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Afternoon lake</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Night city</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sunny mountains</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Darkest night</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">New york morning</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
      <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mountains and a lake</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//city (5).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Retro city</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
  </div>
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (2).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Night lake</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//nature (3).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pine tree forest</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 16rem;">
        <img src=".//src//img//dark (4).jpg" class="img-rounded card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Lonely wolf</h5>
          <p class="card-text">R$ 1.00</p>
          <a href="#" class="btn btn-dark">Buy</a>
        </div>
      </div>
    </div>
    </div>
    ';
    echo("$standard");
  }
?>
<!-- Gallery -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted">

  </section>

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>PHP SUCKS
          </h6>
          <p>
            Can i say that PHP isn't cool? So much trouble setting up all this stuff...
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Technologies
          </h6>
          <p>
            <a href="#!" class="text-reset">PHP</a>
          </p>
          <p>
            <a href="#!" class="text-reset">JavaScript</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Boostrap</a>
          </p>
          <p>
            <a href="#!" class="text-reset">HTML/ CSS</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Dark</a>
          </p>
          <p>
            <a href="#!" class="text-reset">City</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Nature</a>
          </p>
          <p>
            <a href="#!" class="text-reset">All</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> São Paulo, SP 00000, BR</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            AthirsonArceus@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +55 11 95760-7177</p>
          <p><i class="fas fa-print me-3"></i> +55 11 2511-3168</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">https://gallery-filter.herokuapp.com/</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- Footer -->
<script src=".//src//js//index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src=""></script>
</body>
</html>
