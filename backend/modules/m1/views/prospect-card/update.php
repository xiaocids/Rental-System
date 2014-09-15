<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\ProspectCard $model
 */

// $this->title = Yii::t ( 'app', 'Update {modelClass}: #', [ 
// 		'modelClass' => 'Prospect Card' 
// ] ) . $model->prospect_card_number;

// $this->params ['breadcrumbs'] [] = [ 
// 		'label' => Yii::t ( 'app', 'Prospect Cards' ),
// 		'url' => [ 
// 				'index' 
// 		] 
// ];

// $this->params ['breadcrumbs'] [] = [ 
// 		'label' => '#' . $model->prospect_card_number,
// 		'url' => [ 
// 				'view',
// 				'id' => $model->id 
// 		] 
// ];
// $this->params ['breadcrumbs'] [] = Yii::t ( 'app', 'Update' );
?>
<div class="prospect-card-update">

	<h1><?= Html::encode($this->title) ?></h1>

    <?=$this->render ( '_formTest', [ 'model' => $model ] ) ?>

</div>
