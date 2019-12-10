<?php
if(isset($_POST['submit'])){
    $ten_qc=$_POST['tennqc'];
    
    if($_FILES['anh_qc']['name']==''){
        $error_anh_sp='<span style="color: red;">Ảnh không hợp lệ</span>';
    }
    else{
        $anh_qc=$_FILES['anh_qc']['name'];
        $tmp_qc=$_FILES['anh_qc']['tmp_name'];
    }
    
    if(isset($ten_qc) && isset($anh_qc)){
        move_uploaded_file($tmp_qc, 'anh/'.$anh_qc);
        $sql="INSERT INTO quangcao(tennqc,anh_qc) VALUES('$ten_qc','$anh_qc') ";
        $query= mysqli_query($conn, $sql);
        header('location: quantri.php?page_layout=danhsachqc');
    }
}


?>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"></li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thêm mới Quảng Cáo</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm mới Quảng Cáo</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label>Tên Nhà Quảng Cáo</label>
                            <input name="tennqc" class="form-control" type="text" required="">
                        </div>
                        
                        <div class="form-group">
                            <label>Ảnh Quảng Cáo</label><?php if(isset($error_anh_qc)){echo $error_anh_qc;} ?>                         
                            <input type="file" name="anh_qc">
                        </div>																					
                        <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>

                </div>
                </form>
            </div>
            
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
