
<main id="main" class="main">

<div class="pagetitle">
  <h1>Trang Thống Kê</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php?act=thongke">Thống Kê</a></li>
      <!-- <li class="breadcrumb-item active">Trang quản trị</li> -->
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Tổng số khoá học</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="fas fa-chalkboard-teacher"></i>

                </div>
                <div class="ps-3">
                  <?php
                     echo '<h6>' . $tongkh[0]['tong_course'] . '</h6>';
                  ?>
                  
                  <span class="text-success small pt-1 fw-bold">Khoá học</span> <span class="text-muted small pt-2 ps-1"></span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End tổng số khoá học -->

        <!-- Tổng số tài liệu -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title">Tổng số tài liệu</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="fas fa-file-alt"></i>
                </div>
                <div class="ps-3">
                
                <?php
                     echo '<h6>' . $tongtl[0]['tong_document'] . '</h6>';
                  ?>

                  <span class="text-success small pt-1 fw-bold">Tài liệu</span> 

                </div>
              </div>
            </div>

          </div>
        </div><!--end Tổng số tài liệu -->

        <!-- Tổng bài viết -->
        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card">

            <div class="card-body">
              <h5 class="card-title">Tổng số bài viết</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="fas fa-newspaper"></i>
                </div>
                <div class="ps-3">
                <?php
                     echo '<h6>' . $tongbv[0]['tong_post'] . '</h6>';
                  ?>
                  <span class="text-danger small pt-1 fw-bold">Bài viết</span>

                </div>
              </div>
            
            </div>
          </div>

        </div><!-- End Customers Card -->

       

        <!-- Tài liệu được tải lên gần đây -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <h5 class="card-title">Tài liệu gần đây</h5>

              <table class="table table-borderless ">
                <thead>
                  <tr>
                    
                    <th scope="col">Mã</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">File</th>
                    <th scope="col">Lượt xem</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php
                   $i=0;
                   foreach($hienthitl as $tl){
                       if($i<6){
                        echo '<tr>
                                <th scope="row"><a href="#">'.$tl['documentID'].'</a></th>
                                <td>'.$tl['title'].'</td>
                                <td><a href="#" class="text-primary">'.$tl['description'].' </a></td>
                                <td>
                                  <a href="../admin/uploads/'.$tl['file_url'].'" >'.$tl['file_url'].'</a>
                                </td>
                                <td><span class="badge bg-success">'.$tl['view_document'].'</span></td>
                              </tr>
                        
                              ';
                       }
                       $i++;
                    }
                  
                  ?>

                </tbody>
              </table>
                  <section class="call-to-action">
                    <div class="container">          
                      <a href="index.php?act=tailieu" class="btn explore-now ">Xem thêm</a>
                    </div>
                  </section>
            </div>
                    
          </div>
        </div><!-- End Recent Sales -->

        <!-- khoá học gần đây -->
        <div class="col-12">
          <div class="card top-selling overflow-auto">


            <div class="card-body pb-0">
              <h5 class="card-title">Khoá học mới nhất </h5>

              <table class="table table-borderless">
                <thead>
                  <tr>  
                    <th spoce="col">STT</th>

                    <th spoce="col">Tên khoá học</th>
                    <th spoce="col">Mô tả</th>
                    <th spoce="col">Người hướng dẫn</th>
                    <th spoce="col">Hình ảnh</th>
                    <th spoce="col">Lượt xem</th>
                  </tr>
                </thead>
                <tbody>
                    
                  
                   
                    <?php
                      $i=0;
                      foreach($hienthikh as $kh){
                          if($i<6){
                            echo '<tr>
                                    <td class="fw-bold">'.$kh['courseID'].'</td>
                                    <td><a href="#" class="text-primary fw-bold">'.$kh['coursename'].'</a></td>
                                    <td>'.$kh['description'].'</td>
                                    <td>'.$kh['instructor'].'</td>
                                    <td><img src="../admin/assets/img/'.$kh['img'].'" alt="'.$kh['img'].'" style="width: 50px; height:35px"></td>
                                    <td>'.$kh['view_course'].'</td>
                                  </tr>
                            ';
                          }
                          $i++;                         
                      }
                    ?>
                </tbody>
              </table>
                <section class="call-to-action">
                  <div class="container">          
                    <a href="index.php?act=khoahoc" class="btn explore-now ">Xem thêm</a>
                  </div>
                </section>
            </div>

          </div>
        </div><!-- End bài viết -->

      </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">
      
      <!--Bài viết gần đây -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Chọn</h6>
            </li>

            <li><a class="dropdown-item" href="#">Hôm nay</a></li>
            <li><a class="dropdown-item" href="#">Tháng nay</a></li>
            <li><a class="dropdown-item" href="#">Năm nay</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">Bài viết mới nhất <span>| Hôm nay</span></h5>

          <div class="news">
            <?php 
              $i=0;
              foreach($hienthibv as $bv){
                  if($i<6){
                    echo '<div class="post-item clearfix">
                            <img src="../admin/assets/img/'.$bv['img'].'" alt="error">
                            <h4><a href="#">'.$bv['topic'].'</a></h4>
                            <p>'.$bv['content'].'</p>
                          </div>
                        ';
                  }
                  $i++;
                }

            ?>
            
            <a href="index.php?act=baiviet" class=" ">Xem thêm</a>
            

          </div><!-- End sidebar recent posts-->

        </div>
      </div><!-- End bài viết -->

    </div><!-- End Right side columns -->

  </div>
</section>

</main><!-- End #main -->
 <!-- css của khám phá ngay -->
 <style>
                    .btn.explore-now {
                background-color: #4CAF50; /* Màu nền của nút */
                color: white; /* Màu chữ */
                padding: 12px 24px; /* Kích thước của nút */
                border: none; /* Bỏ viền */
                border-radius: 4px; /* Bo tròn góc */
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease; /* Hiệu ứng khi hover */
            }
            .btn.explore-now:hover {
                background-color: #45a049; /* Màu nền khi hover */
            }
            /* Thêm hiệu ứng shadow */
            .btn.explore-now {
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            }
            .btn.explore-now:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
          </style>