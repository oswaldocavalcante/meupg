<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BiblicalClassesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BiblicalClassesTable Test Case
 */
class BiblicalClassesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.biblical_classes',
        'app.pgs',
        'app.leaders',
        'app.users',
        'app.secretaries',
        'app.teachers',
        'app.auxiliars'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BiblicalClasses') ? [] : ['className' => 'App\Model\Table\BiblicalClassesTable'];
        $this->BiblicalClasses = TableRegistry::get('BiblicalClasses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BiblicalClasses);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
