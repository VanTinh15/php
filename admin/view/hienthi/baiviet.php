<!-- Bảng danh mục -->

<main id="main" class="main">

<div class="pagetitle">
  <h1>Bài viết</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
      <li class="breadcrumb-item">Quản lý</li>
      <li class="breadcrumb-item active">Bài viết</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body" >
              <h5 class="card-title">Bảng dữ liệu</h5>

<!-- -----------------------------Tìm kiếm---------------------------------------------------- -->
              <h3 align="center">Danh sách bài viết</h3>
              <table class="search-form"  align="center" cellpadding= "10">
                <tr>
                  <td>
                    <form action="#" method="post">
                      <input type="text" name="topic" name="topic" placeholder="Nhập từ khoá cần tìm" value="">
                    
                      <input type="submit" name="search" value="Tìm">
                      <input type="button"  value="Tất cả" onclick="window.location.href='index.php?act=baiviet'">
                    </form>
                  </td>
                </tr>
              </table>
  <!-- ----------------------------------------------------------------------------------------------- -->

          <table class="table" cellpadding= "5">
            <thead>
              <tr>
                <th spoce="col">STT</th>
                <th spoce="col">
                  Tên tài khoản
                </th>
                <th spoce="col">Tên khoá học</th>
                <th spoce="col">Tiêu đề</th>
                <th spoce="col">Hình ảnh</th>
                <th spoce="col">Nội dung</th>
                <th spoce="col">Ngày</th>
                <th spoce="col">Hành động</th>
              </tr>
            </thead>
            <?php
              //var_dump($kqdm);
            ?>
            <?php 

            if(isset($kqbaiviet) && (count($kqbaiviet)> 0)){
              $i= 1;
              foreach ($kqbaiviet as $bv){
                echo '<tbody>
                          <tr>
                            <td>'.$i.'</td>
                            <td>'.$bv['username'].'</td>
                            <td>'.$bv['coursename'].'</td>
                            <td>'.$bv['topic'].'</td>

                            <td>
                              <img src="../admin/assets/img/'.$bv['img'].'" alt="'.$bv['img'].'" style="width: 200px; height:150px">
                            </td>

                            <td>'.$bv['content'].'</td>
                            <td>'.$bv['date'].'</td>


                            <td><a href="index.php?act=baiviet_sua&postID='.$bv['postID'].'">Sửa</a> | <a href="index.php?act=baiviet_xoa&postID='.$bv['postID'].'" onclick="return confirmDelete('.$bv['postID'].')">Xoá</a></td>
                            
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
           <form action="index.php?act=baiviet_add" method="POST" enctype="multipart/form-data">
                
                <td><input type="submit" value="Thêm mới"></td>
            </form>

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
