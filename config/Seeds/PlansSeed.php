<?php
use Phinx\Seed\AbstractSeed;

/**
 * Plans seed.
 */
class PlansSeed extends AbstractSeed
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
            ['id' => 10, 'name' => 'Basic', 'description' => 'Basic Plan', 'modified' => date('Y-m-d H:i:s')],
        ];

        $table = $this->table('plans');
        $table->insert($data)->save();
    }
}
