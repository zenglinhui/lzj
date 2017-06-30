<?php if (!defined('THINK_PATH')) exit();?><div class="pageHeader">
<form id="pagerForm" action="<?php echo cookie('_currentUrl_');?>" method="post">


       
        <input type="hidden" name="pageNum" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>"/>
	    <input type="hidden" name="numPerPage" value="<?php echo ($_REQUEST['numPerPage']); ?>"/>
            <?php if(isset($custom_hiddeninput)): echo ($custom_hiddeninput); endif; ?> 
    </form>
     <form onsubmit="return navTabSearch(this);"  class="form-inline" action="<?php echo cookie('_currentUrl_');?>" method="post">
       
       
                <?php if(isset($custom_searchbar)): echo ($custom_searchbar); endif; ?> 
          
       
        
    </form>

</div>
<div class="pageContent">

<?php if(empty($custom_adminlist)): ?><table class="j-table" width="100%" layoutH="80">
     	<thead>
					<tr>
						<th>
						 	序号
	                    </th>
						<?php if(is_array($listKey)): $i = 0; $__LIST__ = $listKey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><th><?php echo ($vo); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($list)): $vo = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lv): $mod = ($vo % 2 );++$vo;?><tr>
						
						<?php if(is_array($listKey)): $i = 0; $__LIST__ = $listKey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lk): $mod = ($i % 2 );++$i;?><td><?php echo ($lv["$key"]); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
    </table>
    <?php else: ?>
			<?php if(isset($custom_adminlist)): echo ($custom_adminlist); endif; endif; ?>
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