<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Details</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                text-decoration: none;

            }
            
.detail
{
    background: linear-gradient(90deg,white 20%, rgba(199, 236, 238,1.0)80%);
    width: 100%;
    height: 100vh;
    background-repeat: no-repeat;
    position:absolute;

}
form{
    width: 50%;
    height:300px;
    position: relative;
    top: 10%;
    left:25%;
    border: 2px solid black;
    border-radius: 10px;
    padding: 5px;
    box-shadow: 2px 2px 18px lightgrey;
}
 label,input{
    position: relative;
    top: 20px;
    left: 20px;
    
    margin-bottom: 10px;
}
label {
            font-size: 20px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: black;
            font-weight: 200;
            display: inline-block; 
            width: 140px;
            height: 50px;
            text-align: left;
        }

        input[type=text] , input[type=email], input[type=tel],input[type=number]
         {
            width: 150px;
            padding: 3px 5px;
            margin: 0 5px;
            margin-left: 5px;
            box-sizing: border-box;
            border: 1px solid #000000;
           border-radius: 2px;
           background-color: none;
            
        } 
           
          input[type=date]
        {
          margin-left: 5px;
          width: 150px;
            padding: 3px 5px;
            box-sizing: border-box;
            border: 1px solid #000000;
           border-radius: 2px;
           background-color: none;

        }
        a{
            position: absolute;
            padding: 5px;
            width:80px;
            height:30px;
            color: black;
            background-color: white;
            margin-top:90px;
            left:47%;
            border: 2px solid black;
            cursor: pointer;
            font-size:25px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border-radius:10px;
            text-align:center;
           

        }
         a:hover
        {
            color: rgba(247, 143, 179, 1.0);
           background-color: black;
            border:1px solid white;
            border-radius:10px;
        }
        </style>
    </head>
    <body>
        
        <?php
        $id=$_GET['id'];
        //echo $id;
        /*($conn)
        {
            echo 'successfull';
        }
        else{
            echo 'notsuccessfull';
        })*/
        $sql="SELECT * FROM `tb_customer` WHERE id=$id ";
        //echo $sql;
        $res=mysqli_query($conn, $sql); //execute query and save result
        $row=mysqli_fetch_assoc($res); //fetching data from result
        //print_r($row); //print array in browser(array of row)
        $full_name=$row['full_name'];
        $bdate=$row['bdate'];
        $acc_no=$row['acc_no'];
        $email=$row['email'];
        $phone=$row['phone'];
        $balance=$row['balance'];
        ?>

        <div class="detail">
            <form action="" method="post">
                <label>Full Name :</label>
                <input type="text" name="full_name" value="<?php echo $full_name ; ?>" disabled placeholder="enter your name"> &nbsp;&nbsp;&nbsp;&nbsp;
                <label>D.O.B :</label> 
                <input type="date" value="<?php echo $bdate; ?>" disabled name="bdate"><br>
                <label>Account No :</label> 
                <input type="text" name="acc_no" value="<?php echo $acc_no; ?>" disabled placeholder="enter account no."><br>
                <label>E-mail:</label>
                <input type="email" name="email"value="<?php echo $email ; ?>" disabled placeholder="enter your email">&nbsp;&nbsp;&nbsp;&nbsp;
                <label>Mob No:</label>
                <input type="tel" name="phone" value="<?php echo $phone; ?>" disabled placeholder="enter your phone no"> <br>
                <label>Balance:</label>
                <input type="number" name="balance"value="<?php echo  $balance; ?>"disabled  placeholder="enter acc. balance"><br>
                </form>
                <a href="customerd.php">BACK</a>
        </div>
    </body>
</html>