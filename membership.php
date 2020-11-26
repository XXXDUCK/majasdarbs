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
			<li class="active"><a class="lang" key="membership" href="membership">Membership</a></li>
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
        <li>Membership</li>
    </ul>
</div>
<div class="jumbotron text-center">
    <h2 class="lang" key="int1">Introduce our membership</h2>
         <iframe width="560" height="315" src="https://www.youtube.com/embed/iPcH7JEVlMQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>
<div class="container facebook">
    <a href="https://www.facebook.com/sharer/sharer.php?u=nikitasitovs.000webhostapp.com" target="_blank">
        <i class="fab fa-facebook fa-5x"></i>
      </a>
</div>
<div class="container email">
    <form class="email-form">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label>Your Message</label>
          <textarea style="min-width: 300px; min-height: 100px;"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

</body>
</html>