<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head> 
<?php include('head_link.php') ?>
</head>
<body style="background: #f5e9d9;">
        <div class="wrapper">
    <header>
        <?php include('header_menu.php') ?> 
    </header>


        <section class="section">
            <?php include('slide.php') ?>
        </section>
        <section class="section">
            <div class="container">
                <div id="Newproduct"><?php include'new_product.php'; ?></div> 
                <div id="Categoryproduct"><?php include'galley1.php' ?></div> 
                <div id="Featuredproducts"><?php include'feature_pro.php' ?></div> 
                <div ><?php include'information_pro.php' ?></div> 
            </div>
        </section>
<!-- The scroll to top feature -->
    
        <div class="scroll-top-wrapper ">
            <span class="scroll-top-inner">
                <i class="fa fa-2x fa-arrow-circle-up"></i>
            </span>
        </div>

        <footer>
          <?php include ('footer.php')  ?>  
        </footer>

    </div> 
    <div class="float-ck" style="left: 0px" >

        <div id="hide_float_left">

            <a href="javascript:hide_float_left()">Tắt Quảng Cáo [X]</a>
        </div>

        <div id="float_content_left">
            <!-- Start quang cao-->
            <a href="../image/qc11.jpg" taget="_blank" ><img alt="Quảng cáo trên windows2it.com" src="../image/qc11.jpg"/></a>
            <!-- End quang cao -->
        </div>

    </div>

</body>
    <script>  function showhide(id) {
        var e = document.getElementById(id);
        e.style.display = (e.style.display == 'block') ? 'none' : 'block';
     }</script>


    <script>
        $( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});
    </script>
    <script type="text/javascript" src="./javascript/javascript.js"></script>
    <script type="text/javascript" src="./javascript/quangcao.js"></script>
</html>