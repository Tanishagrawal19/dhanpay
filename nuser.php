<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>
        New User
    </title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style: none;
        }

        .main {
            width: 100%;
            height: 100vh;

        }

        .main img {
            color: black;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            position: absolute;
        }

        nav {
            width: 100%;
            height: 80px;
            position: absolute;
            top: 0%;
            background-color: rgbA(13, 13, 14, 0.7);
            z-index: 5;

        }

        .logo img {
            width: 180px;
            height: 100px;
            top: 1px;
            left: 1px;
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

        .overlay {
            background: #0000008a;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .frm {
            background-color: rgba(237, 243, 245, 0.5);
            width: 410px;
            font-size: 20px;
            height: 550px;
            border: 2px solid rgb(173, 173, 40);
            border-bottom-right-radius: 20px;
            border-top-left-radius: 20px;
            margin-top: 150px;
            margin-left: 100px;
            box-shadow: 2px 2px 15px rgb(173, 173, 40);

        }

        .frm h4 {
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
            color: white;
            margin-top: 30px;
            top: 9px;
            margin-left: 70px;
            text-shadow: 2px 2px crimson;
            z-index: 2;

        }

        form {
            margin: 50px 20px 40px 30px;
        }

         label {
            font-size: 20px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: black;
            font-weight: 200;
            display: inline-block; 
            width: 120px;
            height: 50px;
            margin-bottom:5px;
        }

        input[type=text] , input[type=date], input[type=email] ,input[type=number],input[type=tel]
         {
            width: 200px;
            padding: 3px 5px;
            margin: 0 5px;
            height: 30px;
            margin-left: 10px;
            box-sizing: border-box;
            border: 1px solid #000000;
           border-radius: 2px;
            
        }

        input[type=text]:focus, input[type=date]:focus, input[type=email]:focus,input[type=tel]:focus ,input[type=number]:focus {
            background-color: rgba(218, 228, 210, 0.897);
            border: 1px solid rgb(245, 239, 239);
        }
        
        input[type=submit]
        {
            width:100px;
            height: 30px;
            border: 1px solid black;
            margin-left: 120px;
            border-radius: 30px;
            background-color: rgb(207, 221, 84);
            margin-bottom: 5px;
            cursor: pointer;
            font-size: 15px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-transform: uppercase;
            box-shadow: 2px 2px white;
        }
        input[type=submit]:hover{
            background-color: crimson;
        }
        
    </style>
    </head>


<body>
    <div class="main">
        <img src="bg1.jpg">

        <nav>
            <label class="logo"><img src="logo3.png">
                <p>DHANPAY</p>
            </label>
            <ul class="bar">
                <li><a href="home.php">Home </a></li>
                <li><a class="active" href="#"> New User </a></li>
                <li><a href="#">Services </a>
      
      <ul>
        <li> <a href="customerd.php">CUSTOMER DETAILS</a> </li>
        <li> <a href="transfer.php">TRANSFER MONEY</a> </li>
      </ul>
  
  
  
  </li>
                <li><a href="about.html">About</a></li>
            </ul>

        </nav>
        <div class="overlay">
            <div class="frm">
                <h4>Register As A New User</h4>
                <form action="" method="post">
                    <label>Full Name :</label>
                    <input type="text" name="full_name" placeholder="enter your name" required><br>
                    <label>D.O.B :</label>
                    <input type="date" name="bdate"><br>
                    <label>E-mail:</label>
                    <input type="email" name="email" placeholder="enter your email" required><br>
                    <label>Mob No:</label>
                    <input type="tel" name="phone" placeholder="enter your phone no" required> <br>
                    <label>Account No :</label> 
                    <input type="text" name="acc_no" placeholder="enter account no." required><br>
                    <label>Balance:</label>
                    <input type="number" name="balance" placeholder="enter acc. balance"required ><br><br>
                    <input type="submit"  name="submit" value="submit">

                </form>
            </div>
        </div>
    </div>
    <?php
    //take value from form and save it to db
    // check submit button clicked or not
    if(isset($_POST['submit']))
    {
        //echo "button clicked";
        //1.GET DATA FROM FORM
        $full_name= $_POST['full_name'];
        $bdate= $_POST['bdate'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $acc_no= $_POST['acc_no'];
        $balance= $_POST['balance'];
        //echo $full_name;

        //2.sql query to save data into database
        $sql= "insert into tb_customer set
        full_name='$full_name', 
        bdate='$bdate',
        email='$email',
        phone='$phone',
        acc_no='$acc_no',
        balance='$balance'
        ";
        
        
    //echo $sql;

    //3.execute query and save to db via config.php
    
    //4. final execution
    $res=mysqli_query($conn, $sql) or die(mysqli_error());

    //5.print message for query submited and successful submission

    if($res)
    {
        //successful insertion
        // echo " Added ! proceed for transfer";
        // add a session variable
        echo "<script> alert('Added as a new user');
        window.location='home.php';
        </script>"; 
    }
    else{
        //insertion failed
        //echo "failed";
        // add a session variable
       echo "<script> alert('failed');
        window.location='home.php';
        </script>"; ;
        
    }
    }
     ?>
    

</body>

</html>

     
 
