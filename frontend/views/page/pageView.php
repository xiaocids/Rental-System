<?php
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 */
$this->title = $model->title_en;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
	<h1><?= Html::encode($this->title) ?></h1>
	<div class="row-fluid">
		<div class="col-md-5">
			<div class="thumbnail">
				<img src="<?= yii\helpers\Url::base().'/img/slider/slide8.png'?>"
					alt="Sample Image">
				<div class="caption">Test</div>
			</div>
		</div>
		<div class="row-fluid">
		<?= Html::decode($model->content_en)?>
		</div>
	</div>
</div>
