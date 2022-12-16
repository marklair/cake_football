<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PicksFixture
 */
class PicksFixture extends TestFixture
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
                'user_id' => 1,
                'game_id' => 1,
                'team_id' => 1,
                'created' => 1671167850,
                'modified' => 1671167850,
            ],
        ];
        parent::init();
    }
}
