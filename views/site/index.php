<?php

use yii\helpers\Html;
use app\models\Orders;
/** @var yii\web\View $this */

$this->title = 'Cars';
?>
<div class="site-index">

<div class="jumbotron text-center bg-transparent mt-5 mb-5">
    <h1>Картотека автомагазина</h1>
</div>

<div class="body-content">



<?php foreach ($cars as $car) { ?>
<div>
    <h2><?= $car->id ?></h2>
    <p>Марка: <?= $car->mark ?></p>
    <p>Объем двигателя: <?= $car->engine_size ?></p>
    <p>Год выпуска: <?= $car->date_release ?></p>
    <p>Количество: <?= $car->quantity ?></p>
    <p><?php
        $order = Orders::findOne(['car_id' => $car->id, 'owner_id' => Yii::$app->user->id]);
        if ($order) {
            echo Html::a('Отменить заказ', ['/cars/order', 'id' => $car->id], ['class' => 'btn btn-outline-warning']);
        } elseif (!Yii::$app->user->isGuest){
            echo Html::a('Заказать', ['/cars/order', 'id' => $car->id], ['class' => 'btn btn-outline-primary']);
        } else {
            echo Html::a('Войдите чтобы заказать книгу', ['/site/login'], ['class' => 'btn btn-outline-primary']);
        }
    ?></p>
</div>
<hr>
<?php } ?>

</div>
</div>