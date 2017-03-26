<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "platform".
 *
 * @property integer $id
 * @property string $name
 * @property string $img
 * @property string $descript
 * @property integer $sort
 * @property string $keywords
 * @property string $description
 */
class Platform extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'platform';
    }

    public function getEventpl(){
        return $this->hasMany(Events::className(), ['platform'=>'id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'descript'], 'required'],
            [['sort'], 'integer'],
            [['name', 'img', 'descript', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'img' => 'Изображение',
            'descript' => 'Описание',
            'sort' => 'Сортировка',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
}
