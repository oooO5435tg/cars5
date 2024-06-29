<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\User $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<h1>Мои заявки</h1>

<ul>
    <?php foreach ($orders as $order):?>
        <li>
        <?php if ($order->status == 0):?>
            <?= 'Отсутствует'?>
        <?php elseif ($order->status == 1):?>
            <?= 'Машину можно забрать'?>
        <?php endif;?>
            (Заявка на книгу: <?= $order->car->mark?> - <?= $order->car->engine_size?>)
        </li>
    <?php endforeach;?>
</ul>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success">
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

</div>
