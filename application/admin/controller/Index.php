<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Index extends Controller
{
    public function Index($name = "张三")
    {
//         echo $name;
//         print_r($this->request->param());
//         exit;
        $data = Db::name('table1')->find();
//         print_r($data);
        $this->assign('date',$data['r4']);
//         $this->assign('date',$data.r4);
        $this->assign('name',$name);
        return $this->fetch(); //默认使用与方法同名的模板
//         return $this->fetch('index2');  //默认在view\类名\中查找并补上.html后缀
        echo "index";
        
    }
    public function hello($name = "world")
    {
        echo "hello:".$name;
//         return 'index2';
        echo '<br />';
        print_r($this->request->param());
    }
    
    public function today($year,$month = '03'){
        echo "今天是$year 年 $month 月";
    }
}
