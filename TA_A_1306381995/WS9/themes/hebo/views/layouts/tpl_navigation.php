<section id="navigation-main">  
<div class="navbar">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
  
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index'),'linkOptions'=>array("data-description"=>"MoneyCare Home Page")),
						array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),'linkOptions'=>array("data-description"=>"What is MoneyCare About")),
						array('label'=>'Contact', 'url'=>array('/comment/create'),'linkOptions'=>array("data-description"=>"Contact Us")),
						array('label'=>'Testimonies', 'url'=>array('/comment/index'),'linkOptions'=>array("data-description"=>"Our Customer Testimonies")),
						array('label'=>'Career', 'url'=>array('/upload/create'),'linkOptions'=>array("data-description"=>"Join Our Team")),
						array('label'=>'User Management', 'url'=>array('/users/admin'), 'visible'=>yii::app()->user->name == 'admin','linkOptions'=>array("data-description"=>"manage user")),
						array('label'=>'Register', 'url'=>array('/users/create'),'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"Make An Account")),
                       	array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"Member Area")),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"Member Area")),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>
</section><!-- /#navigation-main -->