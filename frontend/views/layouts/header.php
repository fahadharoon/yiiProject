<?php

use yii\Helpers\Url;
use yii\Helpers\Html;

?>


<header id="header">
		<div class="header_top">
		</div>
		
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="<?=Url::to('@web/') ?>images/home/Nike-logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							
							</div>
							
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?=Url::to(['/site/login']) ?>"><i class="fa fa-lock"></i> Account</a></li>
								
								

								<?php if(Yii::$app->user->isGuest) { ?>


								<li><a href="<?=Url::to(['/site/login']) ?>"><i class="fa fa-lock"></i> Login</a></li>
								<li><a href="<?=Url::to(['/site/signup']) ?>"><i class="fa fa-lock"></i> Signup</a></li>

								<?php } else {

								  echo Html::beginForm(['/site/logout'], 'post')
                                  . Html::submitButton(
                                   'Logout (' . Yii::$app->user->identity->username . ')',
                                   ['class' => 'btn btn-link logout']
                                   )
                                  . Html::endForm();






									} ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?=Url::to(['/site/index']) ?>">Home</a></li>
								<li><a href="<?=Url::to(['/site/about']) ?>">About</a></li>
								<li><a href="<?=Url::to(['/site/contact']) ?>">Contact</a></li>

							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->