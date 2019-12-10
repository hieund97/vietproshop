<?php
$id_sp=$_GET['id_sp'];
$sql="SELECT * FROM sanpham WHERE id_sp=$id_sp";
$query= mysqli_query($conn, $sql);
$row= mysqli_fetch_array($query);
?>


<div id="product">
    <div id="prd-thumb" class="col-md-6 col-sm-12 col-xs-12 text-center">
        <img width="160px" src="quantri/anh/<?php echo $row['anh_sp']; ?>">
    </div>
    <div id="prd-intro" class="col-md-6 col-sm-12 col-xs-12">
        <h3><?php echo $row['ten_sp']; ?></h3>
        <p id="prd-price"><span class="sl">Giá sản phẩm:</span> <span class="sr"><?php echo $row['gia_sp']; ?> VNĐ</span></p>
        <p><span class="sl">Bảo hành:</span>    <?php echo $row['bao_hanh']; ?></p>
        <p><span class="sl">Đi kèm:</span>  <?php echo $row['phu_kien']; ?></p>
        <p><span class="sl">Tình trạng:</span>  <?php echo $row['tinh_trang']; ?></p>
        <p><span class="sl">Khuyến Mại:</span>  <?php echo $row['khuyen_mai']; ?></p>
        <p><span class="sl">Còn hàng:</span>    <?php echo $row['trang_thai']; ?></p>
        <a href="chucnang/giohang/themhang.php?id_sp=<?php echo $row['id_sp']; ?>"><button type="button" class=btn btn-danger">đặt mua</button></a>
    </div>
    <div id="prd-details" class="col-md-12 col-sm-12 col-xs-12 text-justify">
        <p>
            <?php echo $row['chi_tiet_sp']; ?>
        </p>
    </div>
</div>



<div id="comment" class="col-md-8 col-sm-9 col-xs-12">
  
  <div class="cmtfacebook">
  <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="500px" data-numposts="5"></div>
  
  </div>
</div>

<?php
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
else{
    $page=1;
}

$rowsPerPage=3;
$perRow=$page*$rowsPerPage-$rowsPerPage;

$sqlBl="SELECT * FROM blsanpham WHERE id_sp=$id_sp ORDER BY id_bl ASC LIMIT $perRow,$rowsPerPage";
$queryBl= mysqli_query($conn, $sqlBl);

//tong so ban ghi (tong so binh luan cua san pham do)
?>
