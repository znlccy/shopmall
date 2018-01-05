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
    public function index() {

        $data = Db::table('tb_user')->select();

        return json(['data'=>$data]);
    }
}
?>