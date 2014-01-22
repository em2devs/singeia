<?php
	Yii::app()->clientscript
                ->registerCssFile( Yii::app()->request->baseUrl . '/css/main.css' )
                ->registerCssFile( Yii::app()->request->baseUrl . '/css/form.css' )
                ->registerCssFile( Yii::app()->theme->baseUrl . '/css/themeMain.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
		// use it when you need it!
                /*
		->registerCoreScript( 'jquery' )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-transition.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-alert.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-modal.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-dropdown.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-scrollspy.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tab.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tooltip.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-popover.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-button.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-collapse.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-carousel.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-typeahead.js', CClientScript::POS_END )
                 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le styles -->
<style>
	body {
		padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	}

	@media (max-width: 980px) {
		body{
			padding-top: 0px;
		}
	}
</style>

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php"><?php echo Yii::app()->name ?></a>
				<div class="nav-collapse">
					<?php $this->widget('zii.widgets.CMenu',array(
						'htmlOptions' => array( 'class' => 'nav' ),
						'activeCssClass'	=> 'active',
						'items'=>array(
                                                        array('label'=>Yii::t('app','Professors') , 'url'=>array('/professor')    , 'visible'=>!Yii::app()->user->isGuest, 'active'=> (strcasecmp(Yii::app()->controller->id, 'professor') === 0)  ? true : false),
                                                        array('label'=>Yii::t('app','Students')   , 'url'=>array('/aluno')        , 'visible'=>!Yii::app()->user->isGuest, 'active'=> (strcasecmp(Yii::app()->controller->id, 'aluno') === 0)  ? true : false),
                                                        array('label'=>Yii::t('app','Subjects')   , 'url'=>array('/disciplina')   , 'visible'=>!Yii::app()->user->isGuest, 'active'=> (strcasecmp(Yii::app()->controller->id, 'disciplina') === 0)  ? true : false),
                                                        array('label'=>Yii::t('app','Courses')    , 'url'=>array('/curso')        , 'visible'=>!Yii::app()->user->isGuest, 'active'=> (strcasecmp(Yii::app()->controller->id, 'curso') === 0)  ? true : false),
                                                        array('label'=>Yii::t('app','Users')      , 'url'=>array('/user')         , 'visible'=>!Yii::app()->user->isGuest, 'active'=> (strcasecmp(Yii::app()->controller->id, 'default') === 0)  ? true : (strcasecmp(Yii::app()->controller->id, 'admin') === 0)  ? true : (strcasecmp(Yii::app()->controller->id, 'profilefield') === 0)  ? true : false),
                                                        array('label'=>Yii::t('app','Rights')     , 'url'=>array('/rights')       , 'visible'=>!Yii::app()->user->isGuest, 'active'=> (strcasecmp(Yii::app()->controller->id, 'assignment') === 0)  ? true : (strcasecmp(Yii::app()->controller->id, 'authitem') === 0)  ? true : false),
                                                        array('label'=>Yii::t('app','Contact')    , 'url'=>array('/site/contact') , 'visible'=>!Yii::app()->user->isGuest),    
                                                        array('label'=>Yii::t('app','About')      , 'url'=>array('/site/page'     , 'view'=>'about'), 'visible'=>!Yii::app()->user->isGuest),
                                                        
                                                        
                                                ),
					)); ?>
                                        
                                    <?php if(!Yii::app()->user->isGuest) { ?>
                                            <p class="navbar-text pull-right"><?php echo Yii::t('app','Logged In as').' '; ?><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=user/profile"><?php echo Yii::app()->user->name; ?></a> | <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=user/logout"><?php echo Yii::t('app','Logout'); ?></a></p>
                                    <?php } else { ?>
                                            <p class="navbar-text pull-right"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=user/login"><?php echo Yii::t('app','Login'); ?></a></p>
                                    <?php } ?>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container">
		<?php echo $content ?>
	</div> <!-- /container -->
</body>
</html>
