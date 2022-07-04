<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\MataKuliah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mata-kuliah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_matkul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_sks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'semester')->textInput(['maxlength' => true]) ?>

    <?php
    $dosen = ArrayHelper::map(\app\models\Dosen::find()
        ->asArray()->all(), 'id_dosen', 'nama');
    echo $form->field($model, 'id_dosen')
        ->dropDownList(
            $dosen,
            ['id_dosen' => 'nama']
        );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>