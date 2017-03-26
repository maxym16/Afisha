<?php

namespace app\modules\admin\models;

use Yii;
//use yii\db\Query;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property string $date
 * @property integer $showes
 * @property integer $platform
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    public function getShowes(){
        return $this->hasOne(Showes::className(), ['id'=>'showes']);
    }

    public function getPlatform(){
        return $this->hasOne(Platform::className(), ['id'=>'platform']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'showes', 'platform'], 'required'],
            [['showes.name'], 'string', 'max' => 255],
            [['date'], 'safe'],
            [['showes', 'platform'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Дата',
            'showes' => 'Шоу',
            'showes.name' => 'Название Шоу',
            'platform' => 'Площадка',
        ];
    }
}
