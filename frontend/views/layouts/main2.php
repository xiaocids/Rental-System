<?php
use frontend\assets\AppAsset;
use frontend\assets\FontAwesomeAsset;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\widgets\Alert;


AppAsset::register($this);
FontAwesomeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
	<meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. Berlian Abadua Satu | <?= Html::encode($this->title) ?></title>

	<?php $this->head() ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<?php $this->beginBody() ?>
    <!-- Navigation -->	
	<?php NavBar::begin ( [ 
				'brandLabel' => '<img src="' . Url::base () . '/img/diacar.png" alt="Diacar Rental"/> <img src="' . Url::base () . '/img/bendi21.png" alt="Diacar Rental"/>',
				'brandUrl' => Yii::$app->homeUrl,
				'brandOptions' => [ 
						'button' => 'test' 
				],
				'options' => [ 
						'class' => 'navbar-fixed-top' 
				] 
		] );
		$menuItems = [ 
				[ 
						'label' => 'Home',
						'url' => [ 
								'/site/index' 
						] 
				],
				[ 
						'label' => 'About Us',
						'url' => [ 
								'/page/about-us' 
						] 
				],
				[ 
						'label' => 'Our Business',
						'url' => [ 
								'#'
						],
						'items' => [ 
								[ 
										'label' => 'Rental Cars',
										'url' => '#' 
								],
								[ 
										'label' => 'Used Cars',
										'url' => '#' 
								] 
						] 
				],
				[ 
						'label' => 'Our Services',
						'url' => [ 
								'/site/d' 
						],
						'items' => [ 
							[ 
									'label' => 'Rental Cars',
									'url' => [ 
											'/site/b' 
									] 
							],
							[ 
									'label' => 'Used Cars',
									'url' => '#' 
							],
							[ 
									'label' => 'Service Station',
									'url' => '#' 
							] 
						] 
				],
				[ 
						'label' => 'News Update',
						'url' => [ 
								'/news' 
						] 
				],
				[ 
						'label' => 'Career',
						'url' => [ 
								'/career' 
						] 
				],
				[ 
						'label' => 'Contact Us',
						'url' => [ 
								'/page/contact-us' 
						] 
				] 
		];
		// if (Yii::$app->user->isGuest) {
		// $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
		// $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
		// } else {
		// $menuItems[] = [
		// 'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
		// 'url' => ['/site/logout'],
		// 'linkOptions' => ['data-method' => 'post']
		// ];
		// }
		echo Nav::widget ( [ 
				'options' => [ 
						'class' => 'navbar-nav navbar-right' 
				],
				'items' => $menuItems 
		] );
	NavBar::end (); ?>
	<!-- Page Content -->
	<div class="container">
	<?= Breadcrumbs::widget ( [ 'links' => isset ( $this->params ['breadcrumbs'] ) ? $this->params ['breadcrumbs'] : [ ] ] )?>
    <?= Alert::widget()?>
	<?= $content ?>
	</div>
	<!-- /.container -->


	<!-- Footer -->
	<!-- 	<footer class="footer"> -->
	<!-- 		<div class="container"> -->

	<!-- 		</div> -->
	<!-- 	</footer> -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="col">
						<h4>Contact us</h4>
						<p>PT. BERLIAN ABADUA SATU KTB Annex Building 1st Floor Jl. A.
							Yani, Pulomas Jakarta Timur 13210 DIa Car Rental Ph : (021)
							47866081</p>
							<a href="<?=Url::toRoute('/page/contact-us')?>" class="btn btn-red">More</a>
					</div>
				</div>

				<div class="col-md-3">
					<div class="col">
						<h4>Mailing list</h4>
						<p>Sign up if you would like to receive occasional treats from us.</p>
						<form class="form-inline">
							<div class="input-group">
								<input type="text" class="form-control"
									placeholder="Your email address..."> <span
									class="input-group-btn">
									<button class="btn btn-red" type="button">Go!</button>
								</span>
							</div>
						</form>
					</div>
				</div>

				<div class="col-md-3">
					<div class="col col-social-icons">
						<h4>Follow us</h4>
						<a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i
							class="fa fa-google-plus"></i></a> <a href="#"><i
							class="fa fa-linkedin"></i></a> <a href="#"><i
							class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-skype"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a> <a href="#"><i
							class="fa fa-youtube-play"></i></a> <a href="#"><i
							class="fa fa-flickr"></i></a>
					</div>
				</div>

				<div class="col-md-3">
					<div class="col">
						<h4>About us</h4>
						<p>
							Was established since 1999 as a subsidiary of PT. KRAMA YUDHA
							TIGA BERLIAN MOTORS with the mission to meet the demand and the
							condition of more developing automotive market.<br> <br> <a
								href="#" class="btn btn-red">Try it now!</a>
						</p>
					</div>
				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col-lg-9 copyright">
					<p class="pull-left">&copy; PT. Berlian Abadua Satu <?= date('Y') ?></p>
					<p class="pull-right"><?= Yii::powered() ?></p>
				</div>
				<div class="col-lg-3 footer-logo"></div>
			</div>
		</div>
	</footer>

	<?php $this->endBody()?>
</body>

</html>
<?php $this->endPage() ?>