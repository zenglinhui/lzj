<?php if (!defined('THINK_PATH')) exit();?><div class="pageHeader">
<form id="pagerForm" action="<?php echo U('rolelist');?>" method="post">
	
	<input type="hidden" name="name" value="<?php echo ($_REQUEST["name"]); ?>"/>
	<input type="hidden" name="orderField" value="<?php echo ($_REQUEST["orderField"]); ?>">
        <input type="hidden" name="orderDirection" value="<?php echo ($_REQUEST["orderDirection"]); ?>">
    <input type="hidden" name="pageNum" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>"/>
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>"/>
	 
    
</form>
    <form onsubmit="return dwzSearch(this, 'dialog');"  class="form-inline"  action="<?php echo U('rolelist');?>" method="post">
       <div class="form-group" style="width:200px;">
       <label>组名：</label><input type="text" value="<?php echo ($_REQUEST["name"]); ?>" name="name" class="form-control" size="10" />
                                     
       </div>
       <div class="form-group">
             <button type="submit" class="btn btn-warning btn-sm">查询</button>

        </div>
        
    </form>
    
</div>
<div class="pageContent">
<table class="j-table" width="100%" layoutH="100">
        <thead>
            <tr><th class="orderby <?php if(($order) == "name"): echo ($sortImg); endif; ?>" orderField="name">组名</th>
				<th class="orderby <?php if(($order) == "pid"): echo ($sortImg); endif; ?>" orderField="pid">上级组</th>
                <th width="80">查找带回</th>
            </tr>
        </thead>
        <tbody>

           <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr> 
					<td><?php echo ($vo['name']); ?></td>
					<td><?php echo (getgroupname($vo['pid'])); ?></td>
					<td><a class="btnSelect" href="javascript:$.bringBack({ id:'<?php echo ($vo['id']); ?>', name:'<?php echo ($vo['name']); ?>'})" title="查找带回"><i class="icon-reply-all"></i></a></td>

           
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
	

	
</div>