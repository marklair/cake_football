<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WeeksTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WeeksTable Test Case
 */
class WeeksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WeeksTable
     */
    protected $Weeks;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Weeks',
        'app.Seasons',
        'app.Games',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Weeks') ? [] : ['className' => WeeksTable::class];
        $this->Weeks = $this->getTableLocator()->get('Weeks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Weeks);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\WeeksTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\WeeksTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
