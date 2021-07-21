<?php include('config.php'); ?> 
<!DOCTYPE html>
<html>
<head>
    <title>TRANSFER MONEY</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
    }

    .container {
        width: 100%;
        height: 100vh;

    }

    .container img {
        color: black;
        width: 100%;
        height: 100%;
        opacity: 1;
        background-repeat: no-repeat;
        position: absolute;
    }

    nav {
        width: 100%;
        height: 80px;
        position: absolute;
        top: 0%;
        background-color: rgba(13, 13, 14, 0.7);
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
        background: #0000008f;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
    }

    .a {
        margin-top: 20%;
        margin-left: 150px;
        font-size: 50px;
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom: 3px;
        color: rgb(238, 235, 227);
    }

    .b {

        margin-left: 150px;
        font-size: 50px;
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom: 3px;
        color: rgba(209, 137, 44, 0.808);
    }

    .c {
        margin-left: 150px;
        font-size: 50px;
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom: 3px;
        color: white;

        display: inline;
    }

    .tm {
        background: rgba(209, 137, 44, 0.808);
        position: absolute;
        z-index: 1;
        width: 330px;
        height: 420px;
        margin-left: 70%;
        margin-top: 240px;
        box-shadow: 2px 2px 10px black;

    }

    .tm p {
        font-size: 25px;
        font-family:Arial, Helvetica, sans-serif;
        color: white;
        width: 280px;
        height: 25px;
        margin-top: 10px;
        margin-left: 25px;
        text-align: center;
        padding: 2px 10px;
        
    }

    form {
        background-color: rgb(192, 211, 142);
        height: 300px;
        width: 330px;
        margin-top: 30px;
        border-top: 2px solid black;
        border-bottom: 2px solid black;
        position: absolute;
    }

     label {
      
        margin-left: 55px;
        font-size: 20px;
        font-family: 'Courier New', Courier, monospace;
        color: rgb(74, 107, 7);
        font-weight: 200;
        margin-top: 200px;
    }
    input[type=text] , input[type=number]
    {
        
        margin-top: 20px;
        width: 300px;
        text-align: center;
        height: 30px;
        margin-left: 15px;
        margin-bottom: 20px;
        

    }
    .btn{
        width:100px;
        height:35px;
        padding: 5px 10px;
        background-color: white;
        margin-top: 30px;
        margin-left: 110px;
        cursor: pointer;
        color: black;
        border: 2px solid black;
        border-radius:5px;
        font-size:20px;
    }
    .btn:hover
    {
        color: white; 
        background-color: black;
    }
</style>

<body>
    
    <div class="container">
        <img src="bg2.jpg">

        <nav>
            <label class="logo"><img src="logo3.png">
                <p>DHANPAY</p>
            </label>
            <ul class="bar">
                <li><a href="home.php">Home </a></li>
                <li><a  href="nuser.php"> New User </a></li>
                <li><a class="active" href="#">Services </a>
      
      <ul>
        <li> <a href="customerd.php">CUSTOMER DETAILS</a> </li>
        <li> <a href="transfer.php">TRANSFER MONEY</a> </li>
      </ul>

                <li><a href="about.html">About</a></li>
            </ul>

        </nav>
        <div class="overlay">
            <p class="a">Tranfer Money</p>
            <p class="b">In Real Time</p>
            <p class="c">With "NO CHARGES"</p>

        </div>
        <div class="tm">
            <p> Money Transfer</p>

            <form action="" method="POST">
                <label>SENDER:</label> <br>
                <input type="text" name="sender" list="senderd" placeholder="select sender" required>
                <datalist id="senderd">
                 <?php
                 ob_start();
                 //query to access all data from db
                 $sql="select * from tb_customer";
                 //execute the query
                 $res = mysqli_query($conn , $sql);
                
                 //check whether query is executed or not
                 if($res==TRUE)
                 {
                     //count rows to check data is there or not in db
                     $count=mysqli_num_rows($res); //function to get all rows in db

                     //check no of rows
                     if($count >0)  //data present
                     {
                         while($row=mysqli_fetch_assoc($res))
                         {
                             //get individual data
                             $id=$row['id'];
                             $full_name=$row['full_name'];
                             $acc_no=$row['acc_no'];
                             //diplay value in datalist
                             echo "<option> $id)  $full_name -> $acc_no  </option>";
                            
                             
                         }
                     }
                 }
                 ob_flush();
                 ?>
                 </datalist><br>
                <label>RECEIVER:</label><br>
                <input type="text" name="receiver" list="receiverd" placeholder="select receiver" required>
                <datalist id="receiverd">
                <?php
                ob_start();
                //query to access all data from db
                $sql="select * from tb_customer";
                //execute the query
                $res = mysqli_query($conn , $sql);
               
                 //check whether query is executed or not
                 if($res==TRUE)
                 {
                     //count rows to check data is there or not in db
                     $count=mysqli_num_rows($res); //function to get all rows in db

                     //check no of rows
                     if($count >0)  //data present
                     {
                         while($row=mysqli_fetch_assoc($res))
                         {
                             //get individual data
                             $id=$row['id'];
                             $full_name=$row['full_name'];
                             $acc_no=$row['acc_no'];
                             //diplay value in datalist
                             echo "<option> $id)  $full_name -> $acc_no  </option>";
                            
                             
                         }
                     }
                 }
                 ob_flush();
                 ?>
                 </datalist><br>
                <label>AMOUNT:</label><br>
                <input type="number" name="amount" placeholder="enter amount to be transferred" required>
                <input type="hidden" name = "sbalance">
                <input type="hidden" name = "rbalance">
                <input type="hidden" name = "sname">
                <input type="hidden" name = "rname">
                <input type="hidden" name = "sno">
                <input type="hidden" name = "rno">
                <button class="btn" name="submit" type="submit" >Transfer</button>
            </form>
            
        </div>
    </div>
    <?php
    ob_start();
    if(isset($_POST['submit']))
        {
            //echo "button presses";
            $from = $_POST['sender'];
            $to = $_POST['receiver'];
            $amount = $_POST['amount'];
           
            $sql2 = "SELECT * from tb_customer where id='$from'";
            $res2 = mysqli_query($conn,$sql2);
            $count1= mysqli_num_rows($res2);
            
            if($count1==1)
            {
                $row1 = mysqli_fetch_array($res2); 
                    $sbalance = $row1['balance'];
                    $sname = $row1['full_name'];
                    $sno = $row1['acc_no'];
                    echo $sbalance . "<br>";
                    //echo $sname;
                    //echo $sno;
            }
            else
            {
                echo "Select the Sender";
            }      
            
                $sql3 = "SELECT * from tb_customer where id='$to'";
                $res3 = mysqli_query($conn,$sql3);
                $count2= mysqli_num_rows($res3);
                
                if($count2==1)
                {
                    $row2 = mysqli_fetch_array($res3); 
                        $rbalance = $row2['balance'];
                        $rname = $row2['full_name'];
                        $rno = $row2['acc_no'];

                        echo $rbalance . "<br>";
                        //echo $rname;
                        //echo $rno;
                }
            
            if(($amount < $sbalance) && ($amount !=0) && ($amount > 0))
            {
                $remaining_balance = $sbalance - $amount; 
                echo $remaining_balance;
                $sql4 = "UPDATE tb_customer set balance = $remaining_balance where balance= '$sbalance' ";
                $res4= mysqli_query($conn,$sql4);
                if($res4==true)
                {
                     echo "<script> alert('Transferred successfully');
                     window.location='transc.php';
                     </script>";
                }
                else
                {
                     echo "<script> alert('Money Not Transfered');
                     window.location='home.php';
                     </script>";
                }

                $rem_balance = $rbalance + $amount; 
                echo $rem_balance;
                $sql5 = "UPDATE tb_customer set balance = $rem_balance where balance= '$rbalance' ";
                $res5= mysqli_query($conn,$sql5);
                if($res5==true)
                {
                    echo "<script> alert('Updated successfully');
                    window.location='trans.php';
                    </script>";
                }
                else
                {
                   echo "<script> alert('Money Not Transfered');
                    window.location='transfer.php';
                    </script>";
                }
            }
            else if($amount > $sbalance)
            {
                echo "<script> alert('Insufficient Balance');
                window.location='transfer.php';
               </script>";
            }
            else
            {
                echo "<script> alert('Please enter amount greater than 0');
                window.location='transfer.php';
               </script>";
            }
           

            date_default_timezone_set('Asia/Kolkata');
            $date_time=  date("d/m/Y h:i:s A")  ;
            echo $date_time;
            


            $sql6 = "INSERT into tb_transaction_details set 
            s_account = '$sno',
            Sender = '$sname',
            r_account = '$rno',
            Receiver = '$rname',
            Amount = '$amount' ,
            xyz='$date_time'

        
            ";
            echo $sql6;
            $res6 = mysqli_query($conn, $sql6);
            if($res6 == true)
            {
            echo "Item Inserted"; 
            }
        }

       

        
    ob_flush();
    ?>
    
</body>
</html>
