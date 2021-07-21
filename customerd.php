<?php include('config.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>services</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
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

        .content {
            width: 100%;
            height: 150%;
            position: absolute;
            background: linear-gradient(90deg,white 20%, rgba(199, 236, 238,1.0)80%);
            background-size: cover;
            z-index: 1;
            
        }
        .content p{
            position: absolute;
            text-align: center;
            margin-top: 10%;
            margin-left: 17%;
            width: 1000px;
            font-size: 50px;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 200;
            z-index: 2;
            color: rgba(48, 51, 107,1.0);
        }
        .content table
        {
            position: absolute;
            left: 25%;
            top: 20%;
            width: 50%;
            height:auto;
            background-color: white;
            text-align: center;

            border-collapse:collapse;
            box-shadow:0 2px 12px rgba(56, 53, 53,0.5) ;
            overflow: hidden;
            z-index: 2;
            padding-top:5px;

        }
        th,td{
            padding: 3px 2px 3px 2px;
            border-bottom: 1px solid #ddd;
            
            
        }
        th{
            background-color: rgba(37, 36, 36,0.7);
            color: white;
            height: 45px;
            
        }
        td{
            height: 50px;
            font-size: 15px;
            font-weight:200;
            font-family:Helvetica, sans-serif;
        }
       
        .viewd{
            width: 80px;
            height: 35px;
            padding: 5px;
            background-color:rgb(123, 160, 216);
            text-decoration: none;
            color: white;
            font-size: 15px;
            border: 2px solid white;
            border-radius:50px;
            font-family:'Times New Roman', Times, serif;

        }
        
        .viewd:hover
        {
            background-color: black;
            color:white;
            
        }
        
    </style>
</head>

<body>
    
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
      
      
      
      </li>
                <li><a href="about.html">About</a></li>
            </ul>

        </nav>
    <div class="content">
            <p>Details of Registered Customers</p>
            <table>
                <tr>
                    <th>ID </th>
                    <th>NAME</th>
                    <th>E-MAIL </th>
                    <th> BALANCE</th>
                    <th> ACTION</th>
                </tr>
                <?php
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
                         //using while loop to get all db (run until data present in db)

                         //get individual data
                         $id=$row['id'];
                         $full_name=$row['full_name'];
                         $email=$row['email'];
                         $balance=$row['balance'];
                         //diplay value in table
                         ?>
                         <tr>
                             <td><?php echo $id; ?></td>
                             <td><?php echo $full_name; ?></td>
                             <td><?php echo $email; ?></td>
                             <td><?php echo $balance; ?></td>
                    
                    <td>
                    <a href=" <?php echo "view.php?id=$id"; ?>" class="viewd">VIEW</a>
                         </td>
                </tr>
                <?php
                          
                         }  
                     }
                 
                 else{
                     //no data in database
                 }
                }

                 ?>

                
            </table>
            </div>
            
</body>

</html>