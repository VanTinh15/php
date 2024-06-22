<?php
    session_start();

    include "model/connectdb.php";
    include "model/ketnoi/baiviet.php";
    include "model/ketnoi/khoahoc.php";
    include "model/ketnoi/tailieu.php";
    include "model/ketnoi/taikhoan.php";
    include "model/ketnoi/danhmuc.php";


    include_once 'view/header.php';


    $hienthibv = hienthi_baiviet();
    $hienthikh = hienthi_khoahoc();
    $hienthitl = hienthi_tailieu();
    $hienthitk = hienthi_taikhoan();



    if(isset($_GET['act'])){
        switch($_GET['act']){

            case 'trangchu':
                if(isset($_GET['courseID'])){
                    $id = $_GET['courseID'];
                    $kqkhoahoc= chitiet_khoahoc($id);
                }
                
                include "view/home.php";
                break;

            case 'gioithieu':
                include "view/about.php";
                break;
            case 'khoahoc':
                include "view/course.php";
                break;
            case 'chitietkhoahoc':
                if(isset($_GET['courseID'])){
                    $id = $_GET['courseID'];
                    $kqkhoahoc= chitiet_khoahoc($id);
                    $luotxem= luotxem($id);
                }
                
                include "view/course_detail.php";
                break;
            case 'tailieu':
                
                include "view/document.php";
                break;
            case 'chitiettl':
                
                if(isset($_GET['documentID'])){
                    $id = $_GET['documentID'];
                    $kqtailieu= chitiet_tailieu($id);
                    $luotxemtl= luotxemtl($id);
                    $luottai = view_download($id);

                }
            

                include "view/document_details.php";
                break;
            case 'baiviet':
                
                include "view/blog.php";
                break;
            case 'chitietbaiviet':
                if(isset($_GET['postID'])){
                    $id = $_GET['postID'];
                    $kqbaiviet= chitiet_baiviet($id);
                    $luotxembv= luotxembv($id);
                }
                include 'view/blog_details.php';
                break;
            case 'lienhe':
                include "view/contact.php";
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    $user= $_POST['user'];
                    $password = $_POST['password'];
                    $account_type = checkuser($user,$password);
                    $_SESSION['account_type'] = $account_type;
                    if($account_type == 0){
                      
                        header('location:index.php');
                    }else{
                       $txt_eror = "Tên tài khoản hoặc mật khẩu không đúng";
                    }
                }
                include "../dacn-web/login.php";
                break;
            default:
            
                include "view/home.php";
                break;
        }
    }else{
        
        include "view/home.php";
    }

    include_once 'view/footer.php';
?>