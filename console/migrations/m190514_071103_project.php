<?php

use yii\db\Migration;

/**
 * Class m190514_071103_project
 */
class m190514_071103_project extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190514_071103_project cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey()->comment('自增id'),
            'title' => $this->string(50)->notNull()->comment('标题'),
            'content' => $this->integer()->notNull()->comment('内容'),
            'sort' => $this->integer()->defaultValue(0)->comment('排序'),
            'created_at' => $this->integer()->notNull()->comment('创建时间'),
            'updated_at' => $this->integer()->notNull()->comment('更新时间'),
        ]);

        $this->createTable('project_category', [
            'id' => $this->primaryKey()->comment('自增id'),
            'name' => $this->string(50)->notNull()->comment('分类名称'),
            'pid' => $this->integer()->notNull()->comment('父id')
        ]);
    }

    public function down()
    {
        $this->dropTable('project');
        $this->dropTable('project_category');
    }

}
