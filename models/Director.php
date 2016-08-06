<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "director".
 *
 * @property integer $directorID
 * @property string $FirstName
 * @property string $LastName
 * @property string $Birth
 * @property string $Nationality
 *
 * @property Movie $director
 */
class Director extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'director';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Birth'], 'safe'],
            [['FirstName', 'LastName', 'Nationality'], 'string', 'max' => 45]  ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'directorID' => 'Director ID',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
            'Birth' => 'Birth',
            'Nationality' => 'Nationality',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirector()
    {
        return $this->hasOne(Movie::className(), ['directorsID' => 'directorID']);
    }
}
