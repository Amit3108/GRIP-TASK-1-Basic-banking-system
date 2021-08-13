<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:blueviolet;
        color: white;
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
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Times New Roman', Times, serif;
}
h2{
	font-size: 40px;
}
table{
	letter-spacing: 1.2px;
    font-size:18px;
}
th{
    background-color:blueviolet;
    font-size:20px;
    color:white;
}
td{
	text-align: center;
    background-color:white;
}
button{
	border:none;
	background: #d9d9d9;
    transition: 1s;
}
@media only screen and (orientation: portrait){
	*{
		letter-spacing: 1px;
	}
}
    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<div class="homenav">
<img src="img/boslogo.png">
  <ul>
    <li><a href="index.php"><b>HOME</b></a></li>
    <li><a href="createuser.php"><b>CREATE A USER</b></a></li>
    <li><a href="transactionhistory.php"><b>TRANSACTION HISTORY</b></a></li>
</ul>
</div>

<div class="container">
        <h2 class="text-center pt-4">TRANSFER MONEY</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th class="text-center">First Name</th>
                            <th class="text-center">Last Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['fname'] ?></td>
                        <td class="py-2"><?php echo $rows['lname'] ?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>