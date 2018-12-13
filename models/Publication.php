<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "publication".
 *
 * @property int $id
 * @property string $title
 * @property string $spoiler
 * @property string $body
 * @property string $section
 * @property int $status
 */
class Publication extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'publication';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'spoiler', 'section'], 'required'],
            [['body','spoiler'], 'string'],
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 150],
            [['section'], 'string', 'max' => 50],
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
            'spoiler' => 'Spoiler',
            'body' => 'Body',
            'section' => 'Section',
            'status' => 'Status',
        ];
    }
}
