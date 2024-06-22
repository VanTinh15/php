<?php
    function del_khoahoc($courseID){
        $conn=connectdb();
        $sql = "DELETE FROM course WHERE courseID=".$courseID;

        // use exec() because no results are returned
        $conn->exec($sql);
    }

function insert_khoahoc( $coursename, $description, $instructor,$img){
    $conn=connectdb();
    $sql= "INSERT INTO course( coursename, description, instructor,img)    
            VALUE ('$coursename','$description','$instructor','$img')";
    $conn->exec($sql);
}

    function getall_khoahoc(){
        $conn= connectdb();
        $stmt = $conn->prepare("SELECT * FROM course");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqkh= $stmt->fetchAll();

        return $kqkh;
    }

    function getonekhoahoc($courseID){
        $conn =connectdb();
        $stmt = $conn->prepare("SELECT * FROM course WHERE courseID=".$courseID);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqkh= $stmt->fetchAll();

        return $kqkh;
    }
    function sua_khoahoc($courseID,$coursename,$description,$instructor,$img){
        $conn =connectdb();

        if($img==""){
            $sql = "UPDATE course SET courseID='".$courseID."', coursename='".$coursename."',
                    description='".$description."', instructor='".$instructor."'  WHERE courseID=".$courseID;
        }else{
            $sql = "UPDATE course SET courseID='".$courseID."', coursename='".$coursename."',
                    description='".$description."', instructor='".$instructor."', img='".$img."'  WHERE courseID=".$courseID;
        }

        // Prepare statement
        $stmt = $conn->prepare($sql);
      
        // execute the query
        $stmt->execute();


    }
    function hienthi_khoahoc(){
        $conn= connectdb();
        $sql = "SELECT * FROM course ORDER BY courseID DESC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqbaiviet= $stmt->fetchAll();

        return $kqbaiviet;
    }

    function chitiet_khoahoc($courseID){
        $conn= connectdb();
        $sql = "SELECT * FROM course WHERE courseID=".$courseID;

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqbaiviet= $stmt->fetchAll();

        return $kqbaiviet;
    }
    function luotxem($courseID){
        $conn=connectdb();
        $sql = "UPDATE course SET view_course=view_course + 1 WHERE courseID=".$courseID;

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();
    }

    function timkiemkh($key){
        $conn=connectdb();
        $sql = "SELECT * FROM course WHERE courseID LIKE '".$key."%' OR coursename LIKE '%".$key."%'";

        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqkh= $stmt->fetchAll();
        return $kqkh;
    }
    function tongkh(){
        $conn = connectdb();
        $sql = "SELECT COUNT(*) AS tong_course FROM course";
    
        // Chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        // Thực thi truy vấn
        $stmt->execute();
        // Thiết lập chế độ trả về kết quả
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // Lấy kết quả
        $kqkh = $stmt->fetchAll();
        // Trả về kết quả
        return $kqkh;
    }

?>