<!DOCTYPE html>
<html lang="en">
<head>
<center>
	<title>Sneaker Beast</title></center>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/7df53f0e00.js" crossorigin="anonymous"></script>
	<style>
	</style>
</head>

<body bgcolor="lightgrey">
<div class="jumbotron text-center" style="margin-bottom:0; height: 210px; background-color: lightblue">
    <h1>SneakerBeast</h1>
    <p>Time to find new sneakers for you!</p>
</div>
<nav class="navbar navbar-inverse d-flex">
    <a class="navbar-brand" href="index.php">Sneakers</a>
    <div class="collapse navbar-collapse d-flex" id="myNavbar">
        <ul class="nav navbar-nav d-flex p-2">
            <li class="active"><a href="index.php" class="lang" key="main">Main</a></li>
			<li><a class="lang" key="profile" href="profile.php">Profile</a></li>
            <li><a class="lang" key="gallery" href="gallery.php">Gallery</a></li>
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
    <div class="row">
        <div class="col-sm-4">
            <h3 class="lang" key="s1">Search</h3>
            <p class="lang" key="ty">Types of brands:</p>
            <ul class="nav nav-pills nav-stacked"style="background: lightblue">
                <li><a href="#">Adidas</a></li>
                <li><a href="#">Nike</a></li>
                <li><a href="#">Puma</a></li>
            </ul>
        </div>
		 <div class="col-sm-8">
            <h2>Adidas sneakers</h2>
            <h5 class="lang" key="title" >Title description</h5>
            <img src="images/adidas.JPG" width="500" height="333">
            <p>Adidas</p>
            <p class="lang" key="das" >Description about sneakers...</p>
            <br>
            <h2>Nike sneakers</h2>
            <h5 class="lang" key="title" >Title description</h5>
            <img src="images/nike.JPG" width="500" height="333">
            <p>Nike</p>
            <p class="lang" key="das" >Description about sneakers...</p>
            <h2>Puma sneakers </h2>
            <h5 class="lang" key="title" >Title description</h5>
            <img src="images/puma.JPG" width="500" height="333">
            <p>Puma</p>
            <p class="lang" key="das" >Description about sneakers...</p>
        </div>
</div>
</body>
</html>