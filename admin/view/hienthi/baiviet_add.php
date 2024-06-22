<?php


?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Bài viết</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Quản lý</a></li>
      <li class="breadcrumb-item">Bài viết</li>
      <li class="breadcrumb-item active">Thêm mới</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Bảng dữ liệu</h5>


          <form action="index.php?act=baiviet_add" method="POST" enctype="multipart/form-data">

          <div class="row mb-3">
                <label for="ten_khoa_hoc" class="col-sm-2 col-form-label">Tên khoá học</label>
                <div class="col-sm-10">
                <select class="form-control" id="" name="courseID">
                    <option value="0">Chọn tên khoá học</option>
                    <?php
                      if(isset($kqkh)){
                        foreach ($kqkh as $ds){
                          echo '<option value="'.$ds['courseID'].'">'.$ds['coursename'].'</option>';
                        }
                      }

                    ?>
                   
                </select>
                    
                </div>
            </div>

            <div class="row mb-3">
                <label for="ten_khoa_hoc" class="col-sm-2 col-form-label">Tên người dùng</label>
                <div class="col-sm-10">
                <select class="form-control" id="" name="userID">
                    <option value="0">Chọn tên người dùng</option>
                    <?php
                      if(isset($kqtk)){
                        foreach ($kqtk as $tk){
                          echo '<option value="'.$tk['userID'].'">'.$tk['username'].'</option>';
                        }
                      }

                    ?>
                   
                </select>
                    
                </div>
            </div>

            <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Tiêu đề</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="topic">
                </div>
            </div>

            <div class="row mb-3" >
                <label for="formFile" class="col-sm-2 col-form-label">Hình ảnh</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="" name="img">
                </div>
            </div>

            <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Nội dung</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="" row="5" name="content"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputdate" class="col-sm-2 col-form-label">Ngày đăng</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="" name="date">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-10">
                    <td><input type="submit" class="btn btn-primary" name="thembaiviet" value ="Thêm mới"></input></td>
                </div>
            </div>
          </form>
  
        </div>
      </div>

    </div>
  </div>
</section>

</main>



