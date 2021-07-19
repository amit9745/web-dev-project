<?php
 session_start();
?>

<!doctype html>
<html lang="en">

<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
  
  <title>Amit Traders</title>
<style>
*{
  margin:0 ; padding: 0; font-family: 'Quicksand', sans-serif;
}
.carousel-inner img {
  width: 100%;
  height: 100%;
}


</style>

</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">AMIT TRADERS</a>
      <a class="navbar-brand" href="#">Hiii   <?php echo  $_SESSION['custumername'];  ?> Welcome To Amit Traders</a> 
    </div>
   
    <ul class="nav navbar-nav navbar-right">
 
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
    </ul>
  </div>
</nav>
  
  <header>

  <div id="demo" class="carousel slide" data-ride="carousel" data-interval="1000">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image1.jpg" alt="" width="1300" height="863">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image2.jpeg" alt="" width="1300" height="863">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image3.jpeg" alt="" width="1300" height="863">
      <div class="carousel-caption">
        <h3></h3>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section  class="text-center mb-5">

  <div class="amit">
    <button class="btn btn-warning" id="A">A</button>
    <button class="btn btn-warning" id="M">M</button>
    <button class="btn btn-warning " id="I">I</button>
    <button class="btn btn-warning" id="T">T</button>
    <button class="btn btn-danger" id="A">.</button>
    <button class="btn btn-warning" id="A">T</button>
    <button class="btn btn-warning" id="M">R</button>
    <button class="btn btn-warning " id="I">A</button>
    <button class="btn btn-warning" id="T">D</button>
    <button class="btn btn-warning" id="A">E</button>
    <button class="btn btn-warning" id="M">R</button>
    <button class="btn btn-warning " id="I">S</button>


  </div>
</section>
  </header>
  <!--about us-->

<section class="mb-5">


<div class="container-fluid">
  <h1 class="text-center pt-5" id="Services">Services</h1>
  <hr class=" w-25 mx-auto pt-5">

</div>

<div class="container-fluid">
  <h1 class="text-center pt-5" id="Services">CAST IRON DESIGNS</h1>
  <hr class=" w-25 mx-auto pt-5">

</div>


<div class="row text-center">
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="1.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">7"</h4>
      <a href="#" class="btn btn-primary">1</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="2.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">7"</h4>
      <a href="#" class="btn btn-primary">2</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="3.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">4.5" * 5.5"</h4>
      <a href="#" class="btn btn-primary">3</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="4.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">4.5" * 5.5"</h4>
      <a href="#" class="btn btn-primary">4</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="5.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">6.5" * 7.5"</h4>
      <a href="#" class="btn btn-primary">5</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="6.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">6.5" * 7.5"</h4>
      <a href="#" class="btn btn-primary">6</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="7.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">10.5"</h4>
      <a href="#" class="btn btn-primary">7</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="8.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">10.5"</h4>
      <a href="#" class="btn btn-primary">8</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="9.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">6"</h4>
      <a href="#" class="btn btn-primary">9</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="10.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">6"</h4>
      <a href="#" class="btn btn-primary">10</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="11.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">6"</h4>
      <a href="#" class="btn btn-primary">11</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="12.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">6.5"</h4>
      <a href="#" class="btn btn-primary">12</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="13.jpg" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">11"</h4>
      <a href="#" class="btn btn-primary">13</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="14.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">4",5.5"</h4>
      <a href="#" class="btn btn-primary">14</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="15.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">7.5"</h4>
      <a href="#" class="btn btn-primary">15</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="16.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">9.5"</h4>
      <a href="#" class="btn btn-primary">16</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="17.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">17"</h4>
      <a href="#" class="btn btn-primary">17</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="18.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">13"</h4>
      <a href="#" class="btn btn-primary">18</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="19.jpg" alt="Card image">
    <div class="card-body">
       <h4 class="card-title">4"</h4>
      <a href="#" class="btn btn-primary">19</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="20.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">3"</h4>
      <a href="#" class="btn btn-primary">20</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="21.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">13"</h4>
      <a href="#" class="btn btn-primary">21</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="22.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">22"</h4>
      <a href="#" class="btn btn-primary">22</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="23.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">7.5"</h4>
      <a href="#" class="btn btn-primary">23</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="24.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">5.5"</h4>
      <a href="#" class="btn btn-primary">24</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="25.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">10"</h4>
      <a href="#" class="btn btn-primary">25</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="26.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">13"</h4>
      <a href="#" class="btn btn-primary">26</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="27.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">15"</h4>
      <a href="#" class="btn btn-primary">27</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="28.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">14"</h4>
      <a href="#" class="btn btn-primary">28</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="29.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">7" * 7"</h4>
      <a href="#" class="btn btn-primary">29</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="30.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">5.5" * 5.5"</h4>
      <a href="#" class="btn btn-primary">30</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="31.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">6"</h4>
      <a href="#" class="btn btn-primary">31</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="32.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">5"</h4>
      <a href="#" class="btn btn-primary">32</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="33.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">16"</h4>
      <a href="#" class="btn btn-primary">33</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="34.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">17.5"</h4>
      <a href="#" class="btn btn-primary">34</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="35.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">11"</h4>
      <a href="#" class="btn btn-primary">35</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="36.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">30.5"</h4>
      <a href="#" class="btn btn-primary">36</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="37.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">23"</h4>
      <a href="#" class="btn btn-primary">37</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="38.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">21"</h4>
      <a href="#" class="btn btn-primary">38</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="39.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">3"</h4>
      <a href="#" class="btn btn-primary">39</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="40.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">4"</h4>
      <a href="#" class="btn btn-primary">40</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="41.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">18"</h4>
      <a href="#" class="btn btn-primary">41</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="42.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">32"</h4>
      <a href="#" class="btn btn-primary">42</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="43.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">43"</h4>
      <a href="#" class="btn btn-primary">43</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="44.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">31"</h4>
      <a href="#" class="btn btn-primary">44</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="45.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">1" , 1.25" , 1.5"</h4>
      <a href="#" class="btn btn-primary">45</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="46.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">1.5"</h4>
      <a href="#" class="btn btn-primary">46</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="47.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">2.5"</h4>
      <a href="#" class="btn btn-primary">47</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="48.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">2"/2.5"</h4>
      <a href="#" class="btn btn-primary">48</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="49.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">1.5"</h4>
      <a href="#" class="btn btn-primary">49</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="50.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">4"</h4>
      <a href="#" class="btn btn-primary">50</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="51.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">3.5"/4"</h4>
      <a href="#" class="btn btn-primary">51</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="52.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">2.5"</h4>
      <a href="#" class="btn btn-primary">52</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="53.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">2"</h4>
      <a href="#" class="btn btn-primary">53</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="54.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">5.5"/6"/6.5"</h4>
      <a href="#" class="btn btn-primary">54</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="55.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">6"</h4>
      <a href="#" class="btn btn-primary">55</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="56.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">5.25"</h4>
      <a href="#" class="btn btn-primary">56</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="57.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">1"/1.5"</h4>
      <a href="#" class="btn btn-primary">57</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="58.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">2"</h4>
      <a href="#" class="btn btn-primary">58</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="59.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">0.75"</h4>
      <a href="#" class="btn btn-primary">59</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="60.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">0.75"</h4>
      <a href="#" class="btn btn-primary">60</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="61.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">3.5"</h4>
      <a href="#" class="btn btn-primary">61</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="62.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">4"</h4>
      <a href="#" class="btn btn-primary">62</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="63.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">2"</h4>
      <a href="#" class="btn btn-primary">63</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="64.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">5"</h4>
      <a href="#" class="btn btn-primary">64</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="65.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">5"</h4>
      <a href="#" class="btn btn-primary">65</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="66.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">1.5"</h4>
      <a href="#" class="btn btn-primary">66</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="67.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">3"/4"</h4>
      <a href="#" class="btn btn-primary">67</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="68.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">4"(1.25" / 1.5" patti)</h4>
      <a href="#" class="btn btn-primary">68</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="69.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">3"/4"/5"/6"</h4>
      <a href="#" class="btn btn-primary">69</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="70.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">7"</h4>
      <a href="#" class="btn btn-primary">70</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="71.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">5"</h4>
      <a href="#" class="btn btn-primary">71</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="72.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">5"</h4>
      <a href="#" class="btn btn-primary">72</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="73.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">5.5"</h4>
      <a href="#" class="btn btn-primary">73</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="74.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">13"</h4>
      <a href="#" class="btn btn-primary">74</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="75.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">7.5"</h4>
      <a href="#" class="btn btn-primary">75</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="76.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">10"</h4>
      <a href="#" class="btn btn-primary">76</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="77.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">6.5"</h4>
      <a href="#" class="btn btn-primary">77</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="78.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">9"</h4>
      <a href="#" class="btn btn-primary">78</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="79.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">6.5"</h4>
      <a href="#" class="btn btn-primary">79</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="80.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">8"</h4>
      <a href="#" class="btn btn-primary">80</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="81.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">2.5"</h4>
      <a href="#" class="btn btn-primary">81</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="82.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">6levers</h4>
      <a href="#" class="btn btn-primary">82</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="83.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">8levers</h4>
      <a href="#" class="btn btn-primary">83</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="84.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">2"/2.5"/3"/3.5"/4"</h4>
      <a href="#" class="btn btn-primary">84</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="85.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">3'</h4>
      <a href="#" class="btn btn-primary">85</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="86.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">8"</h4>
      <a href="#" class="btn btn-primary">86</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="87.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">6'</h4>
      <a href="#" class="btn btn-primary">87</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="88.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">2.5"</h4>
      <a href="#" class="btn btn-primary">88</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="89.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">2"</h4>
      <a href="#" class="btn btn-primary">89</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="90.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">4"</h4>
      <a href="#" class="btn btn-primary">90</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="91.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">9"</h4>
      <a href="#" class="btn btn-primary">91</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="92.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">6"/8"</h4>
      <a href="#" class="btn btn-primary">92</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="93.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">6"</h4>
      <a href="#" class="btn btn-primary">93</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="94.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title"></h4>
      <a href="#" class="btn btn-primary">94</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="95.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">4"</h4>
      <a href="#" class="btn btn-primary">95</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="96.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">6"</h4>
      <a href="#" class="btn btn-primary">96</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="97.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">12"</h4>
      <a href="#" class="btn btn-primary">97</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="98.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">12"/14"/16"/18"/20"/22"</h4>
      <a href="#" class="btn btn-primary">98</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="99.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">Barbed Wire</h4>
      <a href="#" class="btn btn-primary">99</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="100.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">8 no. / 10 no.</h4>
      <a href="#" class="btn btn-primary">100</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="101.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">Cutting 4"</h4>
      <a href="#" class="btn btn-primary">101</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="102.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">Grending 4"</h4>
      <a href="#" class="btn btn-primary">102</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="103.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">Cutting 14"</h4>
      <a href="#" class="btn btn-primary">103</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="104.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">3"</h4>
      <a href="#" class="btn btn-primary">104</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="105.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">3"</h4>
      <a href="#" class="btn btn-primary">105</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="106.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">3"</h4>
      <a href="#" class="btn btn-primary">106</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="107.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">3"</h4>
      <a href="#" class="btn btn-primary">107</a>
    </div>
  </div>
  </div>


  <div class="container-fluid">
    <h1 class="text-center pt-5" id="Services">PIPES</h1>
    <hr class=" w-25 mx-auto pt-5">

  </div>

  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="P1.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">1.25" * 1.25"</h4>
      <a href="#" class="btn btn-primary">P1</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="P2.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">1" * 1"</h4>
      <a href="#" class="btn btn-primary">P2</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="P3.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">1.5" * 1.5"</h4>
      <a href="#" class="btn btn-primary">P3</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="P4.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">2" * 1"</h4>
      <a href="#" class="btn btn-primary">P4</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="P5.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">2"</h4>
      <a href="#" class="btn btn-primary">P5</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="P6.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">1.5"</h4>
      <a href="#" class="btn btn-primary">P6</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="P7.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">1.5"</h4>
      <a href="#" class="btn btn-primary">P7</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="P8.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">1.5"(D-Pipe)</h4>
      <a href="#" class="btn btn-primary">P8</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="P9.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">3" * 1"</h4>
      <a href="#" class="btn btn-primary">P9</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="P10.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">2" * 2"</h4>
      <a href="#" class="btn btn-primary">P10</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="P11.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">2"</h4>
      <a href="#" class="btn btn-primary">P11</a>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="P12.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">3" * 1.5"</h4>
      <a href="#" class="btn btn-primary">P12</a>
    </div>
  </div>
  </div><div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card">
    <img class="card-img-top" src="P13.jpg" alt="Card image">
    <div class="card-body">
          <h4 class="card-title">Chaukhat Pipe</h4>
      <a href="#" class="btn btn-primary">P13</a>
    </div>
  </div>
  </div>

</div>



</section>
<!--contact demo-->
<section class="bg-primary text-center" id="contact">
  <article class="py-5">
    <h3 class="display-4 text-white"> +91 9509835567</h3>
    <p>If you have any query, contact us.</p>
  </article>
</section>


<footer class="text-center bg-dark text-white">
<p>@copyright amitkumar.com</p>
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
