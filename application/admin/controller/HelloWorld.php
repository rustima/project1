<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class HelloWorld extends Controller  //控制器名要首字母大写
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
//         return $this->fetch(); //默认使用与方法同名的模板 /application/admin\view\helloworld\index.html
//         return $this->fetch('index2');  //默认在view\类名\中查找并补上.html后缀
        echo "index";
        
    }
    public function index2()
    {
        return 'index2';
    }
}
