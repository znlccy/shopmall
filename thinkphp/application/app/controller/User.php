<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5
 * Time: 17:22
 */

namespace app\app\controller;

use think\Db;

class User
{
    public function login() {

        $data = Db::table('tb_user')->select();

        return json(['data'=>$data]);
    }

    public function registered() {
        return json(['code'=>'200','message'=>'注册成功！']);
    }

    public function forgetPassword() {
        return 'nihap';
    }
}
?>