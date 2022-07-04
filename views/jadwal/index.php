<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Jadwal;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JadwalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jadwals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jadwal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_ruangan',
            'jam_mengajar',
            'matkul.nama_matkul',
            'dosen.nama',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Jadwal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_ruangan' => $model->id_ruangan]);
                }
            ],
        ],
    ]); ?>


</div>