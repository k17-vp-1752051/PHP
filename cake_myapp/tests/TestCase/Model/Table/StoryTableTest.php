<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StoryTable Test Case
 */
class StoryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StoryTable
     */
    protected $Story;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Story',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Story') ? [] : ['className' => StoryTable::class];
        $this->Story = TableRegistry::getTableLocator()->get('Story', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Story);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
