<?php

class FizzBuzzCest {

    public function _before(FunctionalTester $I) {
        
    }

    public function _after(FunctionalTester $I) {
        
    }

    // tests
    public function submitEmtpyForm(FunctionalTester $I) {
        $I->amOnPage('/');
        $I->click('FizzBuzz');
        $I->submitForm('#fizzbuzz-form', []);
        $I->expectTo('See validation errors');
        $I->see('Min cannot be blank');
        $I->see('Max cannot be blank');
    }
    
    public function submitFormWithoutUpperLimit(FunctionalTester $I) {
        $I->amOnPage('/');
        $I->click('FizzBuzz');
        $I->fillField('#fizzbuzz-min', 1);
        $I->click('Submit');
        $I->expectTo('See validation errors');
        $I->see('Max cannot be blank');
    }
    
    public function submitFormWithInvalidRange(FunctionalTester $I) {
        $I->amOnPage('/');
        $I->click('FizzBuzz');
        $I->fillField('#fizzbuzz-min', 1);
        $I->fillField('#fizzbuzz-max', 101);
        $I->click('Submit');
        $I->expectTo('See invalid range error');
        $I->see('Invalid interval');
    }
    
    public function submitValidForm(FunctionalTester $I) {
        $I->amOnPage('/');
        $I->click('FizzBuzz');
        $I->fillField('#fizzbuzz-min', 1);
        $I->fillField('#fizzbuzz-max', 100);
        $I->click('Submit');
        $I->expectTo('See results in page');
        $I->see('RESULTS', '.results');
    }

}
