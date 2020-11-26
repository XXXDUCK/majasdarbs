<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sneaker Beast</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
	<script src="./js/jquery.min.js"></script>
    <style>
    </style>
</head>
<body>
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
			<li class="active"><a class="lang" key="profile" href="profile">Profile</a></li>
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
        <ul class="breadcrumb">
            <li class="active"><a href="index.php">Main</a></li>
            <li>Profile</li>
        </ul>
</div>
<!-- Forma -->
<div class="col-md-8">
    <form action="profile" method="post">
        <div class="form-group">
        <label for="name">First name:</label>
        <input placeholder="Your first name" type="text" class="form-control" id="name" name="name">
      </div>
        <div class="form-group">
        <label for="name">Last name:</label>
        <input placeholder="Your last name" type="text" class="form-control" id="surname" name="surname">
        </div>
        <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Your email" name="email">
      </div>
        <div class="form-group">
        <label for="phone">Phone number:</label>
        <input placeholder="Your phone number" type="integer" class="form-control" id="phone" name="phone">
      </div>
        <div class="form-group">
        <label for="question">Enter your question:</label>
            <br>
        <textarea placeholder="Your question" name="jautajums" id="question" rows="4" cols="100"></textarea>
      </div>
        <button type="submit" class="btn btn-success" name="save">Submit</button>
    </form>
	
</div>
<?php
    if (isset($_POST['save'])) {
        echo "<b>Jūsu vārds : </b>{$_POST['name']}<br>";
        echo "<b>Jūsu uzvārds : </b>{$_POST['surname']}<br>";
        echo "<b>Jūsu epasts: </b>{$_POST['email']}<br>";
        echo "<b>Jūsu telefons: </b>{$_POST['phone']}<br>";
        echo "<b>Jūsu jautājums: </b>{$_POST['jautajums']}";
    }
?>
</body>