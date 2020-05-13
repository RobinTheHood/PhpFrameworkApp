<?php
class CreateUserMigration extends \RobinTheHood\Migration\ActiveRecord
{
    public function up()
    {
        $this->createTable('user', [
            ['id', 'int(11) not null auto_increment', true],
            ['created', 'datetime'],
            ['changed', 'datetime'],
            ['mail', 'varchar(255)'],
            ['password', 'varchar(255)']
        ]);
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
