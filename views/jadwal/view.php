<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Jadwal */

$this->title = $model->id_ruangan;
$this->params['breadcrumbs'][] = ['label' => 'Jadwals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jadwal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_ruangan' => $model->id_ruangan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_ruangan' => $model->id_ruangan], [
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
            'nama_ruangan',
            'jam_mengajar',
            'matkul.nama_matkul',
            'dosen.nama',
        ],
    ]) ?>

</div>