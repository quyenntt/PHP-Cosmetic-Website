<div class="container" id="home">
   
    <?php 
        require_once("server.php");
        error_reporting(2);
    ?>
        <div class="row">
            <div class="carousel slide" data-ride="carousel" id="myCarousel" style="margin-top: 168px;" >
                <ul class="carousel-indicators">
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ul>
                <div class="carousel-inner">
                    <?php 
                        require_once("server.php");
                        $sql1=" SELECT * FROM image";
                        $result = mysqli_query($db,$sql1);
                        if($result==true){
                            $i=0;
                            while($kq=mysqli_fetch_assoc($result))
                            {
                            $i++;
                    ?>
                    <div class="item" id="<?php if(isset($i)) echo "a".$i?>">
                        <img src="<?php echo $kq['imagge'];?>" class="img-responsive">
                    </div>
                <?php } }?>
                </div>
                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>     
        </div>
        <script type="text/javascript">
           var e = document.getElementById('a1');
           e.classList.add("active");
        </script>
</div>