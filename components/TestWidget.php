<?php
namespace app\components;
use yii\base\Widget;
use app\models\Category;

class TestWidget extends Widget{
    public $data;
    public $tree;
    public function init()
    {
        parent::init();
    }
    public function run()
    {
        $this->data=Category::find()->asArray()->indexBy('id')->all();
        debug($this->getTree());
    }
    public function getTree(){
        $tree=[];
        foreach ($this->data as $id=>&$node){
            if(!$node['part']){
                $tree[$id]= &$node;
            }else{
                $this->data[$node['part']]['childs'][$node['id']]=&$node;
            }
        }
        return $tree;
    }
}