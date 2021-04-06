<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ambulance */

$this->title = 'Create Ambulance';
$this->params['breadcrumbs'][] = ['label' => 'Ambulances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ambulance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
