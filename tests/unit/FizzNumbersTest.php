<?php

use app\models\FizzBuzz;
use Codeception\Test\Unit;

class FizzNumbersTest extends Unit {

    /**
     * @var UnitTester
     */
    protected $tester;

    protected function _before() {
        
    }

    protected function _after() {
        
    }

    // tests
    public function testCheckIfNineReturnsFizz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(9))->equals('Fizz');
    }
    
    public function testCheckIfTwentySevenReturnsFizz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(27))->equals('Fizz');
    }
    
    public function testCheckIfFiftyFourReturnsFizz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(54))->equals('Fizz');
    }
    
    public function testCheckIfEightyOneReturnsFizz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(81))->equals('Fizz');
    }
    
    public function testCheckIfNinetyThreeReturnsFizz() {
        $model = new FizzBuzz(['min' => 1, 'max' => 100]);
        expect($model->processNumber(93))->equals('Fizz');
    }

}
