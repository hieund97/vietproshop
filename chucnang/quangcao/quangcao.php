<?php
ob_start();

include_once './cauhinh/ketnoi.php';
$sql="SELECT * FROM quangcao";
$query= mysqli_query($conn, $sql);

?>
<?php
while($row= mysqli_fetch_array($query)){
?>
<div id="banner-l">
    <!-- <h2 class="h2-bar">đối tác</h2> -->
    <a href="#">
        <img class="img-thumbnail" src="quantri/anh/<?php echo $row['anh_qc']; ?>">
    </a>
</div>
<?php
}
?>