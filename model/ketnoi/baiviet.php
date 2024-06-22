<?php

    function del_baiviet($postID){
        $conn=connectdb();
        $sql = "DELETE FROM post WHERE postID=".$postID;

        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function insert_baiviet( $courseID ,$userID ,$topic,$img,$content,$date){
        $conn=connectdb();
        $sql= "INSERT INTO post( courseID ,userID ,topic,img,content,date)    
                VALUE ('$courseID','$userID','$topic','$img','$content','$date')";
        $conn->exec($sql);
    }

    function getall_baiviet(){
        $conn= connectdb();
        $stmt = $conn->prepare("SELECT pt.postID,pt.courseID, pt.userID, us.username, ce.coursename, pt.topic,pt.img, pt.content, pt.date 
                                FROM post pt inner join user us on  pt.userID = us.userID
                                            inner join course ce on pt.courseID = ce.courseID;

        ");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqbaiviet= $stmt->fetchAll();



        return $kqbaiviet;
    }

    function getonebaiviet($postID){
        $conn =connectdb();
        $stmt = $conn->prepare("SELECT * FROM post WHERE postID=".$postID);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqbaiviet= $stmt->fetchAll();

        return $kqbaiviet;
    }
    function sua_baiviet($postID,$courseID ,$userID ,$topic,$img,$content,$date){
        $conn =connectdb();

        if($img==""){
            $sql = "UPDATE post SET postID='".$postID."', courseID='".$courseID."',
            userID='".$userID."', topic='".$topic."', 
            content='".$content."',date='".$date."' WHERE postID=".$postID;
        }else{
            $sql = "UPDATE post SET postID='".$postID."', courseID='".$courseID."',
            userID='".$userID."', topic='".$topic."', img='".$img."',
            content='".$content."',date='".$date."' WHERE postID=".$postID;
         
        }
        

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->execute();


    }

    function hienthi_baiviet(){
        $conn= connectdb();
        $sql = "SELECT * FROM post ORDER BY postID DESC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqbaiviet= $stmt->fetchAll();



        return $kqbaiviet;
    }

    function chitiet_baiviet($postID){
        $conn= connectdb();
        $sql = "SELECT * FROM post WHERE postID=".$postID;

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqbaiviet= $stmt->fetchAll();

        return $kqbaiviet;
    }

    function luotxembv($postID){
        $conn=connectdb();
        $sql = "UPDATE post SET view_post=view_post + 1 WHERE postID=".$postID;

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();
    }
    function timkiembv($key){
        $conn=connectdb();
       
        $sql = "SELECT pt.postID,pt.courseID, pt.userID, us.username, ce.coursename, pt.topic,pt.img, pt.content, pt.date 
        FROM post pt inner join user us on  pt.userID = us.userID
                    inner join course ce on pt.courseID = ce.courseID
                     WHERE postID LIKE '".$key."%' OR us.username LIKE '%".$key."%' OR ce.coursename LIKE '%".$key."%' OR pt.topic LIKE '%".$key."%'";
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqbaiviet= $stmt->fetchAll();
        return $kqbaiviet;
    }

    function tongbv(){
        $conn = connectdb();
        $sql = "SELECT COUNT(*) AS tong_post FROM post";
    
        // Chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare($sql);
        // Thực thi truy vấn
        $stmt->execute();
        // Thiết lập chế độ trả về kết quả
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // Lấy kết quả
        $kq = $stmt->fetchAll();
        // Trả về kết quả
        return $kq;
    }
?>