<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="category-form">

<?php
// echo "<pre>";
// print_r($model);
// echo "</pre>";
?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'catagory_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
