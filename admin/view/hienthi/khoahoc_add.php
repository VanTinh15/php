<?php


?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Khoá học</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Quản lý</a></li>
      <li class="breadcrumb-item">Khoá học</li>
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
<!-- -------------------------Thêm mới----------------------------------->

          <form action="index.php?act=khoahoc_add" method="POST" enctype="multipart/form-data">

            <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Tên khoá học</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="coursename">
                </div>
            </div>

            <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="" name="description"  rows="5" style="max-width: 500px"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Người hướng dẫn</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="instructor">
                </div>
            </div>

            <div class="row mb-3" >
                <label for="formFile" class="col-sm-2 col-form-label">Hình ảnh</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="" name="img">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-10">
                    <td><input type="submit" class="btn btn-primary" name="themkhoahoc" value ="Thêm mới"></input></td>
                </div>
            </div>
          </form>
  <!-- ----------------------------------------------------------------------------------------------- -->
        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->



