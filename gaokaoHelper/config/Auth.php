<?php
namespace app\config;
use Yii;


class Auth
{
    //学生、班长、支书、学习委员、生活委员、大班长、辅导员助理
    //教师、兼职辅导员、辅导员、党委副书记

    //党支书、
    //学生会负责人、学生会成员、管理员、开发人员

    private static $_authTable=[
        'task'=>['教师'=>true],
        'task/*'=>['管理员'=>true],

        'conference'=>['教师'=>true,'班长'=>true],

        'sign/view'=>['学生'=>true],
        'sign'=>['教师'=>true,'大班长'=>true,'辅导员助理'=>true],

        'job'=>['学生'=>true, '教师'=>true],
        'job/action'=>['教师'=>true],

        'prize'=>['学生'=>true],
        'prize/mge'=>['教师'=>true],

        'leave'=>['学生'=>true],
        'leave/action'=>['教师'=>true],

        'project'=>['学生'=>true],
        'project/action'=>['教师'=>true, '辅导员助理'=>true],


        'user'=>['教师'=>true],

        'hidden'=>['开发人员'=>true]

        ];

    public static function allow($url){
        if (Yii::$app->user->isGuest) {
            return false;
        }
        return true;
        $role = Yii::$app->user->identity->roleArray;

        if ($url == '') {
            return true;
        }

        foreach ($role as $value) {
            //echo "$url    $value ";
            if (isset(Auth::$_authTable[$url][$value])) {

                return true;
            }
        }
        return false;
    }

    public static function deny($url){
        return !Auth::allow($url);
    }

}
