<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Jadwal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_ruangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jam_mengajar')->textInput(['maxlength' => true]) ?>

    <?php
    $matkul = ArrayHelper::map(\app\models\MataKuliah::find()
        ->asArray()->all(), 'id_matkul', 'nama_matkul');
    echo $form->field($model, 'id_matkul')
        ->dropDownList(
            $matkul,
            ['id_matkul' => 'nama_matkul']
        );
    ?>

    <?php
    $dosen = ArrayHelper::map(\app\models\Dosen::find()
        ->asArray()->all(), 'id_dosen', 'nama');
    echo $form->field($model, 'id_dosen')
        ->dropDownList(
            $dosen,
            ['id_dosen' => 'nama']
        );
    ?>x

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>