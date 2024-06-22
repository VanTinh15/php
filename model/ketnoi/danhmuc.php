<?php

// function insert_danhmuc( $title,$description,$file_url,$courseID){
//     $conn=connectdb();
//     $sql= "INSERT INTO document( title, description, file_url,courseID)    
//             VALUE ('$title','$description','$file_url','$courseID')";
//     $conn->exec($sql);
// }

    function getall_dm(){
        $conn= connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqdm= $stmt->fetchAll();
        return $kqdm;
    }
    function timkiem($key){
        $conn=connectdb();
        $sql = "SELECT * FROM tbl_danhmuc WHERE id LIKE '".$key."%' OR tendm LIKE '%".$key."%'";

        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqdm= $stmt->fetchAll();
        return $kqdm;
    }
    function hienthi_dm(){
        $conn= connectdb();
        $sql = "SELECT id, tendm, uutien, hienthi FROM tbl_danhmuc ORDER BY uutien ASC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq= $stmt->fetchAll();

        return $kq;
    }


?>