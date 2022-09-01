<?php

namespace app\controllers;
use app\models\Produto;
use yii\web\Request;

class MlivreController extends \yii\web\Controller
{
    public function actionIndex2()
    {
        return $this->render('index');
    }

    public function actionIndex()
    {
        $model = new Produto();
        return $this->render('index', ['model' => $model]);
    }

    public function actionProcura(Request $request)
    {
        $get = $request->get(); 
        $idProduto = $get['Produto']['idProduto'];
        
        $url_feed = "https://api.mercadolibre.com/items/$idProduto";
      
        $head = array('Authorization: Bearer $ACCESS_TOKEN');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url_feed);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        var_dump($result,$url_feed,$ch,$err);

        // curl -X GET -H 'Authorization: Bearer APP_USR-12345678-031820-X-12345678' https://api.mercadolibre.com/items/MLB1828680414

        // return $this->render('view');
    }

    
}
