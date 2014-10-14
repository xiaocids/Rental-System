<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use frontend\modules\admin\models\JobVacationSearch;
use frontend\modules\admin\models\JobVacation;

/**
 * @var yii\web\View $this
 * @var frontend\modules\admin\models\JobVacation $model
 */

$this->title = 'Career as '.$model->job_name;
$this->params['breadcrumbs'][] = ['label' => 'Career', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-vacation-view">

    <h1>Career as <?= $model->job_name?></h1>

    <br>
	<br>
	<div class="row">
		<div class="col-md-6">
			<?= Html::activeDropDownList($model,'id',JobVacationSearch::listJobActive(),['class'=>'form-control', 'onchange'=>'javascript: redirect(this)' /*,'prompt'=>'-Select', 'empty'=>'-Select'*/])?>		
		</div>
	</div>
    <br>
    <legend>Job Description</legend>
    <?= Html::decode($model->job_description)?>
    
    
    <legend>Job Responsibility</legend>
    <?= Html::decode($model->job_responsibility)?>
    
    
    <legend>Requirement</legend>
    <?= DetailView::widget([
    	'template' =>"<tr><th class='col-xs-4'>{label}</th><td>{value}</td></tr>",
        'model' => $model,
        'attributes' => [
            //'id',
            //'job_name',
            //'job_description:ntext',
            //'job_responsibility:ntext',
            //'req_gender',
		    [
			    'attribute'=>'req_gender',
			    'value'=>JobVacation::getReqGender($model->req_gender),
		    ],
		    [
		    'attribute'=>'req_age',
		    'value'=>$model->req_age.' years old',
		    ],
            //'req_age',
            //'req_marital_status',
            [
				'attribute'=>'req_marital_status',
				'value'=>JobVacation::getMaritalStatus($model->req_marital_status),
            ],
            'req_last_education',
            'req_majoring',
            //'req_min_experiance',
            [
            	'attribute'=>'req_min_experiance',
				'value'=>$model->req_min_experiance.' Years'
            ],
            'contact',
            'send_to:email',
            'valid_until:date',
        ],
    ]) ?>
    
    
    <p class="pull-right">
        <?= Html::a('Apply Now', ['apply', 'id' => $model->id], ['class' => 'btn btn-red']) ?>
        <?= Html::a('Tell Friend', ['tell-friend'], [ 'class' => 'btn btn-primary']) ?>
    </p>

</div>
<?php 
$url = Url::toRoute('detail');
?>
<script>

function redirect(obj)
{
	var url = "<?= $url?>?id="+obj.value;
	document.location = url;
}
</script>