<?php

use yii\db\Migration;

/**
 * Handles the creation of table `countres`.
 */
class m170710_100102_create_countres_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('countres', [
            'id' => $this->primaryKey(),
            'country' => $this->string()->notNull(),
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('countres');
    }
}
