<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\ProspectCard $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Prospect Card',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Prospect Cards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prospect-card-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
