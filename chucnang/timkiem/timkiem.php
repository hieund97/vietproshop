<script>
    function searchFocus(){
        if(document.sform.stext.value=='Tìm kiếm sản phẩm...'){
            document.sform.stext.value='';
        }
    }
    
    function searchBlur(){
        if(document.sform.stext.value==''){
            document.sform.stext.value='Tìm kiếm sản phẩm...';
        }
    }
</script>

<div id="top-middle" class="col-lg-5 col-md-7 col-sm-6">
                            <div id="search">
                                <form id="search-box" method="post" name="sform" action="index.php?page_layout=danhsachtimkiem" >
                                    <input onfocus="searchFocus();" onblur="searchBlur();"  name="stext" type="text" placeholder="Nhập mã hoặc tên sản phẩm...">
                                    <button type="submit" class=" btn-search btn btn-link" >
                                    <span class="fa fa-search" aria-hidden="true"></span>
                                    </button>
                                </form>
                            </div>