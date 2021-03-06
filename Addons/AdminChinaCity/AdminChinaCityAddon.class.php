<?php
// +----------------------------------------------------------------------
// | i友街 [ 新生代贵州网购社区 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.iyo9.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: i友街 <iyo9@iyo9.com> <http://www.iyo9.com>
// +----------------------------------------------------------------------
// 
namespace Addons\AdminChinaCity;
use Common\Controller\Addon;

/**
 * 中国省市区三级联动插件
 * @author i友街
 */

    class AdminChinaCityAddon extends Addon{

        public $info = array(
            'name'=>'AdminChinaCity',
            'title'=>'Admin中国省市区三级联动',
            'description'=>'与前台公用一个城市数据库，请谨慎安装卸载',
            'status'=>1,
            'author'=>'i友街',
            'version'=>'2.0'
        );

        public function install(){

            /* 先判断插件需要的钩子是否存在 */
            $this->getisHook('AdminJChinaCity', $this->info['name'], $this->info['description']);

           
            return true;
        }

        public function uninstall(){
           
            return true;
        }

        //实现的J_China_City钩子方法
        public function AdminJChinaCity($param){
            $this->assign('param', $param);
            $this->display('chinacity');
        }

        //获取插件所需的钩子是否存在
        public function getisHook($str, $addons, $msg=''){
            $hook_mod = M('Hooks');
            $where['name'] = $str;
            $gethook = $hook_mod->where($where)->find();
            if(!$gethook || empty($gethook) || !is_array($gethook)){
                $data['name'] = $str;
                $data['description'] = $msg;
                $data['type'] = 1;
                $data['update_time'] = NOW_TIME;
                $data['addons'] = $addons;
                if( false !== $hook_mod->create($data) ){
                    $hook_mod->add();
                }
            }
        }


    }