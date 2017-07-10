<?php

use yii\db\Migration;

/**
 * Handles the creation of table `hotels`.
 */
class m170710_100035_create_hotels_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('hotels', [
            'id' => $this->primaryKey(),
            'country_id' => $this->integer()->notNull(),
            'hotel' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('hotels');
    }
}
