    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 40px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Tài Liệu</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Trang Chủ</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Tài Liệu</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


<!-- Documents Start -->
<div class="container-fluid py-1">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="text-primary text-uppercase " style="letter-spacing: 5px;">Documents</h1>
            <h5>Thư viện của chúng tôi</h5>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="row pb-4">
                    <?php
                    
                    foreach($hienthitl as $tl){

                        echo '<div class="col-md-8 col-lg-4 text-center document mb-4 "> 
                                    <div class="document-item rounded overflow-hidden mb-2" border>
                                        <div class="document-img position-relative"  >

                        ';
                            // echo '<a href="index.php?act=chitiettl&documentID='.$tl['documentID'].'"';    
                            foreach($hienthikh as $kh){
                            if ($kh['courseID'] == $tl['courseID']) {
                                echo '<img class="img-fluid" src="../dacn-web/admin/assets/img/'.$kh['img'].'" alt="'.$kh['img'].'"  style="width: 350px; height: 215px;" >';
                                break;
                            }
                            }
                        echo '<div class="document-links">
                                    <div class="document-links row justify-content-center">
                                        
                                    </div>
                                </div>
                            </div>
                                <div class="bg-secondary p-4" >
                                <a href="index.php?act=chitiettl&documentID='.$tl['documentID'].'">
                                    <h4><p class="m-0">'.$tl['title'].'</p></h4>
                                    
                                    </a>
                        ';
                        echo '<p class="m-0">Lượt xem: '.$tl['view_document'].'</p>';                                    
                        echo '<p class="m-0">Lượt tải xuống: '.$tl['view_download'].'</p>';                               
                        
                        foreach($hienthikh as $kh){
                            
                            if ($kh['courseID'] == $tl['courseID']) {

                                echo '<p class="m-0">'.$kh['coursename'].'</p>';
                                }    
                            
                            break;     
                        }
                        echo '</div>';
                        echo '</div>';
                        //    hiển thị icon download và lượt xem 
                            // <div class="col-6">
                            //     <a class="btn  btn-square mx-1" href="../DACN-WEB/admin/uploads/'.$tl['file_url'].'" alt="error"><i class="fas fa-download"></i></a>
                            //     <a class="btn  btn-square mx-1" href="../DACN-WEB/admin/uploads/'.$tl['file_url'].'" target="_blank"><i class="fas fa-eye"></i></a>

                            // </div>
                        echo '</div>';
                            
                        }
                    ?>
                </div>
            </div>
           
        

            
        </div>

    </div>
</div>

<!-- Documents End -->


        <style>
            .bg-secondary a:hover {
                text-decoration: none; /* Vô hiệu hóa gạch chân khi hover */
                color: #007bff;
            }
            .document-item {
                transition: transform 0.3s;
            }

            .document-item:hover {
                transform: scale(1.05);
                cursor: pointer;
            }
        </style>