<?php

namespace app\models;

use Yii;
use app\models\Category;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property double $price
 * @property double $price_last
 * @property double $price_percent
 * @property double $together
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $category_id
 * @property int $like
 * @property int $count_view
 * @property int $number
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'title', 'description', 'image', 'category_id', 'number'], 'required'],
            [['price', 'price_last', 'price_percent', 'together'], 'number'],
            [['description'], 'string'],
            [['like', 'count_view', 'number'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['title', 'image'], 'string', 'max' => 255],
            [['category_id'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'price_last' => 'Price Last',
            'price_percent' => 'Price Percent',
            'together' => 'Together',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'category_id' => 'Category ID',
            'like' => 'Like',
            'count_view' => 'Count View',
            'number' => 'Number',
        ];
    }
    public function getCategory(){
        return $this->hasOne(Category::className(),['id'=>'category_id']);
    }
}
