<?php
namespace App\Repository\Transformers;
class TestTransformer extends Transformer{
    public function transform($test){
        return [
            'id' => $test->id,
            'name' => $test->name,
        ];
    }
}