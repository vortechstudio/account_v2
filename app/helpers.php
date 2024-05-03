<?php
if(!function_exists('current_url')) {
    function current_url($uri) {
        if(URL::current() == config('app.url').$uri) {
            return 'active';
        } else {
            return '';
        }
    }
}
