<?php
/**
 * @var $this \yii\web\View
 * @var $records \app\models\Page[]
 */

use yii\helpers\Html;
?>

    <hr/>


<div>
    <?php foreach($records as $record):
        echo Html::a(Html::tag('h1',$record->title),array('/site/view','id'=>$record->id));
    endforeach; ?>
</div>