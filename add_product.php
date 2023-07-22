<?php
    //connect to database
    include_once('dbcon.php');

    //collect data from the form 
    $name = $_POST['name'];
    $price = $_POST['price'];
    
    if(!empty($name) || !empty($price) ){
        $insertQuery = "INSERT INTO product(name,price) VALUES('$name','$price')";
        $insertExe = mysqli_query($conn,$insertQuery);
        if($insertExe){
            echo"Insertion Sucess";
        }else{
            echo"Insertion Failed";
        }
    }
    else{
        echo "<h4>Fill properly</h4>";
    }

?>

