<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movie".
 *
 * @property integer $movieID
 * @property string $movieName
 * @property string $movieTitle
 * @property string $movieLenght
 * @property string $plot
 * @property string $rating
 * @property string $realiseDate
 * @property integer $directorsID
 *
 * @property Director $director
 * @property MovieActor $movieActor
 * @property MovieGenre[] $movieGenres
 */
class Movie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'movie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['movieName', 'directorsID'], 'required'],
            [['realiseDate'], 'safe'],
            [['directorsID'], 'integer'],
            [['movieName', 'movieTitle', 'movieLenght', 'plot', 'rating'], 'string', 'max' => 45],
            [['directorsID'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'movieID' => 'Movie ID',
            'movieName' => 'Movie Name',
            'movieTitle' => 'Movie Title',
            'movieLenght' => 'Movie Lenght',
            'plot' => 'Plot',
            'rating' => 'Rating',
            'realiseDate' => 'Realise Date',
            'directorsID' => 'Directors ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirector()
    {
        return $this->hasOne(Director::className(), ['directorID' => 'directorsID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovieActor()
    {
        return $this->hasOne(MovieActor::className(), ['movieID' => 'movieID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovieGenres()
    {
        return $this->hasMany(MovieGenre::className(), ['movieID' => 'movieID']);
    }
}
