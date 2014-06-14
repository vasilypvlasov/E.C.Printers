<?php

use yii\db\Schema;

class m140614_212423_add_page_id_to extends \yii\db\Migration
{
    public function up()
    {
        $this->renameTable('comments', 'comment');
        $this->addColumn('comment', 'page_id', 'integer');
    }

    public function down()
    {
        $this->dropColumn('comment', 'page_id');
        $this->renameTable('comment', 'comments');
        return true;
    }
}
