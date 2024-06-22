<!-- Bảng danh mục -->

<main id="main" class="main">

<div class="pagetitle">
  <h1>Khoá học</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
      <li class="breadcrumb-item">Quản lý</li>
      <li class="breadcrumb-item active">Khoá học</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Bảng dữ liệu</h5>

          <!-- -------------------------Tìm kiếm----------------------------------->
          <h3 align="center">Danh sách khoá học</h3>
              <table class="search-form"  align="center" cellpadding= "10">
                <tr>
                  <td>
                    <form action="#" method="post">
                      <input type="text" name="coursename"  placeholder="Nhập từ khoá cần tìm" value="">
                    
                      <input type="submit" name="search" value="Tìm">
                      <input type="button"  value="Tất cả" onclick="window.location.href='index.php?act=khoahoc'">
                    </form>
                  </td>
                </tr>
              </table>
          
  <!-- ----------------------------------------------------------------------------------------------- -->

          <table class=" table" cellpadding= "5">
            <thead>
              <tr>
                <th spoce="col">STT</th>
                
                <th spoce="col">Tên khoá học</th>
                <th spoce="col">Mô tả</th>
                <th spoce="col">Người hướng dẫn</th>
                <th spoce="col">Hình ảnh</th>
                <th spoce="col">Hành động</th>
              </tr>
            </thead>
            <?php
              //var_dump($kqdm);
            ?>
            <?php 

            if(isset($kqkh) && (count($kqkh)> 0)){
              $i= 1;
              foreach ($kqkh as $kh){
                echo '<tbody>
                          <tr>
                          <td>'.$i.'</td>
                          <td>'.$kh['coursename'].'</td>
                          <td>'.$kh['description'].'</td>
                          <td>'.$kh['instructor'].'</td>
                          
                          <td>
                            <img src="../admin/assets/img/'.$kh['img'].'" alt="'.$kh['img'].'" style="width: 200px; height:150px">
                          </td>


                            <td><a href="index.php?act=khoahoc_sua&courseID='.$kh['courseID'].'">Sửa</a> | <a href="index.php?act=khoahoc_xoa&courseID='.$kh['courseID'].'" onclick="return confirmDelete('.$kh['courseID'].')">Xoá</a></td>
                            
                          </tr>
             
                      </tbody>';
                $i++;
              }
            }else{
              echo '<tr >
                <td colspan="12">Không tìm thấy kết quả</td>
              </tr>';
              
            }
            
            ?>
            
          </table>
          <!-- -------------------------Thêm mới----------------------------------->
          <form action="index.php?act=khoahoc_add" method="POST" enctype="multipart/form-data">
                
                <td><input type="submit" value="Thêm mới"></td>
            </form>
          
  <!-- ----------------------------------------------------------------------------------------------- -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<!-- <style>
  .description-cell {
    white-space: pre-wrap; /* Cho phép xuống dòng */
    max-width: 300px; /* Đặt chiều rộng tối đa cho ô để điều khiển việc xuống dòng */
    word-wrap: break-word; /* Bắt buộc xuống dòng nếu từ quá dài */
  }
</style> -->

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