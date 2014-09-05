<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\web\View;
use \yii\bootstrap\Modal;

if ($model == false) {
?>
<div class="well">
	<div class="alert alert-success alert-dismissible" role="alert">
	
	<?= strtoupper($company_name)?> Not Yet Registered.</div>

	
	<?=Html::a ( 'Create Prospect Card', Url::to(['prospect-card/generate-card', 'id'=>$company_name]), ['onclick'=>'return confirm("Are You Sure?");','id' => 'createButton', 'class'=>'btn btn-primary' ] )?>
	<?=Html::button ( 'Close', [ 'id' => 'close', 'class'=>'btn btn-default pull-right', 'data-dismiss'=>"alert"] )?>

</div>
<?php
} else {
	?>
<div class="well">
	<div class="alert alert-danger alert-dismissible" role="alert">
	
	<?= strtoupper($company_name)?> Already Registered.</div>

	<?=DetailView::widget ( [ 'model' => $model,'attributes' => [ 'prospect_card_number',['label'=>'Company Name', 'value'=>$model->company_name.', '.$model->company_title],[ 'label' => 'Salesman','attribute' => 'marketing_officer_name' ],// 'marketing_officer_name',[ 'label' => 'Company Name','value' => $model->company_name . ', ' . $model->company_title ],// 'company_name',// 'company_title','company_address:ntext','business_type',
		            ['label'=>'Phone', 'value'=>$model->phone_code_area.'-'.$model->telephone], ] ] )?>
	<?=Html::a(Yii::t('app', 'Prospecting'), ['prospecting', 'id'=>$model->id], ['class' => 'btn btn-primary']) ?>
	<?=Html::button ( 'View', [ 'value' => Url::to ( [ 'prospect-card/view-partial', 'id'=>$model->id ] ),'id' => 'viewButton', 'class'=>'btn btn-success' ] )?>
	<?=Html::button ( 'Close', [ 'id' => 'close', 'class'=>'btn btn-default pull-right', 'data-dismiss'=>"alert"] )?>

</div>
<?php
	Modal::begin ( [ 
			'id' => 'modal',
			'size' => 'modal-lg',
			'header' => 'View Prospect Card #'.$model->prospect_card_number,
	] );
	
	echo "<div id='modalContent'></div>";
	
	Modal::end ();
?>

<script>
$('#viewButton').click(function (){
    $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));
});
</script>
<?php
}
?>

