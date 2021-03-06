<?php

namespace common\models;

use backend\models\User;
use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property int $category_id
 * @property string $img
 * @property string $content
 * @property string $time
 *
 * @property Category $category
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category_id', 'img', 'content'], 'required'],
            [['category_id'], 'integer'],
            [['content'], 'string'],
            [['time'], 'safe'],
            [['title', 'img'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category_id' => 'Category ID',
            'img' => 'Img',
            'content' => 'Content',
            'time' => 'Time',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getUser1()
    {
        return $this->hasMany(User::className(), ['id' => 'author']);
    }
}
