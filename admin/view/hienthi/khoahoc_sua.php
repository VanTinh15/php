<?php


?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Khoá học</h1>
<?php 
// var_dump($khone);
?>

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Quản lý</a></li>
      <li class="breadcrumb-item">Khoá học</li>
      <li class="breadcrumb-item active">Cập nhật</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Cập nhật dữ liệu</h5>
<!-- -------------------------Thêm mới----------------------------------->

          <form action="index.php?act=khoahoc_sua" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="courseID" value="<?=$khone[0]['courseID']?>">
            <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Tên khoá học</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="coursename" value="<?=$khone[0]['coursename']?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="" name="description"  style="max-width: auto">
                        <?=trim($khone[0]['description'])?>              
                    </textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Người hướng dẫn</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="" name="instructor" value="<?=$khone[0]['instructor']?>">
                </div>
            </div>

            <div class="row mb-3" >
                <label for="formFile" class="col-sm-2 col-form-label">Hình ảnh</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="" name="img"></input>
                    <br>
                    <input src="../admin/assets/img/<?=$khone[0]['img']?>" style="max-width:400px;" class="form-control" type="image" id="" name="img">

                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-10">
                    <td><input type="submit" class="btn btn-primary" name="suakhoahoc" value ="Lưu"></input></td>
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



