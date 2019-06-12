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

}
