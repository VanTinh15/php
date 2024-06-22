
    <br>
    <div class="container" style="background-color: #e3e3e3; ">
    <?php
    foreach ($kqtailieu as $kq){
        echo '
        <br>
        <div>
        <a href="index.php?act=tailieu" style="text-decoration: none;">Tài liệu</a>
            <span style="font-weight: bold; margin-right: 2px;">&gt;&gt;</span> 
            '.$kq['title'].'
        </div>
        <br>
        ';
    }
    ?>
            
    <div class="container-fluid p">
        <div class="container py-2" style="background-color: white; ">
            <div class="row">
                <section id="sidebar-main" class="col-md-12">

                    <div id="content">
                        <div>
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1347515798567153" crossorigin="anonymous"></script>
                                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1347515798567153" data-ad-slot="9029315810" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        </div>


                        <div class="row product-container">

                            <?php

                            foreach ($kqtailieu as $kq){
                                foreach ($hienthikh as $kh){
                                    if($kq['courseID'] == $kh['courseID']){
                                        echo '
                                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 image-container">
                                                <div class="thumbnails thumbs-preview"></div> 
                                                <div class="thumbnail image img-detail col-lg-10 col-md-12">
                                                    <a href="../dacn-web/admin/assets/img/'.$kh['img'].'" title="'.$kq['title'].'" class="imagezoom" style="width: 302px; height: 185px; object-fit: block;" >
                                                        <img src="../dacn-web/admin/assets/img/'.$kh['img'].'" title="'.$kq['title'].'" alt="'.$kq['title'].'" id="image" data-zoom-image="../DACN-WEB/admin/assets/img/'.$kh['img'].'" class="product-image-zoom img-responsive"style="width: 302px; height: 185px; object-fit: block;"/>
                                                    </a>
                                                </div>
                                            </div>
                                            ';
                                    }

                                }
                            echo '
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 product-view" style="padding:10px;">
                                    <h1 class="title-product">'.$kq['title'].'</h1>
                                    <div class="description">
                                        <div id="tabs" class="htabs heighlight">
                                            <ul class="nav clearfix">
                                                <li class="active"><a href="#" data-toggle="tab">Mô tả</a></li>
                                            </ul>
                                        </div>

                                        <p>'.$kq['description'].'</p>
                                        <p>Tên tài liệu: ' . $kq['file_url'] . '</p>
                                    </div>

                                <div class="product-extra">
                            <!-- Thêm thông tin sản phẩm khác -->

                            <p>
                                
                                <a href="#" class="btn" style="background-color: #32942f;color:#ffffff;" onclick="confirmDownload(\'' . $kq['file_url'] . '\')">
                                <i class="fa fa-download" style="margin-left:10px;color:white" ></i>&nbsp;&nbsp;&nbsp;&nbsp;Tải xuống&nbsp;&nbsp;&nbsp;&nbsp;</a>

                                <a class="btn btn-square mx-1" href="../DACN-WEB/admin/uploads/'.$kq['file_url'].'" alt="error"></a>
                                <a href="../DACN-WEB/admin/uploads/'.$kq['file_url'].'" class="btn" style="background-color: #32942f;color:#ffffff;" >
                                <i class="fas fa-eye"></i>&nbsp;&nbsp;&nbsp;&nbspXem tài liệu&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                
                            </p> 
                                                
                            </div>
                            </div>
                            ';
                            }

                            ?>
                            </div>
                            <!-- Thông báo tải xuống -->
                            <script>
                                function confirmDownload(fileUrl) {
                                    var userConfirmed = confirm("Bạn có muốn tải xuống không?");
                                    if (userConfirmed) {
                                        
                                        var a = document.createElement('a');
                                        a.href = "../DACN-WEB/admin/uploads/" + fileUrl;
                                        a.download = fileUrl;  // Tên tệp để tải xuống
                                        document.body.appendChild(a);
                                        a.click();
                                        document.body.removeChild(a);
                                        a.exit;
                                    }
                                
                                }
                               
                            
                            </script>

                                                        
                    <!-- NHóm liên quan -->

                    <div class="module">
                        <h3 class="modtitle">
                            <span>Nhóm liên quan </span>
                        </h3>
                        <ul class="list-group">
                            <?php
                            foreach($hienthikh as $kq){
                                echo '
                                    <li class="list-group-item pt-4" ><a href="index.php?act=chitietkhoahoc&courseID='.$kq['courseID'].'">'.$kq['coursename'].'</a></li>
                                ';
                            }
                            
                            ?>
                                
                        </ul>
                    </div>

    <!-- END / WIDGET CATEGORIES -->
    </div>
                                </div>
                            
                            
                        </section>

                    </div>   
                </div>
            </div>
        </div>
                
