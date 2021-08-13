<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Basic Banking System</title>
    <style>
      * {
  margin: 0;
}
.home {
  width: 100%;
  display: flex;
  height: 100vh;
}
.logo {
  width: 20%;
  background-color: rgb(76, 9, 138);
  height: 72vh;
  z-index: 10;
  box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.7);
  padding-top: 28vh;
}
.homecontent {
  width: 80%;
  height: 100vh;
  display: block;
}
.homenav {
  height: 8vh;
  background-color: blueviolet;
  width: 100%;
}
.gallery {
  background: #eee;
}

.gallery-cell {
  width: 100%;
  height: 50vh;
  margin-right: 10px;
  background: #8c8;
  counter-increment: gallery-cell;
}

/* cell number */
.gallery-cell:before {
  display: block;
  text-align: center;
  /* content: counter(gallery-cell); */
  line-height: 200px;
  font-size: 80px;
  color: white;
}
.homecontent {
  background-color: rgb(207, 189, 224);
}
.gallery-cell img {
  height: 55vh;
  width: 100%;
}
.homenav ul {
  display: grid;
  width: 80%;
  margin-left: 13%;
  grid-gap: 7vw;
  grid-template-columns: repeat(3, auto);
  padding-top: 3vh;
}
.homenav ul li {
  list-style: none;
}
.homenav ul li a {
  color: white;
  text-decoration: none;
}
.homenav ul li a:hover {
  cursor: pointer;
  text-decoration: underline;
}
.footer {
  z-index: 30;
}
.homebtn {
  width: 100%;
  justify-content: center;
  display: grid;
  grid-template-columns: repeat(3, auto);
  grid-gap: 80px;
  margin-top: 7vh;
  margin-bottom: 7vh;
}
button {
  height: 23vh;
  width: 19vw;
  border: 4px solid blueviolet;
}
button:hover {
  cursor: pointer;
  border: 7px solid blueviolet;
  text-decoration: underline;
}
button img {
  height: 70px;
  width: 70px;
  border-radius: 70px;
}

      </style>
  </head>

  <body>
  
<div class="home">
  <div class="logo">
    <img src="img/bos.png" style="height:30vh; width:70%; margin-left:15%;inner-shadow:0 2px 2px 0 rgba(0,0,0,0.7)">
    <br>
    <br>
    <h1 style="font-family:Times New Roman; color:white; margin-left:5.5vh; margin-right:3vh;">BANK OF SPARKS</h1>
  </div>
<div class="homecontent">
<div class="homenav">
  <ul>
    <li><a href="createuser.php"><b>CREATE A USER</b></a></li>
    <li><a href="transfermoney.php"><b>TRANSFER MONEY</b></a></li>
    <li><a href="transactionhistory.php"><b>TRANSACTION HISTORY</b></a></li>
</ul>
  
</div>
<p style="display:none"><code>wrapAround: true</code></p>

<!-- Flickity HTML init -->
<div class="gallery js-flickity"
  data-flickity-options='{ "wrapAround": true }'>
  <div class="gallery-cell">
  <img src="img/cao1.jpg" >
  </div>
  <div class="gallery-cell">
  <img src="img/car2.jpg" >
  </div>
  <div class="gallery-cell">
  <img src="img/loan.jpg" >
  </div>
</div>
<div class="homebtn">
<a href="createuser.php"> 
<button>
<img src="img/create.jpg"> <br><br> 
<h2>CREATE A USER</h2>
</button>
</a>
<a href="transfermoney.php"> 
<button>
<img src="img/money.jpg"> <br><br> 
<h2>MONEY TRANSFER</h2>
</button>
</a>
<a href="transactionhistory.php"> 
<button>
<img src="img/history.jpg"> <br><br> 
<h2>TRANSFER HISTORY</h2>
</button>
</a>

</div>
<div class="footer" style="text-align: center; color: white; background-color:blueviolet; padding-top: 1.5vh; padding-bottom: 1.5vh; ">
    <p><i class="far fa-copyright"></i> Copyrights Reserved. Designed & Developed By <b>Amit Naik</b></p>
    
</div>

</div>



  </body>
</html>