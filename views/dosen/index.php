<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Dosen;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DosenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dosens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dosen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama',
            'nip',
            'alamat',
            'status.kode_status',
            'golongan.golongan',
            //'id_golongan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Dosen $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_dosen' => $model->id_dosen]);
                }
            ],
        ],
    ]); ?>


</div>