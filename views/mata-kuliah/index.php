<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\MataKuliah;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MataKuliahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mata Kuliahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mata-kuliah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mata Kuliah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_matkul',
            'jumlah_sks',
            'semester',
            'dosen.nama',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MataKuliah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_matkul' => $model->id_matkul]);
                }
            ],
        ],
    ]); ?>


</div>