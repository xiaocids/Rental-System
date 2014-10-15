<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use frontend\modules\admin\models\JobVacationSearch;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Applicant */

$this->title = 'Applicant #' . $model->applicant_id;
$this->params ['breadcrumbs'] [] = [ 
		'label' => 'Applicants',
		'url' => [ 
				'index' 
		] 
];
$this->params ['breadcrumbs'] [] = $this->title;
?>
<div class="applicant-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary'])?>
        <?=Html::a ( 'Delete', [ 'delete','id' => $model->id ], [ 'class' => 'btn btn-danger','data' => [ 'confirm' => 'Are you sure you want to delete this item?','method' => 'post' ] ] )?>
        <?= Html::a('Print', ['print', 'id' => $model->id], ['class' => 'btn btn-info'])?>
    </p>

	<div class="row">	
	<div class="col-lg-12">
	<legend>Data Personal</legend>
	</div>	
		<div class="col-lg-3">
			<strong>Photo</strong>
			<br>
			<img src="<?= Url::base () . '/photo/'.$model->photo?>"
				alt="<?= $model->full_name?>" class="img-thumbnail"
				style="width: 230px; height: 300px;"> <br> <br>
    		<?php //DetailView::widget([
// 		        'model' => $model,
// 		        'attributes' => [
// 		            //'id',
// 		            //'photo',
// 		            'phone',
// 		            'mobile',
// 		            'home_address:ntext',
// 		            'email:email',
// 		        ],
// 		    ]) ?>
    		
    	</div>
		<div class="col-lg-7">
			<?= DetailView::widget([
				'template' =>"<tr><th class='col-xs-4'>{label}</th><td>{value}</td></tr>",
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
		            'phone',
		            'mobile',
		            'home_address:ntext',
		            'email:email',
		        ],
		    ]) ?>
    	</div>
	</div>

	<div class="row">
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

	<div class="row">
		<div class="col-lg-6">
			<legend>Awards & Achievment</legend>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th class="col-xs-2">Awards & Achievment</th>
						<th class="col-xs-1">Year</th>
						<th class="col-xs-2">Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?= isset($model->award1) ? '-' : $model->award1?></td>
						<td><?= isset($model->year1) ? '-' : $model->year1?></td>
						<td><?= isset($model->description1) ? '-' : $model->description1?></td>
					</tr>
					<tr>
						<td><?= isset($model->award2) ? '-' : $model->award2?></td>
						<td><?= isset($model->year2) ? '-' : $model->year2?></td>
						<td><?= isset($model->description2) ? '-' : $model->description2?></td>
					</tr>
					<tr>
						<td><?= isset($model->award3) ? '-' : $model->award3?></td>
						<td><?= isset($model->year3) ? '-' : $model->year3?></td>
						<td><?= isset($model->description3) ? '-' : $model->description3?></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-lg-6">
			<legend>Work Experience</legend>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th class="col-xs-2">Work Experience</th>
						<th class="col-xs-2">Work Periode</th>
						<th class="col-xs-2">Work Position</th>
						<th class="col-xs-2">Work Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?= isset($model->work_experience1) ? '-' : $model->work_experience1?></td>
						<td><?= isset($model->work_periode1) ? '-' : $model->work_periode1?></td>
						<td><?= isset($model->work_position1) ? '-' : $model->work_position1?></td>
						<td><?= isset($model->work_description1) ? '-' : $model->work_description1?></td>
					</tr>
					<tr>
						<td><?= isset($model->work_experience2) ? '-' : $model->work_experience2?></td>
						<td><?= isset($model->work_periode2) ? '-' : $model->work_periode2?></td>
						<td><?= isset($model->work_position2) ? '-' : $model->work_position2?></td>
						<td><?= isset($model->work_description2) ? '-' : $model->work_description2?></td>
					</tr>
					<tr>
						<td><?= isset($model->work_experience3) ? '-' : $model->work_experience3?></td>
						<td><?= isset($model->work_periode3) ? '-' : $model->work_periode3?></td>
						<td><?= isset($model->work_position3) ? '-' : $model->work_position3?></td>
						<td><?= isset($model->work_description3) ? '-' : $model->work_description3?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<legend>Language Skill</legend>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th class="col-xs-2">Language Name</th>
						<th class="col-xs-2">Listening</th>
						<th class="col-xs-2">Writing</th>
						<th class="col-xs-2">Speaking</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?= isset($model->language1) ? '-' : $model->language1?></td>
						<td><?= isset($model->listening1) ? '-' : $model->listening1?></td>
						<td><?= isset($model->writing1) ? '-' : $model->writing1?></td>
						<td><?= isset($model->speaking1) ? '-' : $model->speaking1?></td>
					</tr>
					<tr>
						<td><?= isset($model->language2) ? '-' : $model->language2?></td>
						<td><?= isset($model->listening2) ? '-' : $model->listening2?></td>
						<td><?= isset($model->writing2) ? '-' : $model->writing2?></td>
						<td><?= isset($model->speaking2) ? '-' : $model->speaking2?></td>
					</tr>
					<tr>
						<td><?= isset($model->language3) ? '-' : $model->language3?></td>
						<td><?= isset($model->listening3) ? '-' : $model->listening3?></td>
						<td><?= isset($model->writing3) ? '-' : $model->writing3?></td>
						<td><?= isset($model->speaking3) ? '-' : $model->speaking3?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
