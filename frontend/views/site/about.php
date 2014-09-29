<?php
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
	<h1><?= Html::encode($this->title) ?></h1>
	<div class="row-fluid">
	<div class="col-md-5">
		<div class="thumbnail">
			<img src="<?= yii\helpers\Url::base().'/img/slider/slide8.png'?>"
				alt="Sample Image">
			<div class="caption">
				Test
			</div>
		</div>
	</div>
	<div class="row-fluid">
	<p style="text-align: justify;">PT. BERLIAN ABADUA SATU (PT. BAS) Was established since 1999 as a
		subsidiary of PT. KRAMA YUDHA TIGA BERLIAN MOTORS with the mission to
		meet the demand and the condition of more developing automotive
		market. PT. BAS is engaged in the field of car rental service under
		the brand of "DIACAR Car Rental" and the trading of used car under the
		brand of "Bendi21".</p>
	<p style="text-align: justify;">Having our head office in KTB Annex Building - Pulomas, Jakarta
		Timur, we specially provide car rental service of various kinds and
		type (DIACAR), while the trading of used car is in Bintaro and Cinere
		which provides the service of trading of used cars of various kinds
		and types, general workshop and car wash (Bendi 21).</p>
	<p style="text-align: justify;">By this Website we want to help the customers and the prospective
		customers to get good and reliable service and information about car
		rental and used car trading as they wish. We provide you all this as
		our commitment to facilitate you in seeking information to meet the
		transportation needs.</p>

	<code><?= __FILE__ ?></code>
	</div>
	</div>
</div>
