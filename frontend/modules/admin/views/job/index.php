<?php

use yii\helpers\Html;
use yii\grid\GridView;
use frontend\modules\admin\models\JobVacation;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var frontend\modules\admin\models\JobVacationSearch $searchModel
 */

$this->title = 'Job Vacations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-vacation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Job Vacation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'job_name',
            //'job_description:ntext',
            //'job_responsibility:ntext',
            //'req_gender',
            
            [
				'attribute'=>'req_gender',
				'value'=>function ($model){
            		echo $model->req_gender;
            	},
            ],
            'req_age',
            // 'req_marital_status',
           	'req_last_education',
            'req_majoring',
            'req_min_experiance',
            // 'contact',
            // 'send_to',
            'valid_until:date',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
