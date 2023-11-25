<?php

namespace App\Libs;
use App\Models\Tag;

class Common
{
    //タグの名前をまとめる
    public static function get_tag_names($tags) {
        $tagName = null;
        foreach ($tags as $tag){
            $tagName = $tagName.$tag->name.",";
        }
        return $tagName;
    }

    //タグを作成してIDをまとめる
    public static function get_tag_ids($tags) {
        $tagIds = [];
        foreach ($tags as $key => $tagName){
            if(!empty($tagName)){
                $tag = Tag::firstOrCreate([
                    'name' => $tagName,
                ]);
                array_push($tagIds, $tag->id);
            }
        }
        return array_unique($tagIds);
    }

    //タグの配列を作成する
    public static function double_explode($word1, $word2, $word3, $word4, $word5, $word6, $str) {
        //HACK(あとできれいになおして)
        $return1 = array();
        $return2 = array();
        $return3 = array();
        $return4 = array();
        $return = array();

        //分割文字その1で文字列を分割
        $array = explode($word1, $str);

        //各配列を分割文字その2で分割して結合していく
        foreach ($array as $value) {
            $return1 = array_merge($return1, explode($word2, $value));
        }
        foreach ($return1 as $value) {
            $return2 = array_merge($return2, explode($word3, $value));
        }
        foreach ($return2 as $value) {
            $return3 = array_merge($return3, explode($word3, $value));
        }
        foreach ($return3 as $value) {
            $return4 = array_merge($return4, explode($word3, $value));
        }
        foreach ($return4 as $value) {
            $return = array_merge($return, explode($word4, $value));
        }
        return $return;
    }
}
