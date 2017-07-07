<?php
/*
*common 存放当前目录的公共函数
*conf 存放当前目录的配置文件
*lang 存放当前项目的语言包
*lib 存放当前项目的控制器和模型
*runtime 存放当前项目的运行时的文件
*tpl 存放当前项目的模版文件
*/

/*
*1.加载thinkphp.php
*   require('.ThinkPHP/ThinkPHP.php');
*2.加载核心文件  
*   ./ThinkPHP/Lib/Core
*3.加载项目的文件  分析URL    调用相关控制器
*    m    module    模块    控制器
*    a    action    方法    action=页面
*/

/*
$module = isset($_GET['m'])?$_GET['m']:'Index';
$action = isset($_GET['a'])?$_GET['a']:'Index';
$mooc = new $module;
$mooc -> $action();
class index {	//m=index
    function __construct() {
        echo '调用了index控制器<br>';
    }
    function index() {	//a=index
        echo '我是index控制器的index方法';
    }
    function test() {	//a=test
        echo '我是index控制器的test方法';
    }
}
exit;
*/

define('APP_PATH','./Application/');

define('RUNTIME_PATH','./Runtime/');

define('APP_DEBUG',true);	//设置false可以锁定config.php中的配置，使其不能修改

//define('BIND_MODULE','Admin');

require './ThinkPHP/ThinkPHP.php';

?>