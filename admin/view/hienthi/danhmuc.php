<!-- Bảng danh mục -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Danh mục</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
          <li class="breadcrumb-item">Quản lý</li>
          <li class="breadcrumb-item active">Danh mục</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bảng dữ liệu</h5>

              <h3 align="center">Danh sách danh mục</h3>
              <table class="search-form"  align="center" cellpadding= "10">
                <tr>
                  <td>
                    <form action="index.php?act=danhmuc" method="post">
                      <input type="text" name="tendm" name="uutien" placeholder="Nhập từ khoá cần tìm" value="">
                      <input type="submit" name="search" value="Tìm">
                      <input type="button"  value="Tất cả" onclick="window.location.href='index.php?act=danhmuc'">
                    </form>
                  </td>
                </tr>
              </table>

              <!-- Table with stripped rows -->

              <table class="table">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>
                      Tên danh mục
                    </th>
                    <th>Ưu tiên</th>
                    <th>Hiển thị</th>
                    <th>Hành động</th>
                  </tr>
                </thead>

                <?php 

                if(isset($kqdm) && (count($kqdm)> 0)){
                  $i= 1;
                  foreach ($kqdm as $dm){
                    echo '<tbody>
                              <tr>
                                <td>'.$i.'</td>
                                <td>'.$dm['tendm'].'</td>
                                <td>'.$dm['uutien'].'</td>
                                <td>'.$dm['hienthi'].'</td>
                                <td><a href="#">Sửa</a> | <a href="#">Xoá</a></td>
                                
                              </tr>
                 
                          </tbody>';
                    $i++;
                  }
                }else{
                  echo '<tr><td colspan="5">Không tìm thấy kết quả</td></tr>';  
                }
                
                ?>
                
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
