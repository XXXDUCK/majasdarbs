<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sneaker Beast</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
	<script src="./js/jquery.min.js"></script>
</head>
<div class="jumbotron text-center" style="margin-bottom:0; height: 210px; background-color: lightblue">
    <h1>SneakerBeast</h1>
    <p>Time to find new sneakers for you!</p>
</div>
<header>
<nav class="navbar navbar-inverse d-flex">
    <a class="navbar-brand" href="index.php">Sneakers</a>
    <div class="collapse navbar-collapse d-flex" id="myNavbar">
        <ul class="nav navbar-nav d-flex p-2">
            <li><a href="index.php" class="lang" key="main">Main</a></li>
			<li><a class="lang" key="profile" href="profile.php">Profile</a></li>
            <li class="active"><a class="lang" key="gallery" href="gallery">Gallery</a></li>
			<li><a class="lang" key="membership" href="membership.php">Membership</a></li>
            <li><a class="lang" key="contacts" href="contacts.php">Contacts</a></li>
        </ul>
        <ul class="languages-list navbar-right">
            <button id="en" class="translate"><li class="languages-item">EN</li></button>
            <button id="ru" class="translate"><li class="languages-item">RU</li></button>
        </ul>
    </div>
  
</nav>

<div class="container">
  <ul class="breadcrumb">
      <li class="active"><a href="index.php">Main</a></li>
      <li>Gallery</li>
  </ul>
</div>
</header>
<style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
      width: 500px;
      height: 100%;
      margin: 0 auto;
    }
    </style>
<body bgcolor="lightgrey">
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="./images/nike97.JPG"  class="d-block boots" alt="...">
      </div>
      <div class="item">
        <img src="./images/90.JPG"class="d-block boots" alt="...">
      </div>
      <div class="item">
        <img src="./images/700.JPG" class="d-block boots" alt="...">
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
</div>
</body>
</html>
