<?php

session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
       

#navItem1 {
  color: #323f4b;
  font-family: "Roboto";
}
#navItem2 {
  color: #323f4b;
  font-family: "Roboto";
}
#navItem3 {
  color: #323f4b;
  font-family: "Roboto";
}
#navItem4 {
  color: #323f4b;
  font-family: "Roboto";
}
.banner-section-bg-container {
  
  height: 100vh;
  background-size: cover;
}
.banner-heading {
  color: white;
  font-family: "Roboto";
  font-size: 45px;
  font-weight: 300;
}
.banner-caption {
  color: #f5f7fa;
  font-family: "Roboto";
  font-size: 24px;
  font-weight: 300;
}
.b1{
    margin: 2px;
}
.xyz
    {
        background-color:#00FF33;
        height:25px;
    }
    .abc2 
    {
        text-align: center;
        font-family: italic;
        padding:40px;
        color:green;
    }
    .abc3 
    {
        padding:30px;
        padding-top:10px;
        font-size: 25px;
    }
    .abc4
    {
        text-align: center;
        font-family: italic;
        padding:20px;
        color:blue;
    }
    .container1 
    {
        background-color: #a6c567;
    }
</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </head>
   <body class="body1" >
    <div class="container1">
    <nav class="navbar navbar-expand-lg navbar-light  bg-white">
      <div class="container">
        <!-- <a class="navbar-brand" href="#">
          <img
            src="Farm.jpg"
            class="food-munch-logo"
          />
        </a> -->
        <?php
         $unqid=$_SESSION["unqid"];
         echo " $unqid";

        ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <div class="b1">
            <a href="nav1.php"><button type="button pd-5" class="btn btn-primary" >HOME</button></a></div>
            <div class="b1">
            <a href="#raj"><button type="button" class="btn btn-primary">ABOUT US</button></a></div>
            <div class="b1">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" type="button" data-toggle="dropdown" aria-expanded="false">Diary     
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="new_diary.php">New diary</a></li>
                  <li><a href="olddiary.php">Old diary</a></li>
                </ul>
              </div>
              </div>
              <div class="b1">
              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">To-do-list
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="index.php">Click Here</a></li>
                  
                </ul>
              </div>
              </div>
              <div class="b1">
              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Log Out
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="studentregister.php">Click Here</a></li>
                  <!-- <li><a href="toollogin.php">Login</a></li> -->
                </ul>
              </div>
              </div>
          </div>
          
        </div>
      </div>
     
    </nav>
    <!-- <img src="C:\Users\LALITHA\OneDrive\Desktop\diary.JPEG">-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol> 
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="diary4.jpg" style="width:100%;height:500px" alt="...">
          </div>
           <div class="carousel-item">
            <img src="diary2.jpg" style="width:100%;height:500px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="diary3.jpg"  style="width:100%;height:500px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="diary.jpeg"  style="width:100%;height:500px" alt="...">
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
   </div>
   
   <div class="abc" background:>
    <h1 class="abc2">ONLINE DIARY</h1>
    <p class="abc3">In previous days,everyone have an habit of writting a diary.It's a good habit,but now-a-days very few people are showing interest to make a diary.Because now-a-days most of the people are attached with mobile phone</p></div>
    <div class="abc1">
    <h1 class="abc4" id="raj">ABOUT US</h1>
    <p class="abc3">To overcome the above problems we creating this website for day designer like planning about day tasks,make a diary(collection of notes from your life),alarm feature and check your task completion performance.</p></div> 

  
  </body>
</html>