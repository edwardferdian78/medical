<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Ambulance */
/* @var $form yii\widgets\ActiveForm */

$this->registerJsFile(
    'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->registerJsFile(
    'https://api.mqcdn.com/sdk/place-search-js/v1.0.0/place-search.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->registerJsFile(
    'https://www.mapquestapi.com/sdk/leaflet/v2.s/mq-map.js?key=GG9Q0qO9MQ0phAsdtFOGKZDAZfGEz0AB',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->registerJsFile(
    'https://www.mapquestapi.com/sdk/leaflet/v2.s/mq-routing.js?key=GG9Q0qO9MQ0phAsdtFOGKZDAZfGEz0AB',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->registerJsFile(
    "@web/js/index.js",
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->registerJsFile(
    "@web/js/seachLoc.js",
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

?>

<div class="row">
    <div class="col-lg-8">
        <input type="search" id="place-search-input" placeholder="Start Searching..." />
        <div style="height: 500px;" id="mapid"></div>
        <button type="button" onclick="getDistanceByCoordinat()" class="btn btn-success">Pilih Lokasi Saat Ini
        </button>
    </div>

    <div class="col-lg-4">
        <div class="ambulance-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
            <button type="button" onclick="searchLocation()" class="btn btn-success">Pilih Lokasi Saat Ini
            </button>
            <?= $form->field($model, 'tanggal')->textInput() ?>

            <?= $form->field($model, 'jarak')->textInput() ?>

            <?= $form->field($model, 'harga')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>