<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use frontend\modules\admin\models\JobVacationSearch;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Applicant */

$this->title = 'Applicant #'.$model->applicant_id;
$this->params['breadcrumbs'][] = ['label' => 'Applicants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="row-fluid">
    	<legend>Data Personal</legend>
    	<div class="col-xs-6">
    		<?= DetailView::widget([
		        'model' => $model,
		        'attributes' => [
		            //'id',
		            'applicant_id',
		            'job.job_name',
		            'full_name',
		            'age',
		            //'gender',
		            ['attribute'=>'gender','value'=>JobVacationSearch::getReqGender($model->gender)],
		            'born_date:date',
		            //'marital_status',
		            ['attribute'=>'marital_status','value'=>JobVacationSearch::getMaritalStatus($model->marital_status)],
		            'photo',
// 		            'phone',
// 		            'mobile',
// 		            'home_address:ntext',
// 		            'email:email',
// 		            'education_level1',
// 		            'university_name1',
// 		            'majoring1',
// 		            'join_graduate_year1',
// 		            'gpa1',
// 		            'education_level2',
// 		            'university_name2',
// 		            'majoring2',
// 		            'join_graduate_year2',
// 		            'gpa2',
// 		            'education_level3',
// 		            'university_name3',
// 		            'majoring3',
// 		            'join_graduate_year3',
// 		            'gpa3',
// 		            'organization_name1',
// 		            'org_position1',
// 		            'join_out_year1',
// 		            'responsibility1',
// 		            'organization_name2',
// 		            'org_position2',
// 		            'join_out_year2',
// 		            'responsibility2',
// 		            'organization_name3',
// 		            'org_position3',
// 		            'join_out_year3',
// 		            'responsibility3',
// 		            'award1',
// 		            'year1',
// 		            'description1',
// 		            'award2',
// 		            'year2',
// 		            'description2',
// 		            'award3',
// 		            'year3',
// 		            'description3',
// 		            'work_experience1',
// 		            'work_periode1',
// 		            'work_position1',
// 		            'work_description1',
// 		            'work_experience2',
// 		            'work_periode2',
// 		            'work_position2',
// 		            'work_description2',
// 		            'work_experience3',
// 		            'work_periode3',
// 		            'work_position3',
// 		            'work_description3',
// 		            'language1',
// 		            'listening1',
// 		            'writing1',
// 		            'speaking1',
// 		            'language2',
// 		            'listening2',
// 		            'writing2',
// 		            'speaking2',
// 		            'language3',
// 		            'listening3',
// 		            'writing3',
// 		            'speaking3',
// 		            'other_skill:ntext',
// 		            'term_condition',
// 		            'created_at',
// 		            'updated_at',
		        ],
		    ]) ?>
    	</div>
    	<div class="col-md-6">
    		<img src="<?= Url::base () . '/photo/'.$model->photo?>" alt="<?= $model->full_name?>" class="img-thumbnail" style="width: 100px; height: 120px;">
    		<br>
    		<br>
    		<?= DetailView::widget([
		        'model' => $model,
		        'attributes' => [
		            //'id',
		            //'photo',
		            'phone',
		            'mobile',
		            'home_address:ntext',
		            'email:email',
		        ],
		    ]) ?>
    	</div>
    </div>
    
	<div class="row-fluid">
			<div class="col-lg-6">
				<legend>Formal Edications</legend>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="col-xs-2">Education Level</th>
							<th class="col-xs-2">University Name</th>
							<th class="col-xs-2">Majoring</th>
							<th class="col-xs-1">Join-Graduate Year</th>
							<th class="col-xs-1">GPA</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?= $model->education_level1?></td>
							<td><?= $model->university_name1?></td>
							<td><?= $model->majoring1?></td>
							<td><?= $model->join_graduate_year1?></td>
							<td><?= $model->gpa1?></td>
						</tr>
						<tr>
							<td><?= $model->education_level2?></td>
							<td><?= $model->university_name2?></td>
							<td><?= $model->majoring2?></td>
							<td><?= $model->join_graduate_year2?></td>
							<td><?= $model->gpa2?></td>
						</tr>
						<tr>
							<td><?= $model->education_level3?></td>
							<td><?= $model->university_name3?></td>
							<td><?= $model->majoring3?></td>
							<td><?= $model->join_graduate_year3?></td>
							<td><?= $model->gpa3?></td>
						</tr>						
					</tbody>
				</table>
			</div>

			<div class="col-lg-6">
				<legend>Organization Experience</legend>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="col-xs-2">Organization Name</th>
							<th class="col-xs-2">Position</th>
							<th class="col-xs-1">Join-Out Year</th>
							<th class="col-xs-1">Responsibility</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?= isset($model->organization_name1) ? '-' : $model->organization_name1?></td>
							<td><?= isset($model->org_position1) ? '-' : $model->org_position1?></td>
							<td><?= isset($model->join_out_year1) ? '-' : $model->join_out_year1?></td>
							<td><?= isset($model->responsibility1) ? '-' : $model->responsibility1?></td>
						</tr>
						<tr>
							<td><?= isset($model->organization_name2) ? '-' : $model->organization_name2?></td>
							<td><?= isset($model->org_position2) ? '-' : $model->org_position2?></td>
							<td><?= isset($model->join_out_year2) ? '-' : $model->join_out_year2?></td>
							<td><?= isset($model->responsibility2) ? '-' : $model->responsibility2?></td>
						</tr>
						<tr>
							<td><?= isset($model->organization_name3) ? '-' : $model->organization_name3 ?></td>
							<td><?= isset($model->org_position3) ? '-' : $model->org_position3?></td>
							<td><?= isset($model->join_out_year3) ? '-' : $model->join_out_year3?></td>
							<td><?= isset($model->responsibility3) ? '-' : $model->responsibility3?></td>
						</tr>						
					</tbody>
				</table>
			</div>
		</div>
</div>
