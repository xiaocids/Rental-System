<?php 
use yii\helpers\Url;
?>
		<!-- Heading Row -->
		<div id="slider" class="row">
			<div class="col-md-8">
			<?php
			echo yii\bootstrap\Carousel::widget ( [ 
					'clientOptions'=>[
						//'fade'=>true,
						'interval'=> 2000,
					],
					'options'=>['class'=>'carousel carousel-fade'],
					'items' => [ 
							// the item contains only the image
							[
								'content' => '<img src="'.Url::base().'/img/slider/slide8.png'.'"/>',
								'caption' => '<h4>Diacar Rent</h4><p>This is the caption text</p>',
								'options' => [ ] 
							],
							// equivalent to the above
							[ 
									'content' => '<img src="' . Url::base () . '/img/slider/slide3.png' . '"/>',
									'caption' => '<h4>Bendi 21</h4><p>This is the caption text</p>',
									'options' => [ ] 
							],
							[ 
									'content' => '<img src="'.Url::base().'/img/slider/slide7.png'.'"/>',
									'caption' => '<h4>Bendi 21</h4><p>This is the caption text</p>',
									'options' => [ ] 
							],
							// the item contains both the image and the caption
							[ 
									'content' => '<img src="' . Url::base () . '/img/slider/slide4.png' . '"/>',
									'caption' => '<h4>24 Hours Emergency</h4><p>This is the caption text</p>',
									'options' => [ ] 
							],
							[ 
									'content' => '<img src="' . Url::base () . '/img/slider/slide2.png' . '"/>',
									'caption' => '<h4>Bendi 21</h4><p>This is the caption text</p>',
									'options' => [ ] 
							] 
					] 
			] );
			?>			

				<!-- 				<img class="img-responsive img-rounded" -->
				<!-- 					src="http://placehold.it/900x350" alt=""> -->
			</div>
			<!-- /.col-md-8 -->
			<div class="col-md-4">
				<h1>We Care Like a Diamond</h1>
				<p style="font-size: 13px;">DIACAR Car Rental adalah unit bisnis
					penyewaan mobil yang menyediakan berbagai macam mobil penumpang dan
					niaga dengan periode sewa harian, mingguan, bulanan bahkan tahunan
					yang juga dapat dilengkapi dengan penyediaan sewa tenaga pengemudi
					yang berpengalaman dan profesional!</p>
				<a class="btn btn-red btn-lg" href="#">Order Now!</a>
			</div>
			<!-- /.col-md-4 -->
		</div>
		<!-- /.row -->

		<hr style="border: 2px solid #E91B23">

		<!-- Call to Action Well -->
		<div class="row-fluid">
			<div class="col-lg-12 tagline">
				<!-- 				<div class="well  text-center"> -->
				<div class="col-md-6">
					<h4>
						Call our Customer Service now! <span class="btn btn-md btn-red"><strong><i class="fa fa-phone"></i> (021)
								478-66081</strong></span>
					</h4>
				</div>
				<div class="col-md-6">
					<h4>
						Get emergency service from our team! <span
							class="btn btn-md btn-white"><strong><i class="fa fa-phone"></i> 0815-10742121</strong></span>
					</h4>
				</div>
				<!-- 				</div> -->
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->

		<!-- Content Row -->
		<div class="row">
			<div class="col-md-4">
				<h2>
					<i class="glyphicon glyphicon-ok"></i> Diacar Rent
				</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe
					rem nisi accusamus error velit animi non ipsa placeat. Recusandae,
					suscipit, soluta quibusdam accusamus a veniam quaerat eveniet
					eligendi dolor consectetur.</p>
				<a class="btn btn-red" href="#">More Info</a>
			</div>
			<!-- /.col-md-4 -->
			<div class="col-md-4">
				<h2>
					<i class="fa fa-car"></i> Bendi 21
				</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe
					rem nisi accusamus error velit animi non ipsa placeat. Recusandae,
					suscipit, soluta quibusdam accusamus a veniam quaerat eveniet
					eligendi dolor consectetur.</p>
				<a class="btn btn-red" href="#">More Info</a>
			</div>
			<!-- /.col-md-4 -->
			<div class="col-md-4">
				<h2>
					<i class="glyphicon glyphicon-wrench"></i> Service Station
				</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe
					rem nisi accusamus error velit animi non ipsa placeat. Recusandae,
					suscipit, soluta quibusdam accusamus a veniam quaerat eveniet
					eligendi dolor consectetur.</p>
				<a class="btn btn-red" href="#">More Info</a>
			</div>
			<!-- /.col-md-4 -->
		</div>
		<!-- /.row -->