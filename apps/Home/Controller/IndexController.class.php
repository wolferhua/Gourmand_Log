<?php
namespace Home\Controller;

use HashMap\Controller\HashMapController;

/**
 * 程序首页
 * @package Home\Controller
 */
class IndexController extends HashMapController
{
    public function index()
    {
        echo '<a href="' . U('Doc/Index/index') . '">doc</a>';
    }
}