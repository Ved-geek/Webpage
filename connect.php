<?php 
$name = filter_input(INPUT_POST,'name');
$Surname = filter_input(INPUT_POST,'surname');
$Date_of_birth = filter_input(INPUT_POST,'dob');
$address = filter_input(INPUT_POST,'address');
$Phone = filter_input(INPUT_POST,'phone');
$Email = filter_input(INPUT_POST,'email');
$Zip = filter_input(INPUT_POST,'zip');

if (!empty($username)){
    if (!empty($Email)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "youtube";
    // Create connection
    $conn = new mysqli ($host, $dbname, $dbsurname, $dbdob $dbaddress $dbphone, $dbphone, $dbemail, $dbzip);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO account (name, surname, date of birth, address, phone, email, zip)
    values ('$name','$surname','$dob','$address','$phone','$phone','$email','$zip')";
    if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
    }
    else{
    echo "Email should not be empty";
    die();
    }
    }
    else{
    echo "Name should not be empty";
    die();
    }
    
?>