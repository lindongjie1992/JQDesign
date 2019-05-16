<?php

use yii\db\Migration;

/**
 * Class m190514_065941_article
 */
class m190514_065941_article extends Migration
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
        echo "m190514_065941_article cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('article_category', [
            'id' => $this->primaryKey()->comment('自增id'),
            'name' => $this->string(50)->notNull()->comment('分类名称'),
            'pid' => $this->integer()->notNull()->comment('父id')
        ]);
        $this->batchInsert('article_category',['id','name','pid'],[
            [null,'品牌设计',0],
            [null,'Logo设计',1],
            [null,'VI设计',1],
        ]);

        $this->createTable('article', [
            'id' => $this->primaryKey()->notNull()->comment('自增id'),
            'cid' => $this->integer()->notNull()->comment('分类id'),
            'title' => $this->string(50)->notNull()->comment('标题'),
            'description' => $this->string(100)->comment('描述'),
            'content' => $this->text()->notNull()->comment('内容'),
            'sort' => $this->integer()->defaultValue(0)->comment('排序'),
            'created_at' => $this->integer()->notNull()->comment('创建时间'),
            'updated_at' => $this->integer()->notNull()->comment('更新时间'),
        ]);
    }

    public function down()
    {
        $this->dropTable('article');
        $this->dropTable('article_category');
    }

}
