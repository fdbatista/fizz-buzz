<?php

use app\models\FizzBuzz;
use Codeception\Test\Unit;

class BuzzNumbersTest extends Unit {

    /**
     * @var UnitTester
     */
    protected $tester;

    protected function _before() {
        
    }

    protected function _after() {
        
    }

    // tests
    public function testCheckIfTwentyReturnsBuzz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(20))->equals('Buzz');
    }
    
    public function testCheckIfFortyReturnsBuzz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(40))->equals('Buzz');
    }
    
    public function testCheckIfFiftyFiveReturnsBuzz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(55))->equals('Buzz');
    }
    
    public function testCheckIfEightyReturnsBuzz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(80))->equals('Buzz');
    }
    
    public function testCheckIfOneHundredReturnsBuzz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(100))->equals('Buzz');
    }

}
