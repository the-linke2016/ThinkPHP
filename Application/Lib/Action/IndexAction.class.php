<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	// $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    //echo C('name');

    /*
     *URL_MODEL
     *1默认模式    pathinfo模式    1    http://localhost/ThinkPHP_3.1.3_full/index.php/Index/user/id/1.html
     *0普通模式                         http://localhost/ThinkPHP_3.1.3_full/index.php?m=Index&a=user&id=1
     *2重写模式                         http://localhost/ThinkPHP_3.1.3_full/Index/user/id/1.html
     *3兼容模式                         http://localhost/ThinkPHP_3.1.3_full/index.php?s=/Index/user/id/1.html
     */
     
    //echo C('URL_MODEL') . '<br>'; 
    // U(模块/方法,array('id'=>1),'xxxx html shtml xml',true/false,'localhost');
    //echo U('Index/user',array('id'=>1),'shtml',false,'localhost');    // 设置true自动跳转
    
    //show();
    //$arr = array(1,2,3,4,5);
    //dump($arr);

    //$this -> display();
    //$this -> display('Index/test');   //Tpl下文件夹以action的名字命名，以方法名建立hyml模版

    //$name = 'K';
    //$this -> name = $name;  //赋值输出方法一
    //$this -> assign('变量名',变量值);

    //$date = date('Y-m-d');
    //$this -> assign('name','K') -> assign('sex','boy') -> assign('today',$date);
    //$this -> display();

    // $me['name'] = 'KK';
    // $me['age'] = '20';
    // $me['sex'] = 'boy';
    // $this -> assign('me', $me);
    // $this -> now = time();
    // $person = array(
    //     1 => array('name' => 'Jack', 'age' => '18'),
    //     2 => array('name' => 'Tom', 'age' => '19'),
    //     3 => array('name' => 'Peter', 'age' => '20'),
    //     4 => array('name' => 'Mary', 'age' => '21')
    // );
    // $this -> assign(person, $person);

    //$num = 11;
    //$this -> assign(num, $num);

    // $name = 'laoshi';
    // $this -> assign(name, $name);
    //$this -> display();
    }



    public function user() {
        //echo 'id is : ' . $_GET['id'] . '<br>';
        //echo '这里是Index模块的user方法';
        //echo C('name');
        //trace('name',C('name'));
        //dump($_SERVER);
        // G('run');
        // for ($i=0;$i<1000;$i++) {
        //     $count += $i;
        // }
        // echo G('run','end');    // 毫秒
        // $this -> display();

        //     实例化模型
        //1.实例化基础模型 model
        //$user = new Model('user');    // 表名，表前缀，数据库链接信息
        // $user = M('user');
        // $data = $user -> select();    // SELECT查询语句
        // dump($data);

        //2.实例化用户自定义模型
        //$user = new UserModel();
        //$user = D('User');    // 如果没有用户自定义模型，则用M方法实例化基础模型
        //echo $user -> getinfo();

        //3.实例化公共模型
        // $user = new CommonModel();
        // echo $user -> strmake('aaaaa');

        //4.实例化空模型
        // $model -> M();
        // $model -> query($sql);    // 日常读取 select
        // $model -> execute($sql);    // 写入 update insert

        

        
    }
}