
<br/><br/>
<div class="container">
<div class="col-xs-12">
				<div class="page-header">
				    <div class = "container">
				    	<div class="row">
						  <div class="col-md-3">
						  	<a href="#"><img src="assets/img/banner2.jpg" alt=""></a>
						  </div>
						  <div class="col-md-9">
						  	<h3><b>Wellcome! ยินดีต้อนรับ</b></h3>
							<h5><b>ลงชื่อเข้าใช้เรียบร้อยแล้ว</b></h5>
							<a class = 'btn btn-danger' href = "index.php/login/logout">Logout</a>
							<span>ยินดีต้อนรับคุณ &nbsp;&nbsp; </span><span style = "color : green;"><?php echo $this->session->userdata('logged_in')['fname'];?>!</span>
						  </div>
						</div>
					</div>
				</div>
                    <ul class="thumbnails" style = 'margin-buttom:100px!important'>
                    	<?php 
                    		foreach ($movie_detail as $key => $value) {
                    		if($key%4==0)
                        	{
                        		echo '<br/>';
                        	}
                    	?>
                    	<style>
                    		.jj{
                    			height: 250px!important;
    							width: 200px!important;
                    		}
                    	</style>
                        <li class="col-sm-3">
    						<div class="fff">
								<div class="thumbnail">
									<a href="index.php/booking/get_booking/<?php echo $value['id'];?>"><img class = 'jj' src="assets/img/<?php echo $value['pic'];?>" alt=""></a>
								</div>
								<div class="caption">
									<h4><?php echo $value['name_en'];?></h4>
									<h5><?php echo $value['name_th'];?></h5>
									<p>วันที่เข้าฉาย: <?php echo $value['date_show'];?></p>
									<a class="btn btn-mini" href="index.php/booking/get_booking/<?php echo $value['id'];?>">» จองที่นั่ง</a>
								</div>
                            </div>
                        </li>
                        <?php }?>
                    </ul>        
</div><!-- /.col-xs-12 -->          

</div><!-- /.container -->
<style>
/* Global */
 

img { max-width:100%; }

a {
    -webkit-transition: all 150ms ease;
	-moz-transition: all 150ms ease;
	-ms-transition: all 150ms ease;
	-o-transition: all 150ms ease;
	transition: all 150ms ease; 
	}
    a:hover {
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; /* IE 8 */
        filter: alpha(opacity=50); /* IE7 */
        opacity: 0.6;
        text-decoration: none;
    }



body{border-top:0;background:#c4e17f;background-image:-webkit-linear-gradient(left,#c4e17f,#c4e17f 12.5%,#f7fdca 12.5%,#f7fdca 25%,#fecf71 25%,#fecf71 37.5%,#f0776c 37.5%,#f0776c 50%,#db9dbe 50%,#db9dbe 62.5%,#c49cde 62.5%,#c49cde 75%,#669ae1 75%,#669ae1 87.5%,#62c2e4 87.5%,#62c2e4);background-image:-moz-linear-gradient(left,#c4e17f,#c4e17f 12.5%,#f7fdca 12.5%,#f7fdca 25%,#fecf71 25%,#fecf71 37.5%,#f0776c 37.5%,#f0776c 50%,#db9dbe 50%,#db9dbe 62.5%,#c49cde 62.5%,#c49cde 75%,#669ae1 75%,#669ae1 87.5%,#62c2e4 87.5%,#62c2e4);background-image:-o-linear-gradient(left,#c4e17f,#c4e17f 12.5%,#f7fdca 12.5%,#f7fdca 25%,#fecf71 25%,#fecf71 37.5%,#f0776c 37.5%,#f0776c 50%,#db9dbe 50%,#db9dbe 62.5%,#c49cde 62.5%,#c49cde 75%,#669ae1 75%,#669ae1 87.5%,#62c2e4 87.5%,#62c2e4);background-image:linear-gradient(to right,#c4e17f,#c4e17f 12.5%,#f7fdca 12.5%,#f7fdca 25%,#fecf71 25%,#fecf71 37.5%,#f0776c 37.5%,#f0776c 50%,#db9dbe 50%,#db9dbe 62.5%,#c49cde 62.5%,#c49cde 75%,#669ae1 75%,#669ae1 87.5%,#62c2e4 87.5%,#62c2e4)}
.thumbnails li> .fff .caption { background:#fff !important; padding:10px }
/* Page Header */
.page-header {
    background: #f9f9f9;
    margin: -30px -40px 40px;
    padding: 20px 40px;
    border-top: 4px solid #ccc;
    color: #999;
    text-transform: uppercase;
    }
    .page-header h3 {
        line-height: 0.88rem;
        color: #000;
        }



/* Thumbnail Box */
.caption h4 {
   
    color: #444;
    }
    .caption p {
       
        color: #999;
        }
        .btn.btn-mini {
            
            }


/* Carousel Control */
.control-box {
    text-align: right;
    width: 100%;
    }
    .carousel-control{
        background: #666;
        border: 0px;
        border-radius: 0px;
        display: inline-block;
        font-size: 34px;
        font-weight: 200;
        line-height: 18px;
        opacity: 0.5;
        padding: 4px 10px 0px;
        position: static;
        height: 30px;
        width: 15px;
        }





/* Mobile Only */
@media (max-width: 767px) {
    .page-header, .control-box {
    text-align: center;
    } 
}
@media (max-width: 479px) {
    .caption {
    word-break: break-all;
    }
}


li { list-style-type:none;}

::selection { background: #ff5e99; color: #FFFFFF; text-shadow: 0; }
::-moz-selection { background: #ff5e99; color: #FFFFFF; }

</style>
<script>
// Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });

</script>