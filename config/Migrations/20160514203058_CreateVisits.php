<?php
use Migrations\AbstractMigration;

class CreateVisits extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('visits');
        $table->addColumn('creator_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addForeignKey('creator_id', 'creators', 'id', [
            'delete'=> 'SET_NULL', 
            'update'=> 'NO_ACTION'
        ]);
        $table->addColumn('object_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addForeignKey('object_id', 'objects', 'id', [
            'delete'=> 'SET_NULL', 
            'update'=> 'NO_ACTION'
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('deleted', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->create();
    }
}
