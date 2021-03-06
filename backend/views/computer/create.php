<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Computer */

$this->title = 'Create Computer';
$this->params['breadcrumbs'][] = ['label' => 'Computers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
