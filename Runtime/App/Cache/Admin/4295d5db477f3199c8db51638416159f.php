<?php if (!defined('THINK_PATH')) exit();?><div class="pageHeader">
<form id="pagerForm" action="/zswin1.5/index.php/Admin/User" method="post">
	
	<input type="hidden" name="account" value="<?php echo ($_REQUEST["account"]); ?>"/>
	<input type="hidden" name="orderField" value="<?php echo ($_REQUEST["orderField"]); ?>">
        <input type="hidden" name="orderDirection" value="<?php echo ($_REQUEST["orderDirection"]); ?>">
    <input type="hidden" name="pageNum" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>"/>
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>"/>
	 
    
</form>
<form onsubmit="return navTabSearch(this);"  class="form-inline" action="/zswin1.5/index.php/Admin/User" method="post">
                                  <div class="form-group">
                                      <label>用户名：</label><input type="text" value="<?php echo ($_REQUEST["account"]); ?>" name="account" class="form-control" size="15" />
                                  </div>
                                  <div class="form-group">
                                     
                                  </div>
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-warning btn-sm"><i class="icon-search"></i> 查询</button>
                                     <a class="btn btn-primary btn-sm" href="javascript:navTab.reload('', {clearQuery:true});"><i class="icon-undo"></i> 清空查询</a>
                                     <a href="/zswin1.5/index.php/Admin/User/add" target="dialog" rel="useradd" mask="true" minable="true" width="500" height="400" class="btn btn-primary btn-sm"><i class="icon-plus"></i> 新增</a>
                                 
                                  </div>
                                   
                                 <div class="pull-right btn-group">
                                  <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-sm" type="button"><i class="icon-list"></i> 批量操作<span class="caret"></span></button>
                                  <ul role="menu" class="dropdown-menu">
                                  <div class="log-arrow-up"></div>
                                      <li><a href="/zswin1.5/index.php/Admin/User/outxls/ids/all" target="dwzExport">导出<span style="color: green;">全部</span></a></li>
                                      <li><a href="/zswin1.5/index.php/Admin/User/outxls" target="checkedExport" idname="ids">导出<span style="color: red;">选中</span></a></li>
                                      <li class="divider"></li>
                                      <li><a href="/zswin1.5/index.php/Admin/User/selectedDelete"  title="确定要删除选中信息吗？" target="checkedAjaxTodo" idname="ids">删除选中</a></li>
                                  </ul>
                                </div>
</form>

    
</div>



<div class="pageContent">
    <table class="j-table" width="100%" layoutH="95">
        <thead>
            <tr>
            
            <th>编号</th>
				<th>用户名</th>
				<th>姓名</th>
				<th>权限组</th>
				<th class="orderby <?php if(($order) == "create_time"): echo ($sortImg); endif; ?>" orderField="create_time">添加时间</th>
				<th>上次登录</th>
				<th class="orderby <?php if(($order) == "login_count"): echo ($sortImg); endif; ?>" orderField="login_count">登录次数</th>
				<th class="orderby <?php if(($order) == "status"): echo ($sortImg); endif; ?>" orderField="status">状态</th>
               
                <th width="30"><input type="checkbox" class="checkboxCtrl j-icheck" group="ids"></th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>

           <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr> <td><?php echo ($vo['id']); ?></td>
					<td><?php echo ($vo['account']); ?></td>
					<td><?php echo ($vo['nickname']); ?></td>
					<td><?php echo (getgroupnamebyuserid($vo['id'],$vo['id'])); ?></td>
					<td><?php echo (date("Y-m-d",$vo['create_time'])); ?></td>
					<td><?php echo (date("Y-m-d H:i:s",$vo['last_login_time'])); ?></td>
					<td><?php echo ($vo['login_count']); ?></td>
		            <td><?php echo (getstatus($vo['status'])); ?></td>
                <td><input type="checkbox" name="ids" class="j-icheck" value="<?php echo ($vo['id']); ?>"></td>
                <td>
                <div class="btn-group  btn-group-xs">
                 <a href="/zswin1.5/index.php/Admin/User/edit/id/<?php echo ($vo['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"   class="btn btn-primary" target="dialog"  mask="true"  width="500" height="400" ><i class="icon-edit"></i> 编辑</a>
                    <a href="/zswin1.5/index.php/Admin/User/password/id/<?php echo ($vo['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"  class="btn btn-warning" target="dialog" mask="true" ><span>修改密码</span></a>
                    <?php echo (showstatus($vo['status'],$vo['id'],CONTROLLER_NAME)); ?>
                    <a href="/zswin1.5/index.php/Admin/User/foreverdelete/id/<?php echo ($vo['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-danger" target="ajaxTodo" title="确定要删除该行信息吗？"><i style="font-size:12px;" class="icon-trash"></i> 删除</a>
                    </div>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="panelBar">
        <div class="pages pull-left">
            
            <span>共 <?php echo ($totalCount); ?> 条</span>
        </div>

   
        <div class="pagination-box" targettype="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>">
        </div>
    </div>
</div>