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
                'created' => 1671167866,
                'modified' => 1671167866,
            ],
        ];
        parent::init();
    }
}
