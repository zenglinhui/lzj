<?php if (!defined('THINK_PATH')) exit();?>
<script>


	function addnode(obj) {

		//var treeObj = $.fn.zTree.getZTreeObj("main_treeDemo_3");
		var node = $("a[zs-id*=135]:last");//获取父节点

		
		var zsname,zstitle,zsurl;
		zsname=$(obj).attr('zs-name');
		zstitle=$(obj).attr('zs-title');
		zsurl=$(obj).attr('zs-url');
		var html;
		html='<li><a target="navTab" href="'+zsurl+'" rel="'+zsname+'" zs-id="'+zsname+'"><i class=""></i>'+zstitle+'</a></li>';
		//var newNode = {"id":zsname, "pId":135, "name": zstitle, "nurl":zsurl, "target":"navTab", "rel":zsname};
		//<a target="navTab" href="zsurl" rel="zsname" zs-id="zsname">zstitle</a>
		node.parent().after(html);
		$("a[rel="+zsname+"]").click(function(event){
			
			var $this = $(this);
			var title = $this.attr("title") || $this.text();
			var tabid = $this.attr("rel") || "_blank";
			var fresh = eval($this.attr("fresh") || "true");
			var external = eval($this.attr("external") || "false");
			var url = unescape($this.attr("href")).replaceTmById($(event.target).parents(".unitBox:first"));
			DWZ.debug(url);
			if (!url.isFinishedTm()) {
				alertMsg.error($this.attr("warn") || DWZ.msg("alertSelectMsg"));
				return false;
			}
			navTab.openTab(tabid, url,{title:title, fresh:fresh, external:external});

			event.preventDefault();
		});

		
	}
	function removenode(obj) {
		//var treeObj = $.fn.zTree.getZTreeObj("main_treeDemo_3");
		var zsname;
		
		zsname=$(obj).attr('zs-name');

		var node = $("a[rel="+zsname+"]");//获取父节点
        
		node.parent().remove();
		
	}

</script>
<div class="pageHeader">
<form id="pagerForm" action="/zswin1.5/index.php/Admin/Addons" method="post">

       
        <input type="hidden" name="pageNum" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>"/>
	    <input type="hidden" name="numPerPage" value="<?php echo ($_REQUEST['numPerPage']); ?>"/>

    </form>

        <div  class="form-inline">
             <div class="form-group">
               <a href="<?php echo U('create');?>" rel="addoncreate"  target="navtab" title="创建插件"  class="btn btn-green btn-sm">快速创建插件</a>
                
            </div>
        </div>

  
</div>
<div class="pageContent">


    <table class="j-table" width="100%" layoutH="95">
        <thead>
            <tr>
               
                 <th>名称</th>
                <th>标识</th>
                <th width="400">描述</th>
					<th width="50">状态</th>
					<th>作者</th>
					<th width="50">版本</th>
					<th width="200">操作</th>
            </tr>
        </thead>
        <tbody>
           <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
               <td><?php echo ($vo["title"]); ?></td>
					<td><?php echo ($vo["name"]); ?></td>
					<td><?php echo ($vo["description"]); ?></td>
					<td><?php echo ((isset($vo["status_text"]) && ($vo["status_text"] !== ""))?($vo["status_text"]):"未安装"); ?></td>
					<td><a target="_blank" href="<?php echo ((isset($vo["url"]) && ($vo["url"] !== ""))?($vo["url"]):'http://www.zswin.cn'); ?>"><?php echo ($vo["author"]); ?></a></td>
					<td><?php echo ($vo["version"]); ?></td>
					<td>
						<?php if(($vo["uninstall"]) == "0"): if($vo['config'] != 'null'): ?><a  target="navtab" title="<?php echo ($vo["title"]); ?>设置" class="btn btn-warning btn-sm" href="/zswin1.5/index.php/Admin/Addons/config/id/<?php echo ($vo['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>">设置</a><?php endif; ?>
						<?php echo (showstatus($vo['status'],$vo['id'],CONTROLLER_NAME)); ?>
							
							 
								<a class="btn btn-danger btn-sm" target="ajaxTodo"   href="/zswin1.5/index.php/Admin/Addons/uninstall/id/<?php echo ($vo['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" <?php if(($vo['has_adminlist']) == "1"): ?>onclick="removenode(this)"<?php endif; ?> zs-name="<?php echo ($vo['name']); ?>"  >卸载</a>
							
						<?php else: ?>
							<a class="btn btn-primary btn-sm" target="ajaxTodo" <?php if(($vo['has_adminlist']) == "1"): ?>onclick="addnode(this)"<?php endif; ?>  zs-name="<?php echo ($vo['name']); ?>" zs-title="<?php echo ($vo['title']); ?>" zs-url="<?php echo U('Admin/Addons/adminList');?>&name=<?php echo ($vo['name']); ?>"   href="/zswin1.5/index.php/Admin/Addons/install/addon_name/<?php echo ($vo['name']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>">安装</a><?php endif; ?>
					</td>
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