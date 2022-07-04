<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Dosen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dosen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?php
    $status = ArrayHelper::map(\app\models\Status::find()
        ->asArray()->all(), 'id_status', 'status_ikatan_kerja');
    echo $form->field($model, 'id_status')
        ->dropDownList(
            $status,
            ['id_status' => 'status_ikatan_kerja']
        );
    ?>

    <?php
    $golongan = ArrayHelper::map(\app\models\Golongan::find()
        ->asArray()->all(), 'id_golongan', 'golongan');
    echo $form->field($model, 'id_golongan')
        ->dropDownList(
            $golongan,
            ['id_golongan' => 'golongan']
        );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>