<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\FizzBuzz */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Fizz/Buzz';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-xs-12">
            <p>Please fill out the following form:</p>
        </div>
    </div>

    <?php $form = ActiveForm::begin(['id' => 'fizzbuzz-form']); ?>

    <?= $form->field($model, 'min', ['inputTemplate' => '<div class="row"><div class="col-xs-6 col-sm-4">{input}</div></div>'])->textInput(['autofocus' => true]) ?>
    <?= $form->field($model, 'max', ['inputTemplate' => '<div class="row"><div class="col-xs-6 col-sm-4">{input}</div></div>'])->textInput() ?>

    <div class="row">
        <div class="col-xs-6 col-sm-4">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
    <?php if ($results) : ?>
        <div class="row separator">
            <div class="col-xs-12">
                <p class="results text-uppercase">Results</p>
            </div>
            <div class="col-xs-12">
                <?php
                    foreach ($results as $result) {
                        echo "<span class='badge $result'>$result</span>";
                    }
                ?>
            </div>
        </div>
    <?php endif; ?>

</div>
