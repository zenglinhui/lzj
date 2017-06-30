<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="zswin后台管理框架">
    <meta name="author" content="zswin后台管理框架">
    <meta name="keyword" content="zswin后台管理框架">
    <link rel="shortcut icon" href="/zswin1.5/Public/static/images/favicon.png">
    <title>zswin后台管理框架</title>
     <script src="/zswin1.5/Public/static/jquery-1.10.2.min.js"></script>
    <script src="/zswin1.5/Public/static/bootstrap.js"></script>
    <!-- Bootstrap core CSS -->
    
    
    <link href="/zswin1.5/Public/static/css/bootstrap.css" rel="stylesheet">
    <!--下面这个是原始风格，可以选用-->
    <!-- <link href="/zswin1.5/Public/static/css/bootstrap-theme.css" rel="stylesheet"> -->
    <!--下面这个是现有风格-->
    <link href="/zswin1.5/Public/static/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/zswin1.5/Public/static/css/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/zswin1.5/Public/static/css/style.css" rel="stylesheet">
    <link href="/zswin1.5/Public/static/css/style-responsive.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="/zswin1.5/Public/static/html5shiv.js"></script>
      <script src="/zswin1.5/Public/static/respond.min.js"></script>
    <![endif]-->


<script src="/zswin1.5/Public/DWZ/dwz.core.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.util.date.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.barDrag.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.drag.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.ui.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.theme.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.alertMsg.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.contextmenu.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.navTab.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.tab.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.resize.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.dialog.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.dialogDrag.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.stable.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.taskBar.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.ajax.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.pagination.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.database.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.effects.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.history.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/dwz.print.js" type="text/javascript"></script>
<script src="/zswin1.5/Public/DWZ/speedup.js" type="text/javascript"></script>
<!-- 可以用dwz.min.js替换前面全部dwz.*.js (注意：替换是下面dwz.regional.zh.js还需要引入)
<script src="/zswin1.5/Public/DWZ/dwz.min.js" type="text/javascript"></script>
-->
<script src="/zswin1.5/Public/DWZ/dwz.regional.zh.js" type="text/javascript"></script>



<!-- other plugins -->
<link href="/zswin1.5/Public/plugins/bootstrapdatetimepicker/bootstrap-datetimepicker.css" rel="stylesheet" media="screen" />
<script src="/zswin1.5/Public/plugins/bootstrapdatetimepicker/bootstrap-datetimepicker.js"></script>

<script src="/zswin1.5/Public/plugins/other/jquery.autosize.js"></script>
<link href="/zswin1.5/Public/plugins/bootstrapSelect/bootstrap-select.css" rel="stylesheet" media="screen" />
<script src="/zswin1.5/Public/plugins/bootstrapSelect/bootstrap-select.js"></script>

<link href="/zswin1.5/Public/plugins/bootstrapTags/bootstrap-tags.css" rel="stylesheet" media="screen" />
<script src="/zswin1.5/Public/plugins/bootstrapTags/bootstrap-tags.js"></script>

<!-- icheck -->
<script src="/zswin1.5/Public/plugins/icheck/icheck.min.js"></script>
<!-- dragsort -->
<script src="/zswin1.5/Public/plugins/dragsort/jquery.dragsort-0.5.1.js"></script>
<!-- form validate -->
<link href="/zswin1.5/Public/plugins/validationEngine/validationEngine.jquery.css" rel="stylesheet" media="screen" />
<script src="/zswin1.5/Public/plugins/validationEngine/jquery.validationEngine-zh_CN.js"></script>
<script src="/zswin1.5/Public/plugins/validationEngine/jquery.validationEngine.js"></script>
<!-- uploadify -->
<link href="/zswin1.5/Public/plugins/uploadify/uploadify.css" rel="stylesheet" media="screen"/>
<script src="/zswin1.5/Public/plugins/uploadify/jquery.uploadify.min.js"></script>
<!-- bootstrap-colorpicker -->
<link href="/zswin1.5/Public/plugins/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" media="screen" />
<script src="/zswin1.5/Public/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- kindeditor -->
<script src="/zswin1.5/Public/plugins/kindeditor_4.1.10/kindeditor-all.js"></script>
<script src="/zswin1.5/Public/plugins/kindeditor_4.1.10/lang/zh_CN.js"></script>

<script src="/zswin1.5/Public/static/jquery.scrollTo.min.js"></script>
<script src="/zswin1.5/Public/plugins/nicescroll/jquery.nicescroll.js" type="text/javascript"></script>
<script class="include" type="text/javascript" src="/zswin1.5/Public/plugins/dcjqaccordion/jquery.dcjqaccordion.2.7.js"></script>
<script src="/zswin1.5/Public/static/common-scripts.js"></script>



<!-- init -->
<script type="text/javascript">
var _STATIC_ = "/zswin1.5/Public/static";
var _APP_="/zswin1.5/index.php";
var _PUBLIC_="/zswin1.5/Public";
$(function(){
	//i-check
	DWZ.init(_PUBLIC_+"/DWZ/dwz.frag.xml", {
		loginUrl:"login_dialog.html", loginTitle:"登录",	// 弹出登录对话框
//		loginUrl:"login.html",	// 跳到登录页面
		statusCode:{ok:200, error:300, timeout:301}, //【可选】
		pageInfo:{pageNum:"pageNum", numPerPage:"numPerPage", orderField:"orderField", orderDirection:"orderDirection"}, //【可选】
		keys: {statusCode:"statusCode", message:"message"}, //【可选】
		ui:{hideMode:'display'}, //【可选】hideMode:navTab组件切换的隐藏方式，支持的值有’display’，’offsets’负数偏移位置的值，默认值为’display’
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			//$("#themeList").theme({themeBase:"themes"}); // themeBase 相对于index页面的主题base路径
		}
	});
	
	 $('#nav-accordion').dcAccordion({
	        eventType: 'click',
	        autoClose: true,
	        saveState: true,
	        disableLink: true,
	        speed: 'fast',
	        showCount: false,
	        autoExpand: true,
//	        cookie: 'dcjq-accordion-1',
	        classExpand: 'dcjq-current-parent'
	    });
});


</script>
  </head>

  <body>
<!--[if lte IE 7]>
<style type="text/css">
#errorie {position: fixed; top: 0; z-index: 100000; height: 30px; background: #FCF8E3;}
#errorie div {width: 900px; margin: 0 auto; line-height: 30px; color: orange; font-size: 14px; text-align: center;}
#errorie div a {color: #459f79;font-size: 14px;}
#errorie div a:hover {text-decoration: underline;}
</style>
<div id="errorie"><div>您还在使用老掉牙的IE，请升级您的浏览器到 IE8以上版本 <a target="_blank" href="http://windows.microsoft.com/zh-cn/internet-explorer/ie-8-worldwide-languages">点击升级</a>&nbsp;&nbsp;强烈建议您更改换浏览器：<a href="http://down.tech.sina.com.cn/content/40975.html" target="_blank">谷歌 Chrome</a></div></div>
<![endif]-->
  <div id="layout" >
      <!--header start-->
      <div id="header">


 <div class="sidebar-toggle-box">
                <div data-content="菜单切换" id="menu_c_s" data-placement="right" class="icon-reorder zs-tooltip"></div>
                
            </div>
            <!--logo start-->
            <a href="#" class="logo"><img src="/zswin1.5/Public/static/images/logomini.png" height="40" /></a>
            <!--logo end-->
            
            <div class="top-nav ">
                
                <ul class="nav pull-right top-menu">
                   
                    
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            
                            <span class="username"><?php echo session('loginUserName');?>(<?php echo session('login_account');?>)</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="<?php echo U('Public/cleancache');?>" target="ajaxTodo" ><i class=" icon-suitcase"></i> 清理缓存</a></li>
                            <li><a href="<?php echo U('Public/password');?>" target="dialog" mask="true" rel="changepwd_page" width="400" height="260"><i class="icon-cog"></i> 修改密码</a></li>
                            <li><a href="<?php echo U('Public/logout');?>"><i class="icon-key"></i> 退出</a></li>
                            <li></li>
                        </ul>
                    </li>
                   
                </ul>
               
            </div>
        </div>
      <!--header end-->
      <!--sidebar start-->
      
      <div id="leftside">

          <div id="sidebar"  class="nav-collapse ">
             
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
             
                   <li>
                      <a class="active"  id="homeindex" href="javascript:void(0)">
                          <i class="icon-dashboard"></i>
                          <span>后台首页</span>
                      </a>
                  </li>
            <?php if(is_array($groups)): $i = 0; $__LIST__ = $groups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="sub-menu">
                      <a href="javascript:;" >
                      <i class="<?php echo ($vo['icon']); ?>"></i>
                          
                          <span> <?php echo ($vo["title"]); ?></span>
                      </a>
                     
                      <ul class="sub">
                       <?php if(is_array($menu[$vo['id']])): $i = 0; $__LIST__ = $menu[$vo['id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vosub): $mod = ($i % 2 );++$i;?><li>
                          <?php if($vosub['hassub'] == 1): ?><a href="javascript:void(0);"  zs-id="<?php echo ($vosub['id']); ?>" ><i class="<?php echo ($vosub['icon']); ?>"></i><?php echo ($vosub["title"]); ?></a>                        
                          
                           <ul class="sub">
                           <?php if(is_array($vosub['sub'])): $i = 0; $__LIST__ = $vosub['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vosubsub): $mod = ($i % 2 );++$i;?><li><a  target="navTab" href="<?php echo ($vosubsub['url']); ?>" rel="<?php echo ($vosubsub['rel']); ?>" zs-id="<?php echo ($vosubsub['id']); ?>"><i class="<?php echo ($vosubsub['icon']); ?>"></i><?php echo ($vosubsub["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>    
                            </ul>
                          <?php else: ?>
                          <a target="navTab" href="<?php echo ($vosub['url']); ?>" rel="<?php echo ($vosub['rel']); ?>" zs-id="<?php echo ($vosub['id']); ?>"><i class="<?php echo ($vosub['icon']); ?>"></i><?php echo ($vosub["title"]); ?></a><?php endif; ?>

                         
                          
                          
                          </li><?php endforeach; endif; else: echo "" ;endif; ?>
                         
                      </ul>
                     
                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
           
            </ul>
              <!-- sidebar menu end-->
          </div>
          </div>
     
      <!--sidebar end-->
      <!--main content start-->
      <div id="container">
         
         
            <div id="navTab" class="tabsPage">
           
                <div class="tabsPageHeader">
                    <div class="tabsPageHeaderContent">
                        <ul class="navTab-tab nav nav-tabs">
                            <li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">后台首页</span></span></a></li>
                        </ul>
                    </div>
                    <div class="tabsLeft"><i class="icon-backward"></i></div>
                    <div class="tabsRight"><i class="icon-forward"></i></div>
                    
                </div>
               
                <div class="navTab-panel tabsPageContent layoutBox">
                    <div class="page unitBox">
                     <div class="row">
                 <div class="col-lg-6">
                     <div class="panel panel-default">
                                            <div class="panel-heading"><h3 class="panel-title">账号信息</h3></div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="control-label x80">登陆账号：</label>
                                                    <span><?php echo session('login_account');?></span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label x80">所属角色：</label>
                                                    <span><?php echo getGroupNameByUserId(session('userid'));?></span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label x80">姓名：</label>
                                                    <span><?php echo session('loginUserName');?></span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label x80">上次登陆：</label>
                                                    <span><?php echo session('lastLoginIp');?> @ <?php echo date("Y-m-d H:i:s",session('lastLoginTime'));?></span>
                                                </div>
                      </div>
                  </div></div>
                  <div class="col-lg-6">
                     <div class="panel panel-default">
                                            <div class="panel-heading"><h3 class="panel-title">信息</h3></div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="control-label x80">QQ交流群：</label>
                                                    <span>228550381</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label x80">当前版本：</label>
                                                    <span><?php echo (ZS_VERSION); ?></span>
                                                </div>
                                              <div class="form-group">
                                                    <label class="control-label x80">Git地址：</label>
                                                    <span>http://git.oschina.net/zswin/</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label x80"></label>
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                  </div>
              
                      

                  </div>
                  <div class="row">
                  
                          <div class="panel-body">
                                  <div class="text-center mbot30">
                                      <h3 class="timeline-title">框架开发时间轴</h3>
                                      
                                  </div>

                                  <div class="timeline">
                                      <article class="timeline-item">
                                          <div class="timeline-desk">
                                              <div class="panel">
                                                  <div class="panel-body">
                                                      <span class="arrow"></span>
                                                      <span class="timeline-icon red"></span>
                                                      <span class="timeline-date">08:25 am</span>
                                                      <h1 class="red">2014.12.10 | 星期三</h1>
                                                      <p>zswin1.5问世，整合了最新的bootstrap3.3.0和dwz1.5.0</p>
                                                  </div>
                                              </div>
                                          </div>
                                      </article>
                                      <article class="timeline-item alt">
                                          <div class="timeline-desk">
                                              <div class="panel">
                                                  <div class="panel-body">
                                                      <span class="arrow-alt"></span>
                                                      <span class="timeline-icon green"></span>
                                                      <span class="timeline-date">10:00 am</span>
                                                      <h1 class="green">2014.08.26 | 星期二</h1>
                                                      <p>zswin1.0后台管理框架问世</p>
                                                  </div>
                                              </div>
                                          </div>
                                      </article>

    </div>
                                      
                                  </div>

                                  <div class="clearfix">&nbsp;</div>
                              </div>
                  
                  
                  
                  
              </div>
                    </div>
                </div>
  </div>
   </div>
      <!--main content end-->

 

    <!-- js placed at the end of the document so the pages load faster -->
   
   




  </body>
</html>