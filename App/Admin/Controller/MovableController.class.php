<?php

namespace Admin\Controller;

class MovableController extends CommonController {

    public function index() {
        $movalbe = M("S_movable");
        $info=$movalbe->find();
        $this->assign("info", $info);
        $this->display();
    }

    public function movable_add() {
        $movalbe = M("S_movalbe");
        var_dump(I());
        $classTree = $movalbe->field('id,name,pid')->select();
        $this->assign('list', $list);
    }

    public function update() {

        $movalbe = M("S_movable");
        $data = array();
        $data['id'] = I('id');
        $data['name'] = I('name');
        $data['timestart'] = I('timestart');
        $data['timeend'] = I('timeend');
        $data['num'] = I('num');
        $data['organizer'] = I('organizer');
        $data['descrition'] = I('descrition');
        $data['createdate'] = date("Y-m-d H:i:s");
        $data['updatedate'] = date("Y-m-d H:i:s");
        $list =$movalbe->save($data);
        //echo $movalbe->getLastSql();
        if ($list !== false) {
            $this->mtReturn(200, '修改成功!');
        } else {
            $this->mtReturn(300, '修改失败!');
        }
    }

}

?>