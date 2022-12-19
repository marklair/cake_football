<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class AddSiteToTeams extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('teams');
        $table->addColumn('website', 'string', [
            'limit' => 120,
            'null' => false,
        ]);
        $table->addColumn('division', 'string', [
            'limit' => 5,
            'null' => false,
        ]);
        $table->addColumn('conference', 'string', [
            'limit' => 3,
            'null' => false,
        ]);
        $table->update();
    }
}
