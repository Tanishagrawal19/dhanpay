<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Transactin Details</title>
        <style>
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            background: url('bg7.jpg');

            }
            img{
width:100%;
height:100%;
position: absolute;
            }
            .container
            {
                
                width: 100%;
                height: 100%;
                position: absolute;
            }
            .container p{
                margin-top: 80px;
                margin-left: 500px;
                color: white;
                font-size: 50px;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-weight: 200;
            }
             table
        {
                position: absolute;
                left: 20%;
                top: 25%;
                width: 60%;
                height:auto;
                background-color: rgba(247, 241, 227,1.0);
                text-align: center;
                box-shadow:0 2px 12px rgba(56, 53, 53,0.5) ;
                padding-top:2px;
                border: 2px solid black;

        }
        th,td{
            padding: 3px 2px 3px 2px;
            
            
        }
        th{
            background-color: rgba(37, 36, 36,0.7);
            color: white;
            height: 30px;
            
        }
        td{
            
            height: 40px;
            font-size: 15px;
            font-weight:200;
            font-family:Helvetica, sans-serif;
        }
        tr:nth-child(odd)
        {
            background-color: rgba(209, 204, 192,1.0);
            
        }
        

         a{
            position: absolute;
            padding: 5px;
            width:150px;
            height:40px;
            color: black;
            background-color: white;
            margin-top:5px;
            left:70%;
            border: 2px solid black;
            cursor: pointer;
            font-size:20px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border-radius:10px;
           

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
        <img src="bg8.jpg">
        <div class="container">
            <p>Transaction History</p>
            <table>
                <tr>
                    <th>S Acc.no </th>
                    <th>Sender</th>
                    <th>R Acc.no </th>
                    <th> Receiver</th>
                    <th> Amount</th>
                    <th> Date & Time</th>
                </tr>
                <?php
                 //query to access all data from db
                 $sql7="select * from tb_transaction_details";
                 //execute the query
                 $res7 = mysqli_query($conn , $sql7);
                 
                 //check whether query is executed or not
                 if($res7==TRUE)
                 {
                     //count rows to check data is there or not in db
                     $count7=mysqli_num_rows($res7); //function to get all rows in db

                     //check no of rows
                     if($count7 >0)  //data present
                     {
                         while($row=mysqli_fetch_assoc($res7))
                         {
                         //using while loop to get all db (run until data present in db)

                         //get individual data
                         $s_account=$row['s_account'];
                         $Sender=$row['Sender'];
                         $r_account=$row['r_account'];
                         $Receiver=$row['Receiver'];
                         $Amount=$row['Amount'];
                         $xyz=$row['xyz'];
                         //diplay value in table
                         ?>
                         <tr>
                             <td><?php echo $s_account; ?></td>
                             <td><?php echo  $Sender; ?></td>
                             <td><?php echo $r_account; ?></td>
                             <td><?php echo $Receiver; ?></td>
                             <td><?php echo $Amount; ?></td>
                             <td><?php echo $xyz; ?></td>
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
        <a href="home.php">BACK TO  HOME </a>
                    
        </div>
    </body>
</html>