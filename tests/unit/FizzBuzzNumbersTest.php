<?php

use app\models\FizzBuzz;
use Codeception\Test\Unit;

class FizzBuzzNumbersTest extends Unit {

    /**
     * @var UnitTester
     */
    protected $tester;

    protected function _before() {
        
    }

    protected function _after() {
        
    }

    // tests
    public function testCheckIfFifteenReturnsFizzbuzz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(15))->equals('FizzBuzz');
    }
    
    public function testCheckIfThirtyReturnsFizzbuzz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(30))->equals('FizzBuzz');
    }
    
    public function testCheckIfFortyFiveReturnsFizzbuzz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(45))->equals('FizzBuzz');
    }
    
    public function testCheckIfSixtyReturnsFizzbuzz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(60))->equals('FizzBuzz');
    }
    
    public function testCheckIfSeventyFiveReturnsFizzbuzz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(75))->equals('FizzBuzz');
    }
    
}
