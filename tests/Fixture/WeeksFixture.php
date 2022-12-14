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
                'week_start' => '2022-12-14 03:21:09',
                'week_end' => '2022-12-14 03:21:09',
                'created' => '2022-12-14 03:21:09',
                'modified' => '2022-12-14 03:21:09',
            ],
        ];
        parent::init();
    }
}
