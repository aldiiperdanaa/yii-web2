<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MataKuliah */

$this->title = $model->id_matkul;
$this->params['breadcrumbs'][] = ['label' => 'Mata Kuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mata-kuliah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_matkul' => $model->id_matkul], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_matkul' => $model->id_matkul], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama_matkul',
            'jumlah_sks',
            'semester',
            'dosen.nama',
        ],
    ]) ?>

</div>