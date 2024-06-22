
<?php
    foreach($kqbaiviet as $kq){

        echo '
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <img src="../DACN-WEB/admin/assets/img/'.$kq['img'].'" class="card-img-top" alt="error">
                            <div class="card-body">
                                <h1 class="card-title">'.$kq['topic'].'</h1>
                                <p class="card-text">'.$kq['content'].'</p>
                            </div>
                            <div class="card-footer text-muted">
                                <p>Ngày đăng: '.$kq['date'].'</p>';
        foreach($hienthitk as $tk){
            if($kq['userID'] == $tk['userID']){
                echo '<p>Người đăng: '.$tk['username'].'</p>';
            }
                
        }

        echo '</div>
                </div>
            </div>
        </div>
        </div>';                
                
    }
?>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Bình luận
                        </div>
                        <div class="card-body">
                            <form action="xulycomment.php" method="post">
                                <div class="form-group">
                                    <label for="comment">Nhập bình luận của bạn:</label>
                                    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Gửi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>





















