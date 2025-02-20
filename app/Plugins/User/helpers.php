<?php
if(!function_exists("auth")){
    function auth(): \App\Plugins\User\src\Auth
    {
        return new \App\Plugins\User\src\Auth();
    }
}

if(!function_exists("user_avatar")){
    function user_avatar($email,$avatar=null){
        if($avatar){
            return $avatar;
        }
        return get_options("theme_common_gavatar","https://cn.gravatar.com/avatar/").md5($email);
    }
}

if(!function_exists("user_notice")){
    function user_notice(): \App\Plugins\User\src\Lib\UserNotice
    {
        return new \App\Plugins\User\src\Lib\UserNotice();
    }
}

if(!function_exists("user_DeCheckClass")){
    function user_DeCheckClass($topic_tag,$userClassId):bool{
        if(!$topic_tag->userClass){
            return false;
        }
        $data = json_decode($topic_tag->userClass, true, 512, JSON_THROW_ON_ERROR);
        return in_array($userClassId, $data,true);
    }
}

if(!function_exists("user_TopicTagQuanxianCheck")){
    function user_TopicTagQuanxianCheck($topic_tag,$userClassId):bool{
        if(!$topic_tag->userClass){
            return true;
        }
        $data = json_decode($topic_tag->userClass, true, 512, JSON_THROW_ON_ERROR);
        return in_array($userClassId, $data,true);
    }
}

if(!function_exists("file_suffix")){
    function file_suffix(string $path):string{
        $path = substr($path,strrpos($path,"/")+1);
        $path = \Hyperf\Utils\Str::after($path,".");
        return $path;
    }
}

if(!function_exists("path_file_name")){
    function path_file_name(string $path):string{
        $path = substr($path,strrpos($path,"/")+1);
        return $path;
    }
}