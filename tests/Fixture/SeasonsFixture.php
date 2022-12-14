<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SeasonsFixture
 */
class SeasonsFixture extends TestFixture
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
                'year' => 1,
                'created' => '2022-12-14 03:20:44',
                'modified' => '2022-12-14 03:20:44',
            ],
        ];
        parent::init();
    }
}
