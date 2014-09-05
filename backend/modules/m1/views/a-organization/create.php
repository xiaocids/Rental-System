<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\aOrganization $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'A Organization',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'A Organizations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="a-organization-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
