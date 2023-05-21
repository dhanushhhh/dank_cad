<?php
    $name = $_POST['name']
    $email = $_POST['email']
    $phone = $_POST['phone']
    $city = $_POST['city']
    $state = $_POST['state']
    $country  = $_POST['country']

    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn->connect_error) {
        die('Connection Failed: '.$conn->connect_error);
    }else{
        $stmt $conn->prepare("insert into customer_user(name,email,phone,city,state,country) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisss",$name, $email, $phone, $city, $state, $country);
        $stmt->execute();
        echo "Registeration Successful. Welcome to Dank";
        $stmt->close();
        $conn->close();
    }


?>