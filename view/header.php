<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tài Liệu - CNTT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
       <!-- Navbar Start -->
       <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px;">
                    <img src="../img/logo.png" alt="Logo" class="logo" style="max-height:100px;">
                    <h5 class="text-primary m-0">HTDOCUMENT</h5>
                    
                </a>
                
            </div>


            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">HT</span>DOCUMENT</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <?php 
                                $hienthidm = hienthi_dm();
                                foreach ($hienthidm as $dm){                     
                                    echo '              
                                        <a href="index.php?act='.$dm['hienthi'].'" class="nav-item nav-link" onclick="setActive(this)">'.$dm['tendm'].'</a>
                                    ';
                                }
                            ?>

                            <!-- <a href="index.php?act=trangchu" class="nav-item nav-link" onclick="setActive(this)">Trang Chủ</a>
                            <a href="index.php?act=baiviet" class="nav-item nav-link" onclick="setActive(this)" >Bài Viết</a>
                            <a href="index.php?act=khoahoc" class="nav-item nav-link" onclick="setActive(this)" >Khoá Học</a>
                            <a href="index.php?act=tailieu" class="nav-item nav-link" onclick="setActive(this)" >Tài Liệu</a>
                            <a href="index.php?act=gioithieu" class="nav-item nav-link" onclick="setActive(this)">Giới Thiệu</a>
                            <a href="index.php?act=lienhe" class="nav-item nav-link" onclick="setActive(this)" >Liên Hệ</a> -->
                        </div>
                        <!-- <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href=""></a> -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!--  Loại bỏ lớp active từ tất cả các liên kết và thêm lớp active vào phần tử được nhấn. -->
<script>
    function setActive(element) {
        // Loại bỏ lớp active từ tất cả các phần tử
        var links = document.querySelectorAll('.nav-item.nav-link');
        links.forEach(function(link) {
            link.classList.remove('active');
        });
        
        // Thêm lớp active vào phần tử được nhấn
        element.classList.add('active');
    }

    // Đảm bảo rằng nút tương ứng được tô sáng khi tải lại trang
    window.addEventListener('load', function() {
        var currentUrl = window.location.href;
        var links = document.querySelectorAll('.nav-item.nav-link');
        links.forEach(function(link) {
            if (link.href === currentUrl) {
                link.classList.add('active');
            }
        });
    });
</script>