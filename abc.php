<?php include('config.php'); ?>
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
    
