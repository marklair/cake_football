<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WeeksFixture
 */
class WeeksFixture extends TestFixture
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
                'season_id' => 1,
                'week_number' => 1,
                'value' => 1,
                'is_post_season' => 1,
                'week_start' => '2022-12-16 05:18:36',
                'week_end' => '2022-12-16 05:18:36',
                'created' => 1671167916,
                'modified' => 1671167916,
            ],
        ];
        parent::init();
    }
}
