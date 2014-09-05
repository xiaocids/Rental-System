<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\modules\m1\models\CurrentAsset;
use yii\grid\GridView;
use yii\helpers\Url;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\ProspectCard $model
 */

$this->title = 'View Prospect Card #'.$model->prospect_card_number;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Prospect Cards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prospect-card-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a(Yii::t('app', 'Quotation'), ['quotation/create', 'id' => $model->id], ['class' => 'btn btn-success', 'onclick'=>'']) ?>
        <?= Html::buttonInput(Yii::t('app', 'Print'), ['class' => 'btn btn-default', 'onclick'=>'popup(\''.Url::to(['print', 'id'=>$model->id]).'\')']) ?>
        <?= Html::a(Yii::t('app', 'Back'), ['index'], ['class' => 'btn btn-info pull-right']) ?>
    </p>

	<div class="row">
		<div class="col-lg-6">
			<legend>Prospect Card</legend>
    		<?= DetailView::widget([
		        'model' => $model,
		        'attributes' => [
		            //'id',
		            'prospect_card_number',
		            ['label'=>'Salesman', 'attribute'=>'marketing_officer_name'],
		            //'marketing_officer_name',
		            ['label'=>'Company Name', 'value'=>$model->company_name.', '.$model->company_title],
		            //'company_name',
		            //'company_title',
		            'company_address:ntext',
		            'business_type',
		            ['label'=>'Phone', 'value'=>$model->phone_code_area.'-'.$model->telephone],
		            //'phone_code_area',
		            //'telephone',
		            'fax',
		            'email:email',
		            //'other_information:ntext',
		            //'customer_type',
		            //'cp_name1',
		            //'cp_title1',
		            //'cp_name2',
		            //'cp_title2',
		            //'cp_name3',
		            //'cp_title3',
		            //'created_date',
		            //'created_by',
		            //'updated_date',
		            //'updated_by',
		        ],
		    ]) ?>
    	</div>
		<div class="col-lg-6">
			<legend>Contact Person</legend>
    		<?= DetailView::widget([
		        'model' => $model,
		        'attributes' => [
		            //'id',
		            //'prospect_card_number',
		            //'marketing_officer_name',
		            //'company_name',
		            //'company_title',
		            //'company_address:ntext',
		            //'business_type',
		            //'phone_code_area',
		            //'telephone',
		            //'fax',
		            //'email:email',
		            //'other_information:ntext',
		            //'customer_type',
		            ['label'=>'Contact Person 1', 'value'=>$model->cp_name1.' - '.$model->cp_title1],
		            ['label'=>'Contact Person 2', 'value'=>$model->cp_name2.' - '.$model->cp_title2],
		            ['label'=>'Contact Person 3', 'value'=>$model->cp_name3.' - '.$model->cp_title3],
		            //'cp_name1',
		            //'cp_title1',
		            //'cp_name2',
		            //'cp_title2',
		            //'cp_name3',
		            //'cp_title3',
		            'other_information:ntext',
		            //'created_date',
		            //'created_by',
		            //'updated_date',
		            //'updated_by',
		        ],
		    ]) ?>
    	</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<legend>Transportation Status: Rental</legend>
			<?php 
				$dataLease = new yii\data\ActiveDataProvider([
				    'query' => $model->getBCurrentLeases(),
				    'pagination' => [
				        'pageSize' => 5,
				    ],
				]);
			?>
			<?= GridView::widget([
		        'dataProvider' => $dataLease,
		        //'filterModel' => $searchModel,
		        'columns' => [
            		['class' => 'yii\grid\SerialColumn'],
            		//'id',
		            'brand_type_year',
		            'unit',
		            'end_of_contract',
		            'rental_company',
		           
		        ],
		    ]) ?>
		</div>
		<div class="col-lg-6">
			<legend>Transportation Status: Asset</legend>
			<?php 
				$dataAsset = new yii\data\ActiveDataProvider([
				    'query' => $model->getBCurrentAssets(),
				    'pagination' => [
				        'pageSize' => 5,
				    ],
				]);
			?>
			<?= GridView::widget([
		        'dataProvider' => $dataAsset,
		        //'filterModel' => $searchModel,
		        'columns' => [
            		['class' => 'yii\grid\SerialColumn'],
            		//'id',
		            'brand_type',
		            'unit',
		            'manufacture_year',		           
		        ],
		    ]) ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<legend>Prospect Activity</legend>
			<?php 
				$dataAsset = new yii\data\ActiveDataProvider([
				    'query' => $model->getBProspectHistories(),
				    'pagination' => [
				        'pageSize' => 5,
				    ],
				]);
			?>
			<?= GridView::widget([
		        'dataProvider' => $dataAsset,
		        //'filterModel' => $searchModel,
		        'columns' => [
            		['class' => 'yii\grid\SerialColumn'],
            		//'id',
		            'prospect_date:date',
		            'meet_call_with',
		            'description',
		            'visit_call',
		            'class_status',
		            'next_action' ] ] )?>
		</div>
	</div>

</div>
<script type="text/javascript">

function popup(url) 
{
	params  = 'width='+screen.width;
	params += ', height='+screen.height;
	params += ', top=0, left=0'
	params += ', fullscreen=yes';
	
	newwin=window.open(url,'windowname4', params);
	if (window.focus) {newwin.focus()}
	return false;
}

</script>
