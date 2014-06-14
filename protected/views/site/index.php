<?php use yii\helpers\Html; ?>

<hr />

<?php if(Yii::$app->session->hasFlash('error')): ?>
<div class="alert alert-error">
<?php echo Yii::$app->session->getFlash('error'); ?>
</div>
<?php endif; ?>

<?php if(Yii::$app->session->hasFlash('success')): ?>
<div class="alert alert-success">
<?php echo Yii::$app->session->getFlash('success'); ?>
</div>
<?php endif; ?>