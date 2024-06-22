<!-- Bảng danh mục -->

<main id="main" class="main">

<div class="pagetitle">
  <h1>Tài liệu</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
      <li class="breadcrumb-item">Quản lý</li>
      <li class="breadcrumb-item active">Tài liệu</li>
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
<h3 align="center">Danh sách tài liệu</h3>
              <table class="search-form"  align="center" cellpadding= "10">
                <tr>
                  <td>
                    <form action="#" method="post">
                      <input type="text" name="title"  placeholder="Nhập từ khoá cần tìm" value="">
                    
                      <input type="submit" name="search" value="Tìm">
                      <input type="button"  value="Tất cả" onclick="window.location.href='index.php?act=tailieu'">
                    </form>
                  </td>
                </tr>
              </table>
            
  <!-- ----------------------------------------------------------------------------------------------- -->
          <table class=" table" cellpadding= "5">
            <thead>
              <tr>
                <th>STT</th>
                
                <th>Tiêu đề</th>
                <th>Mô tả</th>
                <th>File</th>
                <th>Tên khoá học</th>
                <th>Hành động</th>
                
              </tr>
            </thead>
            <?php
              //var_dump($kqdm);
            ?>
            <?php 

            if(isset($kqtl) && (count($kqtl)> 0)){
              $i= 1;
              foreach ($kqtl as $tl){
                
                echo '<tbody>
                          <tr>
                          <td>'.$i.'</td>
                          
                          <td>'.$tl['title'].'</td>             
                          <td>'.$tl['description'].'</td>
                          <td>'.$tl['file_url'].'</td>
                          <td>'.$tl['coursename'].'</td>

                          
                            <td>
                              <a href="index.php?act=tailieu_sua&documentID='.$tl['documentID'].'">Sửa</a> | 
                              <a href="index.php?act=tailieu_xoa&documentID='.$tl['documentID'].'" onclick="return confirmDelete('.$tl['documentID'].')">Xoá</a>
                            </td>
                            
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
          <!-- Table with stripped rows -->
          <form action="index.php?act=tailieu_add" method="POST" enctype="multipart/form-data">
                
                <td><input type="submit"  value="Thêm mới"></td>
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