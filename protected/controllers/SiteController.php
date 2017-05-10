<?php
class SiteController extends Controller
{
	
	public function actionIndex()
	{
		$order = 'ok!';
		//echo 333;exit;
		$this->render('index', array(
			'order' => $order,
		));
	}

	public function actionData()
	{
		$sql = "select email, user_name from ec_users ";
		$data = Yii::app()->db->createCommand($sql)->queryAll();
		
		$result = CJSON::encode($data);
		echo $result;
	}

	
	public function actionError()
	{
		
	}


}