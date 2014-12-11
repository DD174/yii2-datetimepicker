<?php

namespace vakorovin\datetimepicker;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\JsExpression;
use yii\web\View;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class Datetimepicker extends InputWidget
{

	public $options=[];

	public function init(){
		parent::init();
        Html::addCssClass($this->options, 'form-control');
	}

	public function run(){
		Assets::register($this->getView());

		if ($this->hasModel()) {
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }

		$options="";
		if (!empty($this->options)){
			$options.="{\n";
			foreach ((array) $this->options as $param=>$value){
				$options.="  {$param}: '{$value}',\n";
			}
			$options.="}\n";
		}

		$JavaScript = "jQuery('";
		$JavaScript .= '#'.$this->options['id'];
		$JavaScript .= "').datetimepicker({$options});";

		$this->getView()->registerJs($JavaScript, View::POS_END);
	}
}
