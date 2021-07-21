<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <style>
    * {
      margin: 0;
      padding: 0;
      text-decoration: none;
      box-sizing: border-box;
      list-style: none;
    }

    .container {
      width: 100%;
      height: 100vh;
      background: linear-gradient(90deg, rgb(71, 68, 68), rgb(224, 211, 23));
      opacity: 0.9;
    }

    .wrapper {
      width: 100%;
      height: 100%;
      position: relative;

    }

    .wrapper div {
      height: 50px;
      width: 50px;
      border: 3px solid white;
      border-radius: 50%;
      position: absolute;

    }

    .wrapper div:nth-child(1) {
      left: 10%;
      top: 40%;
      animation: circle 5s linear infinite;
    }

    .wrapper div:nth-child(2) {
      left: 28%;
      top: 18%;
      animation: circle 3s linear infinite;
    }

    .wrapper div:nth-child(3) {
      left: 65%;
      top: 25%;
      animation: circle 8s linear infinite;
    }

    .wrapper div:nth-child(4) {
      left: 95%;
      top: 82%;
      animation: circle 4s linear infinite;
    }

    .wrapper div:nth-child(5) {
      left: 50%;
      top: 53%;
      animation: circle 3s linear infinite;
    }

    .wrapper div:nth-child(6) {
      left: 90%;
      top: 10%;
      animation: circle 7s linear infinite;
    }

    .wrapper div:nth-child(7) {
      left: 80%;
      top: 65%;
      animation: circle 5s linear infinite;
    }

    .wrapper div:nth-child(8) {
      left: 20%;
      top: 90%;
      animation: circle 4s linear infinite;
    }

    .wrapper div:nth-child(8) {
      left: 20%;
      top: 90%;
      animation: circle 5s linear infinite;
    }

    .wrapper div:nth-child(9) {
      left: 2%;
      top: 10%;
      animation: circle 4s linear infinite;
    }

    @keyframes circle {
      0% {
        transform: scale(0) translateY(0) rotate(0);
        opacity: 1;
      }

      100% {
        transform: scale(1.2) translateY(-50px) rotate(360 deg);
        opacity: 0.5;
      }
    }

    nav {
      width: 100%;
      height: 80px;
      position: absolute;
      top: 0%;
      background-color: rgbA(13, 13, 14, 0.7);

    }

    .logo img {
      width: 180px;
      height: 100px;
      top: 30px;
      left: 5px;
    }

    .logo p {
      font-size: 40px;
      font-family: fantasy;
      letter-spacing: 2px;

      font-weight: 200;
      color: rgb(223, 222, 211);
      width: 25px;
      height: 50px;
      top: 18px;
      left: 135px;
      position: absolute;
    }

    nav ul {
      float: right;
      margin-right: 5px;
      z-index: 1;

    }

    nav ul li {
      display: inline-block;
      padding: 2px 20px;
      line-height: 80px;

    }

    nav ul li a {
      color: white;
      font-size: 20px;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      text-transform: uppercase;
      border: none;
      border-radius: 5px;
      padding: 5px;
      width: 10px;
      height: 10px;
      position: relative;

    }

    nav ul li a.active {

      background-color: white;
      color: rgba(247, 143, 179, 1.0);
      border: 1px solid rgba(247, 143, 179, 1.0);
    }



    nav ul li a:hover {
      background-color: white;
      color: rgba(247, 143, 179, 1.0);
      border: 1px solid rgba(247, 143, 179, 1.0);


    }
    
    nav ul ul
    {
      position: absolute;
      top: 70px;
      display: none;
      background-color:black;
      width:180px;
      line-height: 0.5em;
      left:82%;
     
    }
    nav ul li:hover > ul
    {
     display: block;
     
    }
    nav ul ul li {
      width:250px;
      height:80px;
      float:left;
      display: list-item;
      position: relative;
      margin-bottom:2px;
      padding: 3px;
      list-style: none;
      
      
    }
    nav ul ul li a{
      font-size:20px;
      padding:2px;
      text-decoration:none;
      
    }
    


    .pic {
      position: absolute;
      top: 30%;
      left: 70%;

      background-color: rgb(255, 255, 255);
      width: 350px;

      border-radius: 30px;
      border: 1px solid rgb(0, 0, 0);
      box-shadow: 5px 5px 5px 5px rgbA(13, 13, 14, 0.7);
    }

    .pic img {
      width: 350px;
      height: auto;
    }

    .text {
      position: absolute;
      top: 30%;
      left: 15%;
      width: 400px;
    }

    .text p {
      font-size: 32px;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      color: whitesmoke;


    }

    .head {
      font-size: 45px;
      font-family: Apple Chancery, cursive;
      color: rgb(25, 44, 54);
      margin-left: 100px;
      font-weight: 300;
      margin-bottom: 210px;
      position: absolute;
      top: 36%;
      width: 700px;
    }

    .fst {
      position: absolute;
      top: 55%;

    }

    .fst img {
      width: 90px;
      height: 90px;
      border: 1px black solid;
      border-radius: 50%;
      top: 50%;
      margin-left: 145px;
    }

    .fst p {
      background: linear-gradient(70deg, rgb(206, 191, 191) 34%, rgb(187, 187, 179) 62%);
      border: 1px solid black;
      border-radius: 10px;
      padding: 5px 10px 5px 10px;
      margin-bottom: 25px;
      font-size: 25px;
      font-family: 'Times New Roman', Times, serif;
      margin-top: 10px;
      margin-left: 100px;
      width:200px;
    }

    .fst p a {
      color: black;
    }

    .fst p:hover {
      transform: scale(1.1);
      box-shadow: 0 25px 40px rgba(88, 86, 86, 0.5);
      z-index: 1;
    }
    .sec
    {
      position: absolute;
      top:55%;
      left:16.5%;
    }
    .sec img{
      width: 90px;
      height: 90px;
      border: 1px black solid;
      border-radius: 50%;
      top: 50%;
      margin-left: 440px;

    }
    .sec p{
      background: linear-gradient(70deg, rgb(206, 191, 191) 34%, rgb(187, 187, 179) 62%);
      border: 1px solid black;
      border-radius: 10px;
      padding: 5px 5px 5px 10px;
      margin-bottom: 25px;
      font-size: 25px;
      font-family: 'Times New Roman', Times, serif;
      margin-top: 10px;
      margin-left: 400px;
      width:200px;
    }
    .sec p a
    {
      color: black;
    }
    .sec p:hover {
      transform: scale(1.1);
      box-shadow: 0 25px 40px rgba(88, 86, 86, 0.5);
      z-index: 1;
    }
    
    .thd {
      position: absolute;
      top: 75%;
    }

    .thd img {
      width: 90px;
      height: 90px;
      border: 1px black solid;
      border-radius: 50%;
      top: 50%;
      margin-left: 420px;
      background-color:white;
      
    }

    .thd p {
      background: linear-gradient(70deg, rgb(206, 191, 191) 34%, rgb(187, 187, 179) 62%);
      border: 1px solid black;
      border-radius: 10px;
      padding: 5px 10px 5px 10px;
      margin-bottom: 25px;
      font-size: 25px;
      font-family: 'Times New Roman', Times, serif;
      margin-top: 10px;
      margin-left: 360px;

    }

    .thd p a {
      color: black;
    }

    .thd p:hover {
      transform: scale(1.1);
      box-shadow: 0 25px 40px rgba(88, 86, 86, 0.5);
      z-index: 1;
    }
    
    

    
  </style>
  <title>Hello, world!</title>
</head>

<body>
  <div class="container">
    <div class="wrapper">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>

    </div>

    <nav>
      <label class="logo"><img src="logo3.png">
        <p>DHANPAY</p>
      </label>
      <ul class="bar">
        <li><a class="active" href="home.php">Home </a></li>
        <li><a href="nuser.php"> New User </a></li>
        <li><a href="#">Services </a>
      
          <ul>
            <li> <a href="customerd.php">CUSTOMER DETAILS</a> </li>
            <li> <a href="transfer.php">TRANSFER MONEY</a> </li>
          </ul>
      
      
      
      </li>
        <li><a href="about.html">About</a></li>
      </ul>

    </nav>
    <div class="pic">
      <img src="img1.png" alt="image">
    </div>
    <div class="text">
      <p>Welcome To DHANPAY</p>

    </div>
    <p class="head">The bank for a changing world.</p>
  </div>
  <div class="fst">
    <img src="cd.PNG">
    <p><a href="customerd.php">Customer Details</a></p>
  </div>
  <div class="sec">
    <img src="mt.jpg">
    <p><a href="transfer.php">Transfer Money</a></p>
  </div>
  <div class="thd">
    <img src="tr.PNG">
    <p><a href="transc.php">Transaction Details</a></p>
  </div>
 
<?php include('footer.php')?>
</body>

</html>