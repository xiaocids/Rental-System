<?php
/**
 * @var yii\web\View $this
 */

use yii\grid\GridView;

$this->title = 'Carrier';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Carrier</h1>

<legend><h3>Bergabunglah Bersama Kami</h3></legend>

<p>Kami membuka peluang dan kesempatan bagi tenaga yang berkompeten dan berkualifikasi untuk bergabung bersama kami dalam rangka peningkatan dan perluasan pelayanan kami. Berikut posisi yang yang kami tawarkan:</p>

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
            'valid_until',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

