<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AdminAsset;
use frontend\widgets\Alert;

/**
 *
 * @var \yii\web\View $this
 * @var string $content
 */
AdminAsset::register ( $this );
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= Html::encode($this->title) ?></title>
    <?php $this->head()?>
</head>
<body>
    <?php $this->beginBody()?>
    
    <?php
				NavBar::begin ( [ 
						'brandLabel' => 'My Company',
						'brandUrl' => Yii::$app->homeUrl.'/admin',
						'options' => [ 
								'class' => 'navbar-inverse navbar-fixed-top' 
						] 
				] );
				$menuItems = [ 
						[ 
								'label' => 'View Site',
								'url' => [ 
										'/site/index' 
								] 
						],
						[ 
								'label' => 'Dashboard',
								'url' => [ 
										'/admin' 
								] 
						],
						[ 
								'label' => 'About',
								'url' => [ 
										'/site/about' 
								] 
						],
						[ 
								'label' => 'Contact',
								'url' => [ 
										'/site/contact' 
								] 
						] 
				];
				if (Yii::$app->user->isGuest) {
					$menuItems [] = [ 
							'label' => 'Signup',
							'url' => [ 
									'/site/signup' 
							] 
					];
					$menuItems [] = [ 
							'label' => 'Login',
							'url' => [ 
									'/site/login' 
							] 
					];
				} else {
					$menuItems [] = [ 
							'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
							'url' => [ 
									'/site/logout' 
							],
							'linkOptions' => [ 
									'data-method' => 'post' 
							] 
					];
				}
				echo Nav::widget ( [ 
						'options' => [ 
								'class' => 'navbar-nav navbar-right' 
						],
						'items' => $menuItems 
				] );
				NavBar::end ();
				?>
        
      <div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<?php
				$menuItems = [ 
						[ 
								'label' => 'Dashboard',
								'url' => [ 
										'/admin/default/index' 
								] 
						],
						
						[ 
								'label' => 'Pages',
								'url' => [ 
										'index.php/admin/page/index' 
								],
								'items' => [ 
										[ 
												'label' => 'All Pages',
												'url' => [ 
														'/admin/page/index' 
												] 
										],
										[ 
												'label' => 'Add New',
												'url' => [ 
														'/admin/page/create' 
												] 
										] 
								] 
						],
						
						[ 
								'label' => 'News',
								'url' => [ 
										'index.php/admin/news/index' 
								],
								'items' => [ 
										[ 
												'label' => 'All News',
												'url' => [ 
														'/admin/news/index' 
												] 
										],
										[ 
												'label' => 'Add News',
												'url' => [ 
														'/admin/news/create' 
												] 
										] 
								] 
						],
						
						[ 
								'label' => 'Carrier',
								'url' => [ 
										'index.php/admin/applicant/index' 
								],
								'items' => [ 
										[ 
												'label' => 'All Job Vacation',
												'url' => [ 
														'/admin/job/index' 
												] 
										],
										[ 
												'label' => 'Add Job Vacation',
												'url' => [ 
														'/admin/job/create' 
												] 
										],
										[ 
												'label' => 'All Applicant',
												'url' => [ 
														'/admin/applicant/index' 
												] 
										] 
								] 
						],
						[ 
								'label' => 'Rental Car',
								'url' => [ 
										'index.php/admin/rental-car/all-unit' 
								],
								'items' => [ 
										[ 
												'label' => 'All Unit',
												'url' => [ 
														'index.php/admin/rental-car/all-unit' 
												] 
										],
										[ 
												'label' => 'Add Unit',
												'url' => 'index.php/admin/rental-car/create' 
										],
										[ 
												'label' => 'Add Category',
												'url' => 'index.php/admin/rental-car/all-category' 
										],
										[ 
												'label' => 'All Rental Orders',
												'url' => 'index.php/admin/rental-car/all-orders' 
										] 
								],
								'label' => 'Setting',
								'url' => '#',
								'items' => [ 
										[ 
												'label' => 'Admin',
												'url' => [ 
														'/rbac/default' 
												] 
										],
										[ 
												'label' => 'Assigment',
												'url' => [ 
														'/rbac/assigment' 
												] 
										],
										[ 
												'label' => 'Role',
												'url' => [ 
														'/rbac/role' 
												] 
										],
										[ 
												'label' => 'Permission',
												'url' => [ 
														'/rbac/permission' 
												] 
										],
										[ 
												'label' => 'Route',
												'url' => [ 
														'/rbac/route' 
												] 
										],
										[ 
												'label' => 'Rule',
												'url' => [ 
														'/rbac/rule' 
												] 
										] 
								] 
						] 
				];
				
				echo Nav::widget ( [ 
						'options' => [ 
								'class' => 'nav nav-sidebar' 
						],
						'items' => $menuItems 
				] );
				?>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<?=Breadcrumbs::widget ( [ 'links' => isset ( $this->params ['breadcrumbs'] ) ? $this->params ['breadcrumbs'] : [ ] ] )?>
        <?= Alert::widget()?>
        <?= $content?>
        </div>
		</div>
	</div>

    <?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
