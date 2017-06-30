<?php if (!defined('THINK_PATH')) exit();?><div class="pageHeader">
<form id="pagerForm" action="/zswin1.5/index.php/Admin/Syslogs" method="post">
	
	<input type="hidden" name="keyword" value="<?php echo ($_REQUEST["keyword"]); ?>"/>
	<input type="hidden" name="orderField" value="<?php echo ($_REQUEST["orderField"]); ?>">
        <input type="hidden" name="orderDirection" value="<?php echo ($_REQUEST["orderDirection"]); ?>">
        <input type="hidden" name="pageNum" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>"/>
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>"/>
	  
    
</form>
    <form onsubmit="return navTabSearch(this);" class="form-inline" action="/zswin1.5/index.php/Admin/Syslogs" method="post">
       
        <div class="form-group" size="25">
         <label>关键字：</label><input type="text" value="<?php echo ($_REQUEST["keyword"]); ?>" name="keyword" class="form-control" size="15" />                            
         </div>
          <div class="form-group">
             <button type="submit" class="btn btn-warning btn-sm">查询</button>
             <a class="btn btn-primary btn-sm" href="javascript:navTab.reload('', {clearQuery:true});">清空查询</a>
                
           
        </div>
        
    </form>
    
</div>
<div class="pageContent">   

    <table class="j-table" width="100%" layoutH="95">
        <thead>
            <tr>
                <th width="30"></th>
                <th class="orderby <?php if(($order) == "modulename"): echo ($sortImg); endif; ?>" orderField="modulename">操作分组</th>
                <th class="orderby <?php if(($order) == "actionname"): echo ($sortImg); endif; ?>" orderField="actionname">操作模块</th>
                
                <th>备注</th>
                <th class="orderby <?php if(($order) == "username"): echo ($sortImg); endif; ?>" orderField="username">操作用户</th>

                <th class="orderby <?php if(($order) == "userid"): echo ($sortImg); endif; ?>" orderField="userid">操作用户ID</th>
                <th class="orderby <?php if(($order) == "userip"): echo ($sortImg); endif; ?>" orderField="userip">操作用户IP</th>
                <th class="orderby <?php if(($order) == "create_time"): echo ($sortImg); endif; ?>" orderField="create_time">操作时间</th>
                
            </tr>
        </thead>
        <tbody>

           <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td></td>
            <td><?php echo ($vo['modulename']); ?></td>
					<td><?php echo ($vo['actionname']); ?></td>
                                        
                                        <td><?php echo ($vo['message']); ?></td>
					<td><?php echo ($vo['username']); ?></td>
                                        <td><?php echo ($vo['userid']); ?></td>
					<td><?php echo ($vo['userip']); ?></td>
					<td><?php echo (todate($vo['create_time'])); ?></td>
               
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
<div class="panelBar">
        <div class="pages">
            <span>每页&nbsp;</span>
            <span class="sel">
                <select class="selectpicker show-tick dropup" data-style="btn-default btn-sel xs" data-width="auto" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
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