<?php

namespace App\Models;

class Student{
    public static function all(){
        $arr=[
            [
                'id'=> 1,
                'name'=>'Taha'
            ],
            [
                'id'=> 2,
                'name'=>'Ahmed'
            ],
            [
                'id'=> 3,
                'name'=>'Abd-Elhamed'
            ],
            [
                'id'=> 4,
                'name'=>'Elgamal'
            ]
            ];

      return $arr ;
    }
}