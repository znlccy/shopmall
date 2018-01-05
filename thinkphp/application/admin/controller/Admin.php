<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5
 * Time: 14:00
 */

namespace app\admin\controller;

use think\Controller;
use think\Db;

class Admin extends Controller
{
    public function admin() {

        $message = Db::table('tb_user')->select();

        $this->assign('message',$message);
        return view();
    }
}
?>