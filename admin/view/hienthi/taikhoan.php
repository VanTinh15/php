<!-- Bảng danh mục -->

<main id="main" class="main">

<div class="pagetitle">
  <h1>Tài khoản</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
      <li class="breadcrumb-item">Quản lý</li>
      <li class="breadcrumb-item active">Tài khoản</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Bảng dữ liệu</h5>

          <!-- -------------------------Thêm mới----------------------------------->
         
          <h3 align="center">Danh sách tài khoản</h3>
              <table class="search-form"  align="center" cellpadding= "10">
                <tr>
                  <td>
                    <form action="#" method="post">
                      <input type="text" name="username"  placeholder="Nhập từ khoá cần tìm" value="">
                    
                      <input type="submit" name="search" value="Tìm">
                      <input type="button"  value="Tất cả" onclick="window.location.href='index.php?act=taikhoan'">
                    </form>
                  </td>
                </tr>
              </table>
  <!-- ----------------------------------------------------------------------------------------------- -->

          <table class=" table" cellpadding= "5">
            <thead>
              <tr>
                <th>STT</th>
                
                <th>Tên người dùng</th>
                <th>Tên đăng nhập</th>
                <th>Mật khẩu</th>
                <th>Email</th>
                <th>Hình ảnh</th>
                <th>Loại</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <?php
              //var_dump($kqtk);
            ?>
            <?php 

            if(isset($kqtk) && (count($kqtk)> 0)){
              $i= 1;
              foreach ($kqtk as $tk){
                echo '<tbody>
                          <tr>
                          <td>'.$i.'</td>
                          
                          <td>'.$tk['name'].'</td>
                          <td>'.$tk['username'].'</td>
                          <td>'.$tk['password'].'</td>
                          <td>'.$tk['email'].'</td>

                          <td>
                            <img src="../admin/assets/img/'.$tk['image'].'" alt="'.$tk['image'].'" style="max-width: 200px;">
                          </td>
                          <td>'.$tk['account_type'].'</td>


                            <td><a href="index.php?act=taikhoan_sua&userID='.$tk['userID'].'">Sửa</a> | <a href="index.php?act=taikhoan_xoa&userID='.$tk['userID'].'"  onclick="return confirmDelete('.$tk['userID'].')">Xoá</a></td>
                            
                          </tr>
             
                      </tbody>';
                $i++;
              }
            }else{
              echo '<tr><td colspan="12">Không tìm thấy kết quả</td></tr>';
            }
            
            ?>
            
          </table>
          <!-- End Table with stripped rows -->
            <!-- -------------------------Thêm mới----------------------------------->
         
          <form action="index.php?act=taikhoan_add" method="POST" enctype="multipart/form-data">
                
                <td><input type="submit" value="Thêm mới"></td>
            </form>
  <!-- ----------------------------------------------------------------------------------------------- -->
        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
<script>
  // Function to show confirmation dialog when delete button is clicked
  function confirmDelete(postID) {
    // Display confirmation dialog
    var result = confirm("Bạn có chắc chắn muốn xoá bài viết này?");
    // If user confirms, redirect to delete action
    if (result) {
      window.location.href = 'index.php?act=baiviet_xoa&postID=' + postID;
    } else {
      // If user cancels, do nothing
      return false;
    }
  }
</script>