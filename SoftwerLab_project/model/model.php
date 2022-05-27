<?php 

require_once 'db_connect.php';

function login($email,$password){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `user_info` where Email = ?  AND Password = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email,$password]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    if($row == null){
        return null;
    }
    else return $row;
}


function add($data){
	$conn = db_conn();
    $selectQuery = "INSERT into user_info (Name, Email, Phone, Password, image,type)
VALUES (:name, :email, :phone, :password, :image, :type)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':phone' => $data['phone'],
        	':password' => $data['password'],
        	':image' => $data['image'],
            ':type' => $data['type']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function addBook($data){
	$conn = db_conn();
    $selectQuery = "INSERT into book (Name, Writer, Genra, Publisher, Date,Image,Country,Language)
VALUES (:name, :writer, :genra, :publisher, :date, :image,:country,:language)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':writer' => $data['writer'],
        	':genra' => $data['genra'],
        	':publisher' => $data['publisher'],
        	':date' => $data['date'],
            ':image' => $data['image'],
            ':country' => $data['country'],
            ':language' => $data['language']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

