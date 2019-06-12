<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class FizzBuzz extends Model {

    public $min;
    public $max;

    public function rules() {
        return [
                [['min', 'max'], 'required'],
                [['min', 'max'], 'integer'],
                ['max', 'compare', 'compareAttribute' => 'min', 'operator' => '>', 'type' => 'number'],
                ['max', 'validateInterval'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels() {
        return [
            'min' => 'Min',
            'max' => 'Max',
        ];
    }

    public function validateInterval($attribute, $params) {
        if ($this->max - $this->min !== 99) {
            $this->addError('max', 'Invalid interval.');
        }
    }
    
    public function processInterval() {
        $min = $this->min;
        $max = $this->max;
        $res = [];
        for($i = $min; $i <= $max; $i++) {
            $res[] = $this->processNumber($i);
        }
        return $res;
    }
    
    public function processNumber(int $number) {
        return ($number % 15 === 0 ? 'FizzBuzz' : ($number % 3 === 0 ? 'Fizz' : ($number % 5 === 0 ? 'Buzz' : $number)));
    }

}
