<?php

use yii\db\Migration;

/**
 * Class m210406_012518_ambulance
 */
class m210406_012518_ambulance extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ambulance}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(),
            'alamat' => $this->string(),
            'tanggal' => $this->date(),
            'jarak' => $this->decimal(),
            'harga' => $this->decimal(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210406_012518_ambulance cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210406_012518_ambulance cannot be reverted.\n";

        return false;
    }
    */
}
