<?php

function del_taikhoan($userID){
    $conn=connectdb();
    $sql = "DELETE FROM user WHERE userID=".$userID;

    // use exec() because no results are returned
    $conn->exec($sql);
}

function insert_taikhoan($userID, $name, $username, $password,$email,$image,$account_type){
    $conn=connectdb();

    $sql= "INSERT INTO user( userID,name, username, password,email,image,account_type)    
            VALUE ('$userID','$name','$username','$password','$email','$image','$account_type')";
    $conn->exec($sql);
}

    function getall_taikhoan(){
        $conn= connectdb();
        $stmt = $conn->prepare("SELECT * FROM user");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqtk= $stmt->fetchAll();



        return $kqtk;
    }

    function getonetaikhoan($userID){
        $conn =connectdb();
        $stmt = $conn->prepare("SELECT * FROM user WHERE userID=".$userID);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqtk= $stmt->fetchAll();

        return $kqtk;
    }
    function sua_taikhoan($userID,$name, $username, $password,$email,$image,$account_type){
        $conn =connectdb();

        if($image==""){
            $sql = "UPDATE user SET userID='".$userID."', name='".$name."', username='".$username."',
            password='".$password."', email='".$email."', account_type='".$account_type."'  WHERE userID=".$userID;
        }else{
            $sql = "UPDATE user SET userID='".$userID."', name='".$name."', username='".$username."',
            password='".$password."', email='".$email."', image='".$image."', account_type='".$account_type."'  WHERE userID=".$userID;
        }
        // Prepare statement
        $stmt = $conn->prepare($sql);
      
        // execute the query
        $stmt->execute();
    }


    function hienthi_taikhoan(){
        $conn= connectdb();
        $sql = "SELECT * FROM user ORDER BY userID DESC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqtaikhoan= $stmt->fetchAll();

        return $kqtaikhoan;
    }
    function timkiemtk($key){
        $conn=connectdb();
        $sql = "SELECT * FROM user WHERE userID LIKE '".$key."%' OR username LIKE '%".$key."%'";

        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqtaikhoan= $stmt->fetchAll();
        return $kqtaikhoan;
    }

    function checkuser($user,$password){
        $conn=connectdb();
        $sql = "SELECT * FROM user WHERE username='".$user."' AND password='".$password."'";
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq= $stmt->fetchAll();
        if(count($kq)>0){
            return $kq[0]['account_type'];
        }else{
            return 0;
        }
          

    }

?>