<?php
use Phinx\Seed\AbstractSeed;

/**
 * Roles seed.
 */
class RolesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 10, 'name' => 'Admin', 'description' => 'Admins Role', 'modified' => date('Y-m-d H:i:s')],
            ['id' => 20, 'name' => 'Manager', 'description' => 'Managers Role', 'modified' => date('Y-m-d H:i:s')],
            ['id' => 30, 'name' => 'Creator', 'description' => 'Creators Role', 'modified' => date('Y-m-d H:i:s')],
        ];

        $table = $this->table('roles');
        $table->insert($data)->save();
    }
}
