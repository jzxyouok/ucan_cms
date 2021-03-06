<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Adminuser */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => $model->username,
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Adminusers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="adminuser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
