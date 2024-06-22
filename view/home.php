


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                
            </ol>

            <div class="carousel-inner">

                <?php
                    foreach($hienthibv as $bv){
                        echo '';
                    }
                ?>
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-1.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Khoá học </h5>
                            <h1 class="display-3 text-white mb-md-4">Xem Khoá Học Mới Nhất</h1>
                            <a href="index.php?act=khoahoc" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Xem thêm</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-2.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Bài viết</h5>
                            <h1 class="display-3 text-white mb-md-4">Xem Bài Viết Mới Nhất</h1>
                            <a href="index.php?act=baiviet" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Xem thêm</a>
                        </div>
                    </div>
                </div>

               

            </div>
        </div>
    </div>
    <!-- Carousel End -->




 

    <!-- Courses Start -->
    <div class="container-fluid py-1" style="margin: 20px 0;">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase " style="letter-spacing: 5px;">Khoá Học</h5>
                <h1>Khoá học mới nhất</h1>
            </div>

            <div class="row">

                <?php
                $i=0;
                foreach($hienthikh as $kq){
                    if($i<9){
                        echo '  
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="rounded overflow-hidden mb-2">
                                    <img class="img-fluid" src="../dacn-web/admin/assets/img/'.$kq['img'].'" alt="" style="width: 350px; height: 215px;">
                                    <div class="bg-secondary p-4">
                                        <div class="d-flex justify-content-between mb-3">
                                            <small class="m-0"><i class="fa fa-eye text-primary mr-2"></i>'.$kq['view_course'].'</small>
                                            <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                        </div>
                                        <a class="h5" href="index.php?act=chitietkhoahoc&courseID='.$kq['courseID'].'">'.$kq['coursename'].'</a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                                <h5 class="m-0">$99</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                        $i++;    
                    }
                
                
                }
                        

                ?>

              
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Người hướng dẫn</h5>
                
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->




    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Bài Viết</h5>
                <h1>Bài viết mới nhất</h1>
            </div>
            <div class="row pb-3">
                <?php
                    $i=0;
                    foreach($hienthibv as $bv){
                        if($i<9){
                            echo '  
                                
                                <div class=" col-lg-4 mb-4">
                                    <div class="blog-item position-relative overflow-hidden rounded mb-2" style="border: 1px solid #858277">
                                        <img class=" img-fluid" src="../DACN-WEB/admin/assets/img/'.$bv['img'].'" alt="" style="width: 350px; height: 215px;">
                                        
                                            <div class=" text-left ">
                                                <a class="blog-overlay text-decoration-none" href="index.php?act=chitietbaiviet&postID='.$bv['postID'].'">
                                                    <br>
                                                    <h5 class=" text-white mb-1"> '.$bv['topic'].'</h5>
                                                    <p class="text-primary m-0"> '.$bv['date'].'</p>
                                                    <p>Lượt xem: <i class="fa fa-eye text-primary mr-2"></i>'.$bv['view_post'].'</p>
                                                </a>
                                            </div>
                                         
                                    </div>
                                </div>

                            ';
                        }
                        $i++;
                    }
                ?>      

            </div>
        </div>
    </div>
    <!-- Blog End -->