<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $Username
 * @property string $FirstName
 * @property string $LastName
 * @property string $EmailID
 * @property string $Password
 * @property string $Role
 */
class UserTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Username', 'FirstName', 'LastName', 'EmailID', 'Password', 'Role'], 'required'],
            [['Username', 'Role'], 'string', 'max' => 10],
            [['FirstName', 'LastName', 'EmailID'], 'string', 'max' => 20],
            [['Password'], 'string', 'max' => 15],
            [['Username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Username' => 'Username',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
            'EmailID' => 'Email ID',
            'Password' => 'Password',
            'Role' => 'Role',
        ];
    }
}
