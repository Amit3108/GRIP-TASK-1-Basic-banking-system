<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      button,input {
  font-family: 'Times New Roman';
  font-weight: 700;
  letter-spacing: 1.4px;
}
.background {
  width: 100%;
  display: flex;
  background-color: rgb(207, 189, 224);
}
.homenav {
  height: 13vh;
  background-color: blueviolet;
  width: 100%;
}
.homenav ul {
  display: grid;
  width: 64%;
  margin-left: 36%;
  grid-gap: 4vw;
  grid-template-columns: repeat(3, auto);
  padding-top: 5.3vh;
}
.homenav img{
  position:absolute;
  height: 7vh;
  width: 270px; 
  top:3vh;
  left:3%;
}
.homenav ul li {
  list-style: none;
  font-family: 'Times New Roman';

}
.homenav ul li a {
 
  color: white;
  
  text-decoration: none;
}
.homenav ul li a:hover {
  cursor: pointer;
  text-decoration: underline;
}
body{
  background-color: rgb(207, 189, 224);
  font-family: 'Times New Roman';
}
.container {
  flex: 0 1 700px;
  width: 100%;
  margin: auto;
  padding: 10px;
}

.screen {
  position: relative;
  background: #ffffff;
  border-radius: 15px;
  box-shadow: 5px 10px 10px rgba(0, 0, 0, .25);
}

.screen-header {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  background: blueviolet;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.screen-header-right {
  display: flex;
}

.screen-header-ellipsis {
  width: 5px;
  height: 5px;
  margin-left: 3px;
  border-radius: 8px;
  background: #ffffff;
}

.screen-body {
  display: flex;
}

.screen-body-item {
  flex: 1;
  padding: 50px;
}
.app-form-group {
  margin-bottom: 15px;
}

.app-form-group.button {
  margin-bottom: 0;
  text-align: right;
  position: absolute;
  bottom: 30px;
  right:40px;
}

.app-form-control{
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid #4C4B4B;
  color: #4C4B4B;
  font-size: 14px;
  outline: none;
  transition: border-color .2s;
}

.app-form-control::placeholder {
  color: #666;
}

.app-form-control:focus {
  border-bottom-color: #4C4B4B;
}

.app-form-button {
  background: none;
  border: none;
  margin-left: 20px;
  color: #666;
  font-size: 14px;
  cursor: pointer;
  outline: none;
}

.app-form-button:hover {
  color: #262626;
}

@media screen and (max-width: 520px) {
  *{
    letter-spacing:1px;
  }
  .container{
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 40px;
  }
  .screen-body {
    flex-direction: column;
  }

  .screen-body-item.left {
    margin-bottom: 50px;
  }
  .app-form-button{
    margin-top:5px;
  }
}

@media screen and (max-width: 600px) {
  .screen-body {
    padding: 40px;
  }

  .screen-body-item {
    padding: 0;
  }
}

      </style>
</head>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(fname,lname,email,balance) values('{$fname}','{$lname}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Account created Successfully!');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<div class="homenav">
<img src="img/boslogo.png">
  <ul>
    <li  margin-top:7vh;><a href="index.php"><b>HOME</b></a></li>
    <li><a href="transfermoney.php"><b>TRANSFER MONEY</b></a></li>
    <li><a href="transactionhistory.php"><b>TRANSACTION HISTORY</b></a></li>
</ul>
</div>
<br><br>
        <h2 class="text-center pt-4">CREATE A USER</h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="img/user3.jpg" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="FIRST NAME" type="text" name="fname" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="LAST NAME" type="text" name="lname" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>