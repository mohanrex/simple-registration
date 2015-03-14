<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property integer $id
 * @property string $name
 * @property string $rollno
 * @property string $department
 * @property string $year
 * @property integer $phone_num
 * @property string $email_id
 * @property integer $registered_at
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'rollno', 'department', 'year', 'phone_num', 'email_id' ], 'required'],
            [['phone_num', 'registered_at'], 'integer'],
            [['name', 'department', 'email_id'], 'string', 'max' => 255],
            [['rollno'], 'string', 'max' => 8],
            [['year'], 'string', 'max' => 45],
            [['email_id'],'email']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'rollno' => 'Rollno',
            'department' => 'Department',
            'year' => 'Year',
            'phone_num' => 'Phone Number',
            'email_id' => 'Email',
            'registered_at' => 'Registered At',
        ];
    }
}
