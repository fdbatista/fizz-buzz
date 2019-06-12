<?php

use app\models\FizzBuzz;
use Codeception\Test\Unit;

class CreateObjectTest extends Unit {

    /**
     * @var UnitTester
     */
    protected $tester;

    protected function _before() {
        
    }

    protected function _after() {
        
    }

    // tests
    public function testCreateEmptyObject() {
        $model = new FizzBuzz();
        $this->assertFalse($model->validate());
    }

    public function testCreateObjectWithoutMinLimit() {
        $model = new FizzBuzz(['max' => 100]);
        $this->assertFalse($model->validate());
    }

    public function testCreateObjectWithoutMaxLimit() {
        $model = new FizzBuzz(['min' => 1]);
        $this->assertFalse($model->validate());
    }

    public function testCreateObjectWithInvalidInterval() {
        $model = new FizzBuzz(['min' => 1, 'max' => 50]);
        $this->assertFalse($model->validate());
    }

    public function testCreateObjectWithValidInterval() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        $this->assertTrue($model->validate());
    }
    
    public function testProcessValidInterval() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        $result = $model->processInterval();
        $this->assertCount(100, $result);
    }

}
