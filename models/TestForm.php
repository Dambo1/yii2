<?php

namespace app\models;
use yii\db\ActiveRecord;


class TestForm extends ActiveRecord
{

//    public $name;
//    public $email;
//    public $text;

public static function tableName()
{
    return 'message';
}


    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Сообщение'
        ];
    }

    public function rules()
    {
        return [
            [['name', 'email', 'text'], 'required'],
            [['name'], 'string', 'length' => [3,10]],
            [['text'], 'string', 'length' => [10,255]],
        ];
    }

}