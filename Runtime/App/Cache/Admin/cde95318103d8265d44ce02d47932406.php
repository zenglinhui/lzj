<?php if (!defined('THINK_PATH')) exit();?><div class="pageHeader">
<form id="pagerForm" action="/zswin1.5/index.php/Admin/Config" method="post">
	<input type="hidden" name="group" value="<?php echo ($_REQUEST["group"]); ?>"/>
	<input type="hidden" name="name" value="<?php echo ($_REQUEST["name"]); ?>"/>
	<input type="hidden" name="orderField" value="<?php echo ($_REQUEST["orderField"]); ?>">
        <input type="hidden" name="orderDirection" value="<?php echo ($_REQUEST["orderDirection"]); ?>">
    <input type="hidden" name="pageNum" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>"/>
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>"/>
	 
    
</form>
 
    <form onsubmit="return navTabSearch(this);"  class="form-inline" action="/zswin1.5/index.php/Admin/Config" method="post">
       
        <div class="form-group" size="25">
        <label>配置名称：</label>
        <input type="text" value="<?php echo ($_REQUEST["name"]); ?>" name="name" class="form-control" />
        </div>
       <div class="form-group" size="12"><label>分组：</label>
                    <select name="group" id="j-group" class="selectpicker show-tick"  data-width="fit" data-style="btn-primary btn-sm" data-container="body">
                        <option  value="<?php echo $_REQUEST['group'];?>"><?php echo (get_config_group($_REQUEST['group'])); ?></option>
                        <?php if($_REQUEST['group'] != ''): ?><option  value="">全部</option><?php endif; ?>
                        <?php if($_REQUEST['group'] != 0): ?><option  value="0">不分组</option><?php endif; ?>
                        
                        <?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($_REQUEST['group'] != $key): ?><option  value="<?php echo ($key); ?>"><?php echo ($vo); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        
                      
                    </select>
        </div>
                <div class="form-group">
                <button type="submit" class="btn btn-warning btn-sm"><i class="icon-search"></i> 查询</button>
                <a class="btn btn-primary btn-sm" href="javascript:navTab.reload('', {clearQuery:true});"><i class="icon-undo"></i> 清空查询</a>
                <a href="/zswin1.5/index.php/Admin/Config/add" rel="configadd"  target="navtab" title="新增配置项" class="btn btn-primary btn-sm"><i class="icon-plus"></i> 新增</a>
                <a zs-url="<?php echo U('sort?group='.$_REQUEST['group']);?>" rel="configsort"  title="排序配置项" class="btn btn-primary btn-sm list_sort"><i class="icon-sort-by-attributes-alt"></i> 排序</a>
                 </div>
                <div class="pull-right btn-group">
                                  <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-sm" type="button"><i class="icon-list"></i> 批量操作<span class="caret"></span></button>
                                  <ul role="menu" class="dropdown-menu">
                                  <div class="log-arrow-up"></div>
                                      <li><a href="/zswin1.5/index.php/Admin/Config/selectedDelete"  title="确定要删除选中信息吗？" target="checkedAjaxTodo" idname="ids">删除选中</a></li>
                                  </ul>
                </div>

        
        
    </form>
</div>
<div class="pageContent">

    <table class="j-table" width="100%" layoutH="95">
        <thead>
            <tr>
                <th width="30"></th>
               <th  class="orderby <?php if(($order) == "id"): echo ($sortImg); endif; ?>" orderField="id">ID</th>
					<th>名称</th>
					<th>标题</th>
					<th>分组</th>
					<th>类型</th>
					

                <th width="28"><input type="checkbox" class="checkboxCtrl j-icheck" group="ids"></th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>

           <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$config): $mod = ($i % 2 );++$i;?><tr>
            <td></td>
                <td><?php echo ($config["id"]); ?></td>
						<td><a href="<?php echo U('edit?id='.$config['id']);?>"><?php echo ($config["name"]); ?></a></td>
						<td><?php echo ($config["title"]); ?></td>
						<td><?php echo (get_config_group($config["group"])); ?></td>
						<td><?php echo (get_config_type($config["type"])); ?></td>
               
                <td><input type="checkbox" name="ids" class="j-icheck" value="<?php echo ($config["id"]); ?>"></td>
                <td>
                <div class="btn-group  btn-group-xs">
                    <a href="/zswin1.5/index.php/Admin/Config/edit/id/<?php echo ($config['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" rel="configedit<?php echo ($config['id']); ?>"  class="btn btn-primary"  target="navtab" title="编辑配置项" ><i class="icon-edit"></i> 编辑</a>
                    
                    <a href="/zswin1.5/index.php/Admin/Config/foreverdelete/id/<?php echo ($config['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-danger" target="ajaxTodo" title="确定要删除该行信息吗？"><i class="icon-trash"></i> 删除</a>
                </div>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
<div class="panelBar">
        <div class="pages">
            <span>每页&nbsp;</span>
            <span class="sel">
                <select class="selectpicker  show-tick dropup" data-style="btn-default btn-sel xs" data-width="auto" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
                  <option value="5" <?php if(($numPerPage) == "5"): ?>selected=selected<?php endif; ?>>5</option>
				<option value="10" <?php if(($numPerPage) == "10"): ?>selected=selected<?php endif; ?>>10</option>
				<option value="15" <?php if(($numPerPage) == "15"): ?>selected=selected<?php endif; ?>>15</option>
				<option value="20" <?php if(($numPerPage) == "20"): ?>selected=selected<?php endif; ?>>20</option>
                </select>
            </span>
            <span>&nbsp;条，共 <?php echo ($totalCount); ?> 条</span>
        </div>
        <div class="pagination-box" targettype="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>">
        </div>
    </div>
</div>

	

<script type="text/javascript">

	
	//点击排序
	$('.list_sort').click(function(){
		var url = $(this).attr('zs-url');
		var title = $(this).attr('title');
    
    var $check = $(':checkbox[name=ids]:checked');

    
   
   
    var param = '';
	if($check.length > 0){
		var str = new Array();
		$check.each(function(){
			str.push($(this).val());
		});
		param = str.join(',');
		url=url + '&ids='+ param
	}

   var  option={title:title};
   
   
	navTab.openTab('configsort',url,option);

	});

</script>