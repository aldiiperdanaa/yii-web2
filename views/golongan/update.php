<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Golongan */

$this->title = 'Update Golongan: ' . $model->id_golongan;
$this->params['breadcrumbs'][] = ['label' => 'Golongans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_golongan, 'url' => ['view', 'id_golongan' => $model->id_golongan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="golongan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
