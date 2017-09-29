<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.09.2017
 * Time: 20:26
 */

namespace app\models;


use yii\db\ActiveRecord;

class Specs extends ActiveRecord
{
    public function addToSpecs($box){
        $_SESSION['specs'][$box->id] = [
            'name' => $box->name,
            'image' => $box->image,
            'ram' => $box->specification->ram,
            'rom' => $box->specification->rom,
            'wifi' => $box->specification->wifi,
            'bluetooth' => $box->specification->bluetooth,
            'android' => $box->specification->android,
            'cpu' => $box->chipset->cpu,
            'gpu' => $box->chipset->gpu,
            'codec' => $box->chipset->codec,
            'core' => $box->chipset->core
        ];
    }

    public function delFromSpecs($id){
        unset($_SESSION['specs'][$id]);
    }
}