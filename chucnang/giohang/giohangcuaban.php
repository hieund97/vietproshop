
<div id="cart">
            <a href="index.php?page_layout=giohang">
            <span aria-hidden="true" class="fa fa-shopping-cart" style="font-size: 30px;"></span>
            <?php if(isset($_SESSION['giohang'])){echo count($_SESSION['giohang']);} else{echo 0;} ?>
        </a>
</div>