<?php

use yii\db\Schema;

class m140614_161528_create_all_tables extends \yii\db\Migration
{
    public function up()
    {
    	$path = Yii::getAlias('@app/data/') . 'schema.sql';
    	$content = file_get_contents($path);
    	foreach (explode(';', $content) as $key => $value) {
    		try {
    			$this->execute($value);
    		} catch (Exception $ex) {
    			echo 'Error in ' . $value; 
    		}
    	}
    	$path = Yii::getAlias('@app/data/') . 'data.sql';
    	$content = file_get_contents($path);
    	foreach (explode(';', $content) as $key => $value) {
    		try {
    			$this->execute($value);
    		} catch (Exception $ex) {
    			echo 'Error in ' . $value; 
    		}
    	}
    }

    public function down()
    {
        $this->execute('DROP TABLE `comments`, `page`, `user`;');
        return true;
    }
}
