<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BiblicalStudiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BiblicalStudiesTable Test Case
 */
class BiblicalStudiesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.biblical_studies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BiblicalStudies') ? [] : ['className' => 'App\Model\Table\BiblicalStudiesTable'];
        $this->BiblicalStudies = TableRegistry::get('BiblicalStudies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BiblicalStudies);

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
}
