<?php if (!defined('THINK_PATH')) exit();?><div class="pageHeader">
<form id="pagerForm" action="/zswin1.5/index.php/Admin/Group" method="post">
	
	<input type="hidden" name="name" value="<?php echo ($_REQUEST["name"]); ?>"/>
	<input type="hidden" name="orderField" value="<?php echo ($_REQUEST["orderField"]); ?>">
        <input type="hidden" name="orderDirection" value="<?php echo ($_REQUEST["orderDirection"]); ?>">
    <input type="hidden" name="pageNum" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>"/>
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>"/>
	 
    
</form>
    <form onsubmit="return navTabSearch(this);" class="form-inline" action="/zswin1.5/index.php/Admin/Group" method="post">
       
       <div class="form-group" size="20">
       <label>组名称：</label><input type="text" value="<?php echo ($_REQUEST["name"]); ?>" name="name" class="form-control" size="13" />
       </div>
        <div class="form-group">
        <a href="javascript:;" class="j-showMoreSearch" rel="group_list" title="更多选项"><i class="icon-double-angle-down"></i></a>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-default btn-sm">查询</button>
        <a class="btn btn-orange btn-sm" href="javascript:navTab.reload('', {clearQuery:true});">清空查询</a>
        <a href="/zswin1.5/index.php/Admin/Group/add" target="dialog" mask="true"  width="500" height="400" class="btn btn-green btn-sm">新增</a>
         </div>      
          <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">批量操作<span class="caret"></span></button>
                        <ul class="dropdown-menu right" role="menu">
                            <div class="log-arrow-up"></div>
                            <li><a href="/zswin1.5/index.php/Admin/Group/selectedDelete"  title="确定要删除选中信息吗？" target="checkedAjaxTodo" idname="ids">删除选中</a></li>
                        </ul>
         </div>
             
       
        <div class="moreSearch form-inline">
           <div class="form-group" size="20">
           <label>演示查询：</label><input type="text"  name="test" class="form-control" size="13" />
           </div>
          
       </div>
    </form>
    
</div>
<div class="pageContent">
    <table class="j-table" width="100%" layoutH="95">
        <thead>
            <tr>
                <th width="30"></th>
                <th class="orderby <?php if(($order) == "name"): echo ($sortImg); endif; ?>" orderField="name">分组名</th>
                <th class="orderby <?php if(($order) == "title"): echo ($sortImg); endif; ?>" orderField="title">说明</th>
                <th class="orderby <?php if(($order) == "sort"): echo ($sortImg); endif; ?>" orderField="sort">序号</th>
                <th class="orderby <?php if(($order) == "status"): echo ($sortImg); endif; ?>" orderField="status">状态</th>
                <th class="orderby <?php if(($order) == "show"): echo ($sortImg); endif; ?>" orderField="show">显示</th>

                <th width="28"><input type="checkbox" class="checkboxCtrl j-icheck" group="ids"></th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>

           <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td></td>
                <td><?php echo ($vo['name']); ?></td>
                <td><?php echo ($vo['title']); ?></td>
                <td><?php echo ($vo['sort']); ?></td>
                <td><?php echo (getstatus($vo['status'])); ?></td>
                <td><?php echo ($vo['show_text']); ?></td>
               
                <td><input type="checkbox" name="ids" class="j-icheck" value="<?php echo ($vo['id']); ?>"></td>
                <td>
                    <a href="/zswin1.5/index.php/Admin/Group/edit/id/<?php echo ($vo['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"  class="btn btn-green btn-sm" target="dialog"  mask="true"  width="500" height="400" >编辑</a>
                    <?php echo (showstatus($vo['status'],$vo['id'],CONTROLLER_NAME)); ?>
                    <?php echo (showshow($vo['show'],$vo['id'],CONTROLLER_NAME)); ?>
                    <a href="/zswin1.5/index.php/Admin/Group/foreverdelete/id/<?php echo ($vo['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-red btn-sm" target="ajaxTodo" title="确定要删除该行信息吗？">删</a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="panelBar">
        <div class="pages">
            
            <span>共 <?php echo ($totalCount); ?> 条</span>
        </div>
        <div class="pagination-box" targettype="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>">
        </div>
    </div>
</div>