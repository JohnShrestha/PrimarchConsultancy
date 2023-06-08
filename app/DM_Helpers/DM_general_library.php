<?php
use App\Model\Dcms\Eloquent\DM_Post;

if(!function_exists('dm_crumb')){
    function dm_crumb($segment_1, $segment_2, $lang_id) {
        // dd($segment_1);
       $data = DM_Post::getType($segment_1, $segment_2, $lang_id);
    //    dd($data);
       return $data;
    } 
}

