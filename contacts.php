<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sneaker Beast</title>
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
            <li><a href="index.php" class="lang" key="main">Main</a></li>
			<li><a class="lang" key="profile" href="profile.php">Profile</a></li>
            <li><a class="lang" key="gallery" href="gallery.php">Gallery</a></li>
			<li><a class="lang" key="membership" href="membership.php">Membership</a></li>
            <li class="active"><a class="lang" key="contacts" href="contacts">Contacts</a></li>
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
        <li>Contacts</li>
    </ul>
</div>
<section id="Contacts">
    <div class="section-inner">
        <h2 class="lang" key="contacts" >Contact us</h2>
        <p class="lang" key="c2">You can find us on:</p>
            <li><a href="">Twitter</a></li>
            <li><a href="">Instagram</a></li>
            <li><a href="">Email</a></li>
			<li> <i class="fab fa-apple-pay fa-5x" style="width: 50px height: 50px"></i></li>
    <h3 class="lang" key="ol">Our location</h3>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.4923130071074!2d24.122370215977696!3d56.95749898089271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfcc6e07cd7b%3A0xd90f31b6244a533!2sHoodshop!5e0!3m2!1sru!2slv!4v1574790826264!5m2!1sru!2slv" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</section>
</div>
</body>
</html>