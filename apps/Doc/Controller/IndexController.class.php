<?php
namespace Doc\Controller;

use HashMap\Controller\HashMapController;

/**
 * 程序首页
 * @package Home\Controller
 */
class IndexController extends HashMapController
{
    public function index()
    {
        $file = THINK_PATH . 'Common/functions.php';
        //var_dump($file);
        //获取文件内容
        $content = file_get_contents($file);

        $result = array();

        preg_match_all('/\\\*\*\s+\*([^*]*)\s*([^\/]*)\*\/\s+function\s+([^\(]+)\(/is', $content, $result);
        //dump($result);

        //格式化
        $funcs = array();
        foreach($result as $info){

            foreach($info as $i=>$v){

            }
        }



    }
}