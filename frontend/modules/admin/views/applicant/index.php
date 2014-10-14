<?php

use yii\helpers\Html;
use yii\grid\GridView;
use frontend\modules\admin\models\JobVacationSearch;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\admin\models\ApplicantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Applicants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Applicant', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'applicant_id',
           	[
           		'attribute' => 'job.job_name', 
           		'header'=>'Job Name',
            	'filter' => Html::activeDropDownList($searchModel, 'job_id', JobVacationSearch::listJobActive(),['class'=>'form-control','empty'=>'-Select','prompt'=>'-Select']),
			],
            'full_name',
            'age',
            // 'gender',
            // 'born_date',
            // 'marital_status',
            // 'photo',
            // 'phone',
            // 'mobile',
            // 'home_address:ntext',
            // 'email:email',
            // 'education_level1',
            // 'university_name1',
            // 'majoring1',
            // 'join_graduate_year1',
            // 'gpa1',
            // 'education_level2',
            // 'university_name2',
            // 'majoring2',
            // 'join_graduate_year2',
            // 'gpa2',
            // 'education_level3',
            // 'university_name3',
            // 'majoring3',
            // 'join_graduate_year3',
            // 'gpa3',
            // 'organization_name1',
            // 'org_position1',
            // 'join_out_year1',
            // 'responsibility1',
            // 'organization_name2',
            // 'org_position2',
            // 'join_out_year2',
            // 'responsibility2',
            // 'organization_name3',
            // 'org_position3',
            // 'join_out_year3',
            // 'responsibility3',
            // 'award1',
            // 'year1',
            // 'description1',
            // 'award2',
            // 'year2',
            // 'description2',
            // 'award3',
            // 'year3',
            // 'description3',
            // 'work_experience1',
            // 'work_periode1',
            // 'work_position1',
            // 'work_description1',
            // 'work_experience2',
            // 'work_periode2',
            // 'work_position2',
            // 'work_description2',
            // 'work_experience3',
            // 'work_periode3',
            // 'work_position3',
            // 'work_description3',
            // 'language1',
            // 'listening1',
            // 'writing1',
            // 'speaking1',
            // 'language2',
            // 'listening2',
            // 'writing2',
            // 'speaking2',
            // 'language3',
            // 'listening3',
            // 'writing3',
            // 'speaking3',
            // 'other_skill:ntext',
            // 'term_condition',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
