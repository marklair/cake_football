<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GamesFixture
 */
class GamesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'home_team_id' => 1,
                'away_team_id' => 1,
                'week_id' => 1,
                'is_playoff' => 1,
                'is_championship' => 1,
                'is_superbowl' => 1,
                'home_points' => 1,
                'away_points' => 1,
                'value' => 1,
                'game_time' => '2022-12-16 05:17:13',
                'created' => 1671167833,
                'modified' => 1671167833,
            ],
        ];
        parent::init();
    }
}
