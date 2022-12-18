<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class AddTables extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('users')
            ->addColumn('username', 'string')
            ->addColumn('email', 'string')
            ->addColumn('firstname', 'string')
            ->addColumn('lastname', 'string')
            ->addColumn('password', 'string')
            ->addColumn('is_superuser', 'boolean', ['default' => false])
            ->addColumn('role', 'string')
            ->addTimestamps('created', 'modified')
            ->create();

        $this->table('teams')
            ->addColumn('logo', 'string')
            ->addColumn('name', 'string')
            ->addTimestamps('created', 'modified')
            ->create();

        $this->table('games')
            ->addColumn('home_team_id', 'integer')
            ->addColumn('away_team_id', 'integer')
            ->addColumn('week_id', 'integer')
            ->addColumn('is_playoff', 'boolean', ['default' => false])
            ->addColumn('is_championship', 'boolean', ['default' => false])
            ->addColumn('is_superbowl', 'boolean', ['default' => false])
            ->addColumn('home_points', 'integer')
            ->addColumn('away_points', 'integer')
            ->addColumn('value', 'integer')
            ->addColumn('game_time', 'datetime')
            ->addTimestamps('created', 'modified')
            ->create();

        $this->table('weeks')
            ->addColumn('season_id', 'integer')
            ->addColumn('week_number', 'integer')
            ->addColumn('value', 'integer', ['default' => 10])
            ->addColumn('is_post_season', 'boolean', ['default' => false])
            ->addColumn('week_start', 'datetime')
            ->addColumn('week_end', 'datetime')
            ->addTimestamps('created', 'modified')
            ->create();

        $this->table('seasons')
            ->addColumn('year', 'integer')
            ->addTimestamps('created', 'modified')
            ->create();

        $this->table('picks')
            ->addColumn('user_id', 'integer')
            ->addColumn('game_id', 'integer')
            ->addColumn('team_id', 'integer')
            ->addTimestamps('created', 'modified')
            ->create();
    }
}
