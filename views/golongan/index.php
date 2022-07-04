<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Golongan;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GolonganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Golongans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golongan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Golongan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'golongan',
            'gaji',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Golongan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_golongan' => $model->id_golongan]);
                }
            ],
        ],
    ]); ?>


</div>