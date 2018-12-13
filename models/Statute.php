<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "statute".
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 */
class Statute extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'statute';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'body'], 'required'],
            [['title', 'body'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
        ];
    }
}
