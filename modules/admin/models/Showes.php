<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "showes".
 *
 * @property integer $id
 * @property string $name
 * @property string $img
 * @property string $descript
 * @property string $keywords
 * @property string $description
 */
class Showes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'showes';
    }

    public function getEventsh(){
        return $this->hasMany(Events::className(), ['showes'=>'id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'descript'], 'required'],
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
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
}
