<?php


?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Tài khoản</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Quản lý</a></li>
      <li class="breadcrumb-item">Tài khoản</li>
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

          <form action="index.php?act=taikhoan_sua" method="POST" enctype="multipart/form-data">

          
          <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Mã</label>
                <div class="col-sm-10">
                <input type="number" name="userID"  value="<?=$tkone[0]['userID']?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Tên người dùng</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="name" value="<?=$tkone[0]['name']?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Tên đăng nhập</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="username"value="<?=$tkone[0]['username']?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Mât khẩu</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="" name="password" value="<?=$tkone[0]['password']?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="" name="email" value="<?=$tkone[0]['email']?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="formFile" class="col-sm-2 col-form-label">Hình ảnh</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="" name="image">
                    <?php if (!empty($tkone[0]['image'])): ?>
                    
                    <p>Hình ảnh hiện tại:</p>
                    <img src="../admin/assets/img/<?=$tkone[0]['image']?>" alt="" style="max-width: 500px; height: 250px;">
                    <?php endif; ?>
                </div>
            </div>

            <div class="row mb-3">
                <label for="number" class="col-sm-2 col-form-label">Loại tài khoản</label>
                <div class="col-sm-10">
                    <input class="form-control" type="account" id="" name="account_type" value="<?=$tkone[0]['account_type']?>">
                    <p> Mô tả : 1 là tài khoản quản trị, 0 là tài khoản người dùng</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-10">
                    <td><input type="submit" class="btn btn-primary" name="suataikhoan" value ="Lưu"></input></td>
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

