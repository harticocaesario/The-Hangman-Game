    <div class="slider-bootstrap"><!-- start slider -->
    	<div class="slider-wrapper theme-default">
            <div id="slider-nivo" class="nivoSlider">
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/image.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/image.jpg" alt="" title="" />
              	<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/img1.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/img1.jpg" alt="" title="" />
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/img2.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/img2.jpg" alt="" title="" />
				<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/img3.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/img3.jpg" alt="" title="" />
				<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/img4.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/img4.jpg" alt="" title="" />
				<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/img5.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/img5.jpg" alt="" title="" />
				
			<!--<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/s10.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/s10.jpg" alt="" title="" />
                <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/s11.jpg" data-thumb="<?php echo Yii::app()->theme->baseUrl;?>/img/slider/flickr/s11.jpg" alt="" title="" />
			-->	
			</div>
        </div>

    </div> <!-- /slider -->
  
    <div class="shout-box">
        <div class="shout-text">
          <h1>MoneyCare Bank</h1>
          <p>We work to give you trusted financial service<br> Make your live more simple and easier with MoneyCare </p>
        </div>
    </div>
    	<div class="row-fluid">
            <ul class="thumbnails center">
              <li class="span3">
                <div class="thumbnail">
                <h3>Works on all devices</h3>
                  
                  	<div class="round_background r-grey-light">
                		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/30px-01.png" alt="" class="">
                     </div>
                  
                  <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                	 <h3>Unlimited color options</h3>
                     
                     <div class="round_background r-yellow">
                		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/30px-41.png" alt="" class="">
                     </div>
                 
                  <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                	<h3>6 home layouts</h3>
                  	<div class="round_background r-grey-light">
                		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/30px-37.png" alt="" class="">
                     </div>
                  <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <h3>More than 500 fonts</h3>
                  <div class="round_background r-yellow">
                		<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/icons/smashing/30px-17.png" alt="" class="">
                     </div>
                  <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>
                </div>
              </li>

            </ul>
        </div>
        
        <hr>
        
        <div class="row-fluid">
		
            <iframe width="50%" height="350" src="http://widget.kontan.co.id/icool/valas" 
			frameborder="0" style="background:white" allowfullscreen></iframe>
			
			<iframe src ="http://www.seputarforex.com/widget/saham_untung.php" 
			width="45%" height="350" frameborder="0" align="right" margin-left="5px"></iframe>
			

			
			
        </div>
       
     
    
      
      <h3 class="header">Our customers
      	<span class="header-line"></span>  
      </h3>
      <div class="row-fluid center customers">
        <div class="span3 ">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customers/themeforest.png" alt="Themeforest" />
        </div>
        <div class="span3">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customers/codecanyon.png" alt="Codecanyon" />
        </div>
        <div class="span3">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customers/graphicriver.png" alt="Graphicriver" />
        </div>
        <div class="span3">
            <img src="<?php echo Yii::app()->theme->baseUrl;?>/img/customers/photodune.png" alt="Photodune" />
        </div>
          
		</div><!--/row-fluid-->
        
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
    
     <script type="text/javascript">
    $(function() {
        $('#slider-nivo').nivoSlider({
			effect: 'boxRandom',
			manualAdvance:false,
			controlNav: false
			});
    });
    </script> <!--<script type="text/javascript">
    $(document).ready(function() {
        $('#slider-nivo2').nivoSlider();
    });
    </script>-->