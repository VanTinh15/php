<?php

    session_start();
    ob_start();

    if(isset($_SESSION['account_type']) && ($_SESSION['account_type']==1)){

        include "../model/connectdb.php";
        include "../model/ketnoi/danhmuc.php";
        include "../model/ketnoi/baiviet.php";
        include "../model/ketnoi/khoahoc.php";
        include "../model/ketnoi/taikhoan.php";
        include "../model/ketnoi/tailieu.php";
        
        connectdb();
        
        include "view/header.php";
        include "view/sidebar.php";
        if(isset($_GET['act'])){
            switch ($_GET['act']){
                case 'thongke':
                    $tongbv= tongbv();
                    $tongtl= tongtl();
                    $tongkh= tongkh();
                    $hienthikh= hienthi_khoahoc();
                    $hienthitl= hienthi_tailieu();
                    $hienthibv= hienthi_baiviet();
                    include "../admin/view/home.php";
                    break;
                
                case 'danhmuc':
                    
                    if(isset($_POST['search']) && ($_POST['search'])!=""){
                        $search=$_POST['tendm'];
                        $kqdm= timkiem($search);
                        
                    }else{
                        
                        $kqdm = getall_dm(); 
                        
                    }
                    include "view/hienthi/danhmuc.php";
                    break;
                
                
                case 'taikhoan':

                    if(isset($_POST['search']) && ($_POST['search'])!=""){
                        $search=$_POST['username'];
                    
                        $kqtk= timkiemtk($search);

                    }else{                  
                        $kqtk = getall_taikhoan();
                    }

                    include "view/hienthi/taikhoan.php";
                    break;
                case 'taikhoan_xoa':
                    if(isset($_GET['userID'])){
                        $id = $_GET['userID'];
                        del_taikhoan($id);
                    }

                    $kqtk = getall_taikhoan();
                    include "view/hienthi/taikhoan.php";
                    break;

                case 'taikhoan_sua':
                    if(isset($_GET['userID'])){
                        $id = $_GET['userID'];
                        $tkone = getonetaikhoan($id);
                        $kqtk = getall_taikhoan();
                        include "view/hienthi/taikhoan_sua.php";
                    }
                    if(isset($_POST['suataikhoan'])&& ($_POST['suataikhoan'])) {
                        // Lấy dữ liệu từ form
                        $userID = $_POST['userID'];
                        $name = $_POST['name'];
                        
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        //$file_url = $_POST['file_url'];
                        $email = $_POST['email'];

                        if(isset($_FILES['image']['name']) !=""){
                            $image = $_FILES['image']['name'];
                            
                        }else{
                            $image ="";
                        }
                        $account_type = $_POST['account_type'];
                        
                        sua_taikhoan($userID,$name, $username, $password,$email,$image,$account_type);
                        move_uploaded_file($_FILES['image']['tmp_name'], "../admin/assets/img/".$_FILES['image']['name']);
                        // Gọi hàm cập nhật dữ liệu vào cơ sở dữ liệu
                    
                        // Sau khi cập nhật, chuyển hướng về trang danh sách khoá học
                        //header("Location: index.php?act=khoahoc");
                        //exit();
                        $kqtk = getall_taikhoan();

                        include "view/hienthi/taikhoan.php";
                    }
                
                    break;

                case 'taikhoan_add':
                    
                    if( isset($_POST['themtaikhoan'])&& ($_POST['themtaikhoan']) ){
                        $userID=$_POST['userID'];
                        $name = $_POST['name'];
                        
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        //$file_url = $_POST['file_url'];
                        $email = $_POST['email'];
                        
                        $image = $_FILES['image']['name'];
                        $account_type = $_POST['account_type'];
                        $courseID=$_POST['courseID'];
                        insert_taikhoan($userID, $name, $username, $password,$email,$image,$account_type);
                        //--------------------------------------------------------

                        // $upload_directory = "../admin/uploads/";
                        // $destination_file = $upload_directory . basename($_FILES['file_url']['name']);
                        // move_uploaded_file($_FILES['file_url']['tmp_name'], $destination_file);

                        move_uploaded_file($_FILES['image']['tmp_name'], "../admin/assets/img/".$_FILES['image']['name']);
                        
                    
                        header('Location: index.php?act=taikhoan');
                        exit();    //đảm bảo sau khi thực thi mã không chuyển hướng nữa
                        
                    }

                    $kqtk = getall_taikhoan();

                    include "view/hienthi/taikhoan_add.php";
                    break;

                case 'baiviet':
                    //tìm kiếm bài viết
                    if(isset($_POST['search']) && ($_POST['search'])!=""){
                        $search=$_POST['topic'];
                    
                        $kqbaiviet= timkiembv($search);

                    }else{                  
                        $kqbaiviet = getall_baiviet();
                    }
                    include "view/hienthi/baiviet.php";
                    break;
                

                case 'baiviet_xoa':

                    if(isset($_GET['postID'])){
                        $id= $_GET["postID"];
                        del_baiviet($id);
                    }
                    $kqbaiviet = getall_baiviet();
                    include "view/hienthi/baiviet.php";
                    break;   

                case 'baiviet_sua':
                    $kqtk = getall_taikhoan();
                    $kqkh = getall_khoahoc();

                    if(isset($_GET['postID'])){
                        $id= $_GET["postID"];
                        $bvone= getonebaiviet($id);
                        $kqbaiviet = getall_baiviet();
                        include "view/hienthi/baiviet_sua.php";
                    }
                    if( isset($_POST['suabaiviet'])&& ($_POST['suabaiviet']) ){
                        $postID= $_POST['postID'];
                        $courseID = $_POST['courseID'];
                        
                        $userID = $_POST['userID'];
                        $topic = $_POST['topic'];
                        //$file_url = $_POST['file_url'];
                        $topic = $_POST['topic'];
                        
                        
                        if(isset($_FILES['img']['name']) !=""){
                            $img = $_FILES['img']['name'];
                            
                        }else{
                            $img ="";
                        }
                        $content = $_POST['content'];
                        $date=$_POST['date'];
                        sua_baiviet($postID,$courseID ,$userID ,$topic,$img,$content,$date);
                        //--------------------------------------------------------

                        // $upload_directory = "../admin/uploads/";
                        // $destination_file = $upload_directory . basename($_FILES['file_url']['name']);
                        // move_uploaded_file($_FILES['file_url']['tmp_name'], $destination_file);

                        move_uploaded_file($_FILES['img']['tmp_name'], "../admin/assets/img/".$_FILES['img']['name']);
                        
                        $kqbaiviet = getall_baiviet();
                        include "view/hienthi/baiviet.php";
                        
                        exit();    //đảm bảo sau khi thực thi mã không chuyển hướng nữa
                    // $kqbaiviet = getall_baiviet();
                    // include "view/hienthi/baiviet.php";

                    }
                    break;   


                case 'baiviet_add':

                    if( isset($_POST['thembaiviet'])&& ($_POST['thembaiviet']) ){
            
                        $courseID = $_POST['courseID'];
                        
                        $userID = $_POST['userID'];
                        $topic = $_POST['topic'];
                        //$file_url = $_POST['file_url'];
                        $topic = $_POST['topic'];
                        
                        $img = $_FILES['img']['name'];
                        $content = $_POST['content'];
                        $date=$_POST['date'];
                        insert_baiviet( $courseID ,$userID ,$topic,$img,$content,$date);
                        //--------------------------------------------------------

                        // $upload_directory = "../admin/uploads/";
                        // $destination_file = $upload_directory . basename($_FILES['file_url']['name']);
                        // move_uploaded_file($_FILES['file_url']['tmp_name'], $destination_file);

                        move_uploaded_file($_FILES['img']['tmp_name'], "../admin/assets/img/".$_FILES['img']['name']);
                        
                    
                        header('Location: index.php?act=baiviet');
                        exit();    //đảm bảo sau khi thực thi mã không chuyển hướng nữa
                        
                    }
                    $kqkh=getall_khoahoc();

                    $kqtk =getall_taikhoan();

                    $kqbaiviet = getall_baiviet();
                    include "view/hienthi/baiviet_add.php";
                    break;
                
                    

                case 'tailieu':
                    $kqkh = getall_khoahoc();

                    if(isset($_POST['search']) && ($_POST['search'])!=""){
                        $search=$_POST['title'];
                    
                        $kqtl= timkiemtl($search);

                    }else{                  
                    $kqtl = getall_tailieu();
                    }
                    
                    include "view/hienthi/tailieu.php";
                    break;
                case 'tailieu_xoa':

                    if(isset($_GET['documentID'])){
                        $id = $_GET['documentID'];
                        del_tailieu($id);
                    }else{
                        echo 'không thành công';
                    }
                    

                    $kqtl = getall_tailieu();
                    include "view/hienthi/tailieu.php";
                    break;

                case 'tailieu_sua':

                    if(isset($_GET['documentID'])){
                        $id = $_GET['documentID'];

                        $tlone = getonetailieu($id);
                        $kqkh = getall_khoahoc();
                        $kqtl = getall_tailieu();
                        
                        include "view/hienthi/tailieu_sua.php";
                    }
                    
                
                    if(isset($_POST['suatailieu'])&& ($_POST['suatailieu'])) {
                        // Lấy dữ liệu từ form

                        $documentID = $_POST['documentID'];
                        $title = $_POST['title'];
                        $description = $_POST['description'];
                        //$file_url = $_POST['file_url'];
                        
                        $file_url = $_FILES['file_url']['name'];
                        
                        $courseID=$_POST['courseID'];
                        sua_tailieu($documentID,$title,$description,$file_url,$courseID);
                        //--------------------------------------------------------

                        //if($_FILES['file_url']!="")  $file_url = $_FILES['file_url']; else $file_url="";
                        if(isset($file_url) && move_uploaded_file($_FILES['file_url']['tmp_name'], "../admin/uploads/".$_FILES['file_url']['name'])){
                            echo 'thành công';
                        }
                        //var_dump($kqtl);
                        // 
                        $kqtl = getall_tailieu();
                        
                        include "view/hienthi/tailieu.php";
                        
                        
                    }
                    break;

                case 'tailieu_add':
                    
                    if(isset($_POST['themtailieu'])&& ($_POST['themtailieu']) ){
            
                        
                        $title = $_POST['title'];
                        $description = $_POST['description'];
                        //$file_url = $_POST['file_url'];
                        
                        $file_url = $_FILES['file_url']['name'];
                        
                        $courseID=$_POST['courseID'];
                        insert_tailieu($title,$description,$file_url,$courseID);
                        //--------------------------------------------------------

                        // $upload_directory = "../admin/uploads/";
                        // $destination_file = $upload_directory . basename($_FILES['file_url']['name']);
                        // move_uploaded_file($_FILES['file_url']['tmp_name'], $destination_file);

                        //if($_FILES['file_url']!="")  $file_url = $_FILES['file_url']; else $file_url="";
                        if(isset($file_url) && move_uploaded_file($_FILES['file_url']['tmp_name'], "../admin/uploads/".$_FILES['file_url']['name'])){
                            echo 'thành công';
                        }
                        //header('loaction: index.php?act=tailieu');
                        // 
                        header('Location: index.php?act=tailieu');
                        exit();    //đảm bảo sau khi thực thi mã không chuyển hướng nữa
                        
                    }

                    $kqkh = getall_khoahoc();
                    $kqtl = getall_tailieu();
                    
                    include "view/hienthi/tailieu_add.php";
                    
                    break;
                
                case 'khoahoc':

                    if(isset($_POST['search']) && ($_POST['search'])!=""){
                        $search = $_POST['coursename'];
                    
                        $kqkh = timkiemkh($search);

                    }else{                  
                        $kqkh = getall_khoahoc();
                    }
                    
                    include "view/hienthi/khoahoc.php";
                    break;
                
                case 'khoahoc_xoa':
                    if(isset($_GET['courseID'])){
                        $id = $_GET['courseID'];
                        del_khoahoc($id);
                    }
                    
                    $kqkh = getall_khoahoc();
                    include "view/hienthi/khoahoc.php";
                    break;
                case 'khoahoc_sua':

                    if(isset($_GET['courseID'])){
                        $id = $_GET['courseID'];
                        $khone = getonekhoahoc($id);
                        $kqkh = getall_khoahoc();
                        include "view/hienthi/khoahoc_sua.php";
                    }
                
                    if(isset($_POST['suakhoahoc'])&& ($_POST['suakhoahoc'])) {
                        // Lấy dữ liệu từ form
                        $courseID = $_POST['courseID'];
                        $coursename = $_POST['coursename'];
                        $description = $_POST['description'];
                        $instructor = $_POST['instructor'];
                        if(isset($_FILES['img']['name']) !=""){
                            $img = $_FILES['img']['name'];
                            
                        }else{
                            $img ="";
                        }
                        sua_khoahoc($courseID, $coursename, $description, $instructor,$img);
                        move_uploaded_file($_FILES['img']['tmp_name'], "../admin/assets/img/".$_FILES['img']['name']);
                        // Gọi hàm cập nhật dữ liệu vào cơ sở dữ liệu
                    
                        // Sau khi cập nhật, chuyển hướng về trang danh sách khoá học
                        //header("Location: index.php?act=khoahoc");
                        //exit();
                        $kqkh = getall_khoahoc();
                        include "view/hienthi/khoahoc.php";
                    }
                    
                    break;

                case 'khoahoc_add':
                    
                    if( isset($_POST['themkhoahoc'])&& ($_POST['themkhoahoc']) ){
            
                        $coursename = $_POST['coursename'];
                        
                        $description = $_POST['description'];
                        $instructor = $_POST['instructor'];
                        
                        $email = $_POST['email'];
                        
                        $img = $_FILES['img']['name'];
                        
                        insert_khoahoc( $coursename, $description, $instructor,$img);
                        //--------------------------------------------------------

                        // $upload_directory = "../admin/uploads/";
                        // $destination_file = $upload_directory . basename($_FILES['file_url']['name']);
                        // move_uploaded_file($_FILES['file_url']['tmp_name'], $destination_file);

                        move_uploaded_file($_FILES['img']['tmp_name'], "../admin/assets/img/".$_FILES['img']['name']);
                        
                    
                        header('Location: index.php?act=khoahoc');
                        exit();    //đảm bảo sau khi thực thi mã không chuyển hướng nữa
                        
                    }


                    $kqkh = getall_khoahoc();
                    include "view/hienthi/khoahoc_add.php";
                    break;

                    
                default:
                    $tongbv= tongbv();
                    $tongtl= tongtl();
                    $tongkh= tongkh();
                    $hienthikh= hienthi_khoahoc();
                    $hienthitl= hienthi_tailieu();
                    $hienthibv= hienthi_baiviet();
                    include "view/home.php";
                    break;
                
            }

        }else{
                    $tongbv= tongbv();
                    $tongtl= tongtl();
                    $tongkh= tongkh();
                    $hienthikh= hienthi_khoahoc();
                    $hienthitl= hienthi_tailieu();
                    $hienthibv= hienthi_baiviet();
                    include "view/home.php";
        }
        
        include "view/footer.php";
    }else{
        include '../admin/login.php';
    }

?>