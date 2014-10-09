<?php /* @var $this Controller */ ?>
<?php $this->beginContent('@app/views/layouts/main2.php'); ?>
<div class="row">
	<div id="content" class="col-md-9">
        	<?= $content?>
    </div>
	<div class="col-sm-4 col-md-3 sidebar">
		<div class="mini-submenu">
			<span class="icon-bar"></span> <span class="icon-bar"></span> <span
				class="icon-bar"></span>
		</div>
		<div class="list-group">
			<h4 href="#" class="sidebar-title">News Archive</h4>
			<a href="#" class="list-group-item"> <i class="fa fa-comment-o"></i>
				Lorem ipsum
			</a> <a href="#" class="list-group-item"> <i class="fa fa-search"></i>
				Lorem ipsum
			</a> <a href="#" class="list-group-item"> <i class="fa fa-user"></i>
				Lorem ipsum
			</a> <a href="#" class="list-group-item"> <i
				class="fa fa-folder-open-o"></i> Lorem ipsum <span class="badge">14</span>
			</a> <a href="#" class="list-group-item"> <i
				class="fa fa-bar-chart-o"></i> Lorem ipsumr <span class="badge">14</span>
			</a> <a href="#" class="list-group-item"> <i class="fa fa-envelope"></i>
				Lorem ipsum
			</a>
		</div>
		<?php
		$menuItems = [ 
				[ 
						'label' => 'Home',
						'url' => [ 
								'/site/index' 
						],
						'linkOptions' => [ 
								'class' => 'list-group-item' 
						] 
				],
				[ 
						'label' => 'About Us',
						'url' => [ 
								'/site/about' 
						],
						'linkOptions' => [ 
								'class' => 'list-group-item' 
						] 
				],
				
				[ 
						'label' => 'Carrier',
						'url' => [ 
								'/site/contact' 
						],
						'linkOptions' => [ 
								'class' => 'list-group-item' 
						] 
				],
				[ 
						'label' => 'Contact Us',
						'url' => [ 
								'/site/contact' 
						],
						'linkOptions' => [ 
								'class' => 'list-group-item' 
						] 
				] 
		];
// 		echo kartik\widgets\SideNav::widget ( [ 
// 				'items' => $menuItems,
// 				'heading' => 'Options',
// 				'options'=>['class'=>''],
// 				'headingOptions' => [ 
// 						'class' => 'head-style' 
// 				] 
// 		] );
		// echo yii\bootstrap\Nav::widget ( [
		// 'heading' => 'Options',
		// 'options' => [
		// 'class' => 'list-group'
		// ],
		// 'items' => $menuItems
		// ] );
		?>
	</div>
</div>
<?php $this->endContent();