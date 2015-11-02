<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 27.10.2015
 * Time: 15:50
 */

namespace app\models;

use yii\base\Model;

class EntryForm extends Model{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}