<?php

    function del_tailieu($documentID){
        $conn=connectdb();
        $sql = "DELETE FROM document WHERE documentID=".$documentID;

        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function insert_tailieu($title,$description,$file_url,$courseID){
        $conn=connectdb();
        $sql= "INSERT INTO document( title, description, file_url,courseID)    
                VALUE ('$title','$description','$file_url','$courseID')";
        $conn->exec($sql);
    }


    function getall_tailieu(){
        $conn= connectdb();
        $stmt = $conn->prepare("SELECT dt.documentID, dt.title, dt.description,dt.file_url,dt.courseID, ce.coursename  FROM document dt inner join course ce on dt.courseID = ce.courseID");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqtl= $stmt->fetchAll();



        return $kqtl;
    }

    function getonetailieu($documentID){
        $conn =connectdb();
        $stmt = $conn->prepare("SELECT * FROM document WHERE documentID=".$documentID);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqtl= $stmt->fetchAll();

        return $kqtl;
    }
    function sua_tailieu($documentID,$title,$description,$file_url,$courseID){
        $conn =connectdb();

            $sql = "UPDATE document SET documentID='".$documentID."', title='".$title."',
                    description='".$description."', file_url='".$file_url."', courseID='".$courseID."' WHERE  documentID=".$documentID;
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();

    }

    function hienthi_tailieu(){
        $conn= connectdb();
        $sql = "SELECT * FROM document ORDER BY  view_document DESC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $tailieu= $stmt->fetchAll();



        return $tailieu;
    }

    function chitiet_tailieu($documentID){
        $conn= connectdb();
        $sql = "SELECT * FROM document WHERE documentID=".$documentID;

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq= $stmt->fetchAll();

        return $kq;
    }

    function luotxemtl($documentID){
        $conn=connectdb();
        $sql = "UPDATE document SET view_document=view_document + 1 WHERE documentID=".$documentID;
        
        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();
    }

    function view_download($documentID){
        $conn=connectdb();
        $sql = "UPDATE document SET view_download=view_download + 1 WHERE documentID=".$documentID;    
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    // Hàm tìm kiếm
    function timkiemtl($key){
        $conn=connectdb();
        $sql = "SELECT dt.documentID, dt.title, dt.description,dt.file_url,dt.courseID, ce.coursename  FROM document dt inner join course ce on dt.courseID = ce.courseID WHERE documentID LIKE '%".$key."%' OR  title LIKE '%".$key."%'";

        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq= $stmt->fetchAll();
        return $kq;
    }
    function tongtl(){
        $conn = connectdb();
        $sql = "SELECT COUNT(*) AS tong_document FROM document";
    
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