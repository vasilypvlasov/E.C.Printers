<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Page $model
 */

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr/>
    <h3><?= "Теоретичний матеріал:" ?></h3>
    <p><?= $model -> content ?></p>
    <hr/>
    <h3><?= "Цікаві посилання:" ?></h3>
    <p><?= $model -> links ?></p>
    <?php
    /** @var \app\models\Comment[] $comments */
    $comments = $model->getComments()->all();
    ?>
    <?php if ($comments): ?>
        <div class="bs-comments">
            <?php foreach($comments as $comment): ?>
            <div class="alert alert-success">
                <strong><?php echo $comment->getUserName(); ?></strong>
                <br/>
                <?php echo $comment->content; ?>
            </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
