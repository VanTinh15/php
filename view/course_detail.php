



    <!-- chi tiết khoá học -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                    <!-- hiển thị chi tiết khoá học -->
                <?php 
                    foreach ($kqkhoahoc as $kq){
                        echo '
                        <div class="col-lg-8">
                        <div class="mb-5">
                            
                            <h1 class="mb-5">'.$kq['coursename'].'</h1>
                            <h6 class="text-primary mb-4">'.$kq['description'].'</h6>

                            <img class="img-fluid rounded w-100 mb-4" src="../dacn-web/admin/assets/img/'.$kq['img'].'" alt="'.$kq['img'].'" alt="Image" >

                            
                        </div>
                        ';
                    }
                ?>
                <hr style="border: 1px solid black;"></hr>
                <!-- hiên thị tài liệu -->
                <div class="container-fluid py-1" style="margin: 20px 0;">
                    <div class="container py-1">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase"></h5>
                        <h4>Tài liệu liên quan</h4>
                    </div>

                    <div class="row">
                        <?php
                        $i=0;
                        foreach($hienthikh as $kh){
                            
                            foreach($hienthitl as $tl){
                                if($kh['courseID'] == $tl['courseID']){
                                    if($i<4){
                                    echo '<div class="col-md-12 col-lg-12 mb-4"> 
                                        <div class="document-item rounded overflow-hidden border d-flex">
                                            <div class="document-img position-relative">
                                                ';
            
                                    echo '<img class="img-fluid" src="../dacn-web/admin/assets/img/'.$kh['img'].'" alt="'.$kh['img'].'" style="width: 302px; height: 185px; object-fit: block;">';
                                    echo '</div>
                                        <div class="bg-secondary p-4 flex-grow-1">
                                            <a href="index.php?act=chitiettl&documentID='.$tl['documentID'].'">
                                                <h4 class="m-0">'.$tl['title'].'</h4>
                                                <p class="m-0">'.$tl['description'].'</p>
                                            </a>
                                            <p class="m-0 mb-1">Lượt xem: '.$tl['view_document'].'</p>
                                            <p class="m-0 mb-1">Lượt tải: '.$tl['download_document'].'</p>';
                                    
                                    
                                    echo '<p class=" mb-0">'.$kh['coursename'].'</p>';
                                    echo '</div>
                                        </div>
                                    </div>';
                                    echo '';
                                    $i++;
                                }
                                }
                            
                        }
                        }
                                      
                        ?>
                    </div>
                    </div>
                <a href="index.php?act=tailieu" class="btn explore-now ">Xem thêm</a>    
                </div>
                
                <hr style="border: 1px solid black;"></hr>
                    <!-- Comment List -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">3 Comments</h3>

                        <div class="media mb-4">
                            <img src="img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                style="width: 45px;">
                            <div class="media-body">
                                <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at.
                                    Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam
                                    consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                <button class="btn btn-sm btn-secondary">Reply</button>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <img src="img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                style="width: 45px;">
                            <div class="media-body">
                                <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at.
                                    Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam
                                    consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                <button class="btn btn-sm btn-secondary">Reply</button>
                                <div class="media mt-4">
                                    <img src="img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                        style="width: 45px;">
                                    <div class="media-body">
                                        <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                        <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum
                                            et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                            Gubergren clita aliquyam consetetur, at tempor amet ipsum diam tempor at
                                            sit.</p>
                                        <button class="btn btn-sm btn-secondary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comment Form -->
                    <div class="bg-secondary rounded p-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Leave a comment</h3>
                        <form>
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control border-0" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control border-0" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control border-0" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control border-0"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave Comment" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">
                            </div>
                        </form>
                    </div>

                    

            </div>

                <div class="col-lg-4 mt-5 mt-lg-0">

                    <!-- Liên quan khoá học -->
                    <div class="module">
                        <h3 class="modtitle">
                            <span>Nhóm liên quan </span>
                        </h3>
                        <ul class="list-group">
                            
                            <?php
                            $i =0;
                            foreach($hienthikh as $kq){
                                if($i<4){
                                    echo '
                                    <li class="list-group-item pt-4" ><a href="index.php?act=chitietkhoahoc&courseID='.$kq['courseID'].'">'.$kq['coursename'].'</a></li>
                                ';
                                }
                                $i++;
                                
                            }
                            
                            ?>
                                
                        </ul>
                    </div>

                    <!-- Bài viết -->
                    <div class="mb-5 py-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Bài viết liên quan</h3>
                            <?php
                                $i=0;
                                foreach($hienthibv as $bv){
                                    if($i<5){
                                        echo '
                                        <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                                            <img class="img-fluid rounded" src="../DACN-WEB/admin/assets/img/'.$bv['img'].'" alt="" style="max-width: 80px; max-height: 80px;">
                                            <div class="pl-3">
                                                <h6 class="m-1">'.$bv['topic'].'</h6>
                                                <small>'.$bv['date'].'</small>
                                            </div>
                                        </a>
                    
                                        ';
                                    }
                                }
                            ?>
                           
                    </div>              
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->

