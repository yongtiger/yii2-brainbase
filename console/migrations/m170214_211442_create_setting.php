<?php
use yii\db\Migration;
class m170214_211442_create_setting extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%setting}}', [
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
            'category' => 'varchar(255) COLLATE utf8_unicode_ci NOT NULL',
            'key' => 'varchar(255) COLLATE utf8_unicode_ci NOT NULL',
            'value' => 'text COLLATE utf8_unicode_ci',
            'type' => "varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'string'",
            'input' => "varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'textInput'",
            'items' => 'varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL',
            'options' => 'varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL',
            'label_options' => 'varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL',
            'hint' => 'varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL',
            'hint_options' => 'varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL',
            'PRIMARY KEY (`id`)',
            'UNIQUE KEY `unique-category-key` (`category`,`key`) USING BTREE',
        ], $tableOptions);
        
        ///Demo data
        $this->insert('{{%setting}}',['id'=>'1','category'=>'site','key'=>'name','value'=>'My Application','type'=>'string','input'=>'textInput','items'=>null,'options'=>'','label_options'=>'','hint'=>'Setup <b>site name</b>.','hint_options'=>'']);
        $this->insert('{{%setting}}',['id'=>'2','category'=>'site','key'=>'url','value'=>'http://www.brainbook.cc','type'=>'string','input'=>'textInput','items'=>null,'options'=>'','label_options'=>'','hint'=>'Setup <b>site url</b>.','hint_options'=>'']);
        $this->insert('{{%setting}}',['id'=>'3','category'=>'site','key'=>'adminEmail','value'=>'admin@example.com','type'=>'string','input'=>'textInput','items'=>null,'options'=>'','label_options'=>'','hint'=>'Setup <b>admin email</b>.','hint_options'=>'']);
        $this->insert('{{%setting}}',['id'=>'4','category'=>'site','key'=>'serviceEmail','value'=>'service@example.com','type'=>'string','input'=>'textInput','items'=>null,'options'=>'','label_options'=>'','hint'=>'Setup <b>service email</b>.','hint_options'=>'']);

    }
    public function down()
    {
        $this->dropTable('{{%setting}}');
    }
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    public function safeDown()
    {
    }
    */
}