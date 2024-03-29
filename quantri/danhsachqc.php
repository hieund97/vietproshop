<script>
    function xoaQuangcao(){
        var conf=confirm("Bạn có chắc chắn muốn xóa danh mục này hay không?");
        return conf;
    }
</script>
<?php
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
else{
    $page=1;
}
$rowsPerPage=5;
$perRow=$page*$rowsPerPage-$rowsPerPage;
$sql="SELECT * FROM quangcao ORDER BY id_qc ASC LIMIT $perRow,$rowsPerPage";
$query=mysqli_query($conn,$sql);
$totalRows=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM quangcao"));
$totalPages=ceil($totalRows/$rowsPerPage);

$listPage="";
for($i=1;$i<=$totalPages;$i++){
    if($page==$i){
        $listPage.='<li class="active"><a href="quantri.php?page_layout=danhsachqc&page='.$i.'">'.$i.'</a></li>';
    }
    
    else{
        $listPage.='<li><a href="quantri.php?page_layout=danhsachqc&page='.$i.'">'.$i.'</a></li>';
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
        <h1 class="page-header">Quản lý Quảng Cáo</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body" style="position: relative;">
                <a href="quantri.php?page_layout=themqc" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm Quảng Cáo</a>
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                            <th data-sortable="true">ID</th>
                            <th data-sortable="true">Tên Quảng Cáo</th>
                            <th data-sortable="true">Ảnh Quảng Cáo</th>
                            <th data-sortable="true">Sửa</th>
                            <th data-sortable="true">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row= mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td data-checkbox="true"><?php echo $row['id_qc']; ?></td>
                            <td data-checkbox="true"><a href="quantri.php?page_layout=suaqc&id_qc=<?php echo $row['id_qc']; ?>"><?php echo $row['tennqc']; ?></a></td>	
                            <td data-sortable="true">
                                <span class="thumb"><img width="200px" height="" src="anh/<?php echo $row['anh_qc']; ?>" /></span>

                            </td>				        
                            <td>
                                <a href="quantri.php?page_layout=suaqc&id_qc=<?php echo $row['id_qc']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>

                            <td>
                                <a onClick="return xoaQuangcao();" href="xoaqc.php?id_qc=<?php echo $row['id_qc']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
                            </td>
                        </tr>   
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <ul class="pagination" style="float: right;">
                    <?php
                        echo $listPage;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div><!--/.row-->	



