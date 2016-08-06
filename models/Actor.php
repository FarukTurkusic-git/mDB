<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actor".
 *
 * @property integer $actorID
 * @property string $FirstName
 * @property string $LastName
 * @property string $Nationality
 * @property string $Birth
 *
 * @property MovieActor $movieActor
 */
class Actor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['actorID'], 'integer'],
            [['Birth'], 'safe'],
            [['FirstName', 'LastName', 'Nationality'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'actorID' => 'Actor ID',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
            'Nationality' => 'Nationality',
            'Birth' => 'Birth',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovieActor()
    {
        return $this->hasOne(MovieActor::className(), ['actorID' => 'actorID']);
    }
}
