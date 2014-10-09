<?php
/**
 * @var yii\web\View $this
 */

use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Career';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Career</h1>

<legend>
	<h3>Bergabunglah Bersama Kami</h3>
</legend>

<p>Kami membuka peluang dan kesempatan bagi tenaga yang berkompeten dan
	berkualifikasi untuk bergabung bersama kami dalam rangka peningkatan
	dan perluasan pelayanan kami. Berikut posisi yang yang kami tawarkan:</p>

<?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'job_name',
            //'job_description:ntext',
            //'job_responsibility:ntext',
            //'req_gender',
            //'req_age',
            // 'req_marital_status',
           	'req_last_education',
            //'req_majoring',
            //'req_min_experiance',
            // 'contact',
            // 'send_to',
            'valid_until:date',// 'created_at',// 'created_by',// 'updated_at',// 'updated_by',
            [ 
            	'header'=>'View',
            	'class' => 'yii\grid\ActionColumn',
            	'template' => '{detail}',
            	'buttons' => [ 
            		'detail' => function ($url, $model) {
            			return Html::a ( '<span class="glyphicon glyphicon-eye-open"></span> View', $url, [ 'title' => Yii::t ( 'yii', 'Detail' ) ] );
            		} 
				],
				'urlCreator' => function ($action, $model, $key, $index) {
					if ($action === 'detail') {
						$url = ['detail', 'id'=>$model->id]; // your own url generation logic
						return $url;
					}
				}
				
			],
        ],
    ]); ?>

