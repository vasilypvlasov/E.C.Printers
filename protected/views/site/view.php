<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/**
 * @var yii\web\View $this
 * @var app\models\Page $model
 * @var \app\models\Comment $comment
 * @var yii\widgets\ActiveForm $form
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
    <div class="bs-comments">
        <?php foreach($comments as $c): ?>
        <div class="alert alert-success">
            <strong><?php echo $c->getUserName(); ?></strong>
            <br/>
            <?php echo $c->content; ?>
        </div>
        <?php endforeach; ?>
        <?php $form = ActiveForm::begin(); ?>
        <h4>Додавання коментаря:</h4>
        <?= $form->errorSummary($comment); ?>
        <?= $form->field($comment, 'content')->widget(CKEditor::className()) ?>
        <div class="form-group">
            <?= Html::submitButton('Додати коментар', ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
