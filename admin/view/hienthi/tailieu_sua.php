<?php


?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Tài liệu</h1>
<?php 
// var_dump($khone);
?>

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Quản lý</a></li>
      <li class="breadcrumb-item">Tài liệu</li>
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
          <?php 
          //var_dump($tlone);?>
<!-- -------------------------Thêm mới----------------------------------->

          <form action="index.php?act=tailieu_sua" method="POST" enctype="multipart/form-data">

          
            <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Mã</label>
                <div class="col-sm-10">
                <input type="number" name="documentID" value="<?=$tlone[0]['documentID']?>">
                </div>
            </div>


            <div class="row mb-3">
                <label for="tieu_de" class="col-sm-2 col-form-label">Tiêu Đề</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="" row="3" name="title" ><?=trim($tlone[0]['title'])?></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="mo_ta" class="col-sm-2 col-form-label">Mô Tả</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="" row="5" name="description" ><?=trim($tlone[0]['description'])?></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="formFile" class="col-sm-2 col-form-label">File Upload</label>
                <div class="col-sm-10">
                    <input  type="file" id="" name="file_url" value="" >

                <?php if (!empty($tlone[0]['file_url'])): ?>

                <p>File hiện tại: <a href="../admin/uploads/<?=$tlone[0]['file_url']?>" target="_blank"><?=basename($tlone[0]['file_url'])?></a></p>

                <?php endif; ?>  
                </input>
                </div>
            </div>

            <div class="row mb-3">
                <label for="ten_khoa_hoc" class="col-sm-2 col-form-label">Tên khoá học</label>
                <div class="col-sm-10">
                <select class="form-control" id="" name="courseID" >
                    <option value="0">Chọn tên khoá học</option>
                    <?php
                        $idcourse = $tlone[0]['courseID'];
                        if(isset($kqkh)){
                            foreach ($kqkh as $ds){
                                if($ds['courseID'] == $idcourse){
                                    echo '<option value="'.$ds['courseID'].'" selected>'.$ds['coursename'].'</option>';
                                }else{
                                    echo '<option value="'.$ds['courseID'].'" >'.$ds['coursename'].'</option>';
                                }
                            }
                            
                      }

                    ?>
                    <!-- Thêm các tên khoá học khác vào đây -->
                </select>
                    
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-10">
                    <td><input type="submit" class="btn btn-primary" name="suatailieu" value ="Lưu"></input></td>
                    
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



