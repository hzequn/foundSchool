<?php /* Smarty version 2.6.29, created on 2020-04-06 22:08:51
         compiled from admin/m_add.tpl */ ?>
<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="ie8"><![endif]-->
<!--[if lt IE 7 ]><html class="ie6"><![endif]-->
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="校园，寻物，招领，启事，失主，物主，匹配" />
    <meta name="description" content="校园失物招领平台，致力于为校园寻物以及失物招领提供信息发布平台，同时通过快速的站内信息匹配推送，提高失物信息传播效率以及失物找回率，是失物寻找的好帮手。" />
    <title>新增管理员</title>
    <script>
        document.write('<link rel="stylesheet" href="../common/templates/admin/css/mstyle.css?' + Math.random() + '">');
    </script>
</head>

<body>
    <div class="wrapper clearfix">
        <div class="topbar">
            <div class="wrapper" style="padding-left:10px;">
                <h1>管理中心</h1>
            </div>
        </div>
        <!-- 左侧导航 -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/sideBar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="rightpart">
            <div class="breadpiece">
                <a href="m_list.php">管理员管理</a><span> > </span><span class="on">新增管理员</span>
            </div>
            <div class="mCenter-follow mcenter-set" style="padding-top:15px;">
                <form id="form" action="../common/uploadImg.php?type=headIcon" method="post" enctype="multipart/form-data" target="frame">
                    <p style="display:none;"><input type="file" name="file" id="upload_file"></p>
                </form>
                <form id="form2" method="post" action='checkRegist.php'>
                    <div class="form-row clearfix">
                        <span class="tt"><em>*</em> 账户名</span>
                        <input type="text" name="name" class="ipt-text" placeholder="请输入账号名" value="" autocomplete="off">
                    </div>
                    <div class="form-row clearfix">
                        <span class="tt"><em>*</em> 密码</span>
                        <input type="password" name="password" class="ipt-text" placeholder="请输入密码">
                    </div>
                    <div class="form-row clearfix">
                        <span class="tt"><em>*</em> 确认密码</span>
                        <input type="password" name="password2" class="ipt-text" placeholder="请再次输入密码">
                    </div>

                    <div class="form-row clearfix">
                        <span class="tt">上传头像</span>
                        <div class="avatar">
                            <input type="hidden" name="imgpath" value="">
                            <img class="fl" id="msg" src="../common/templates/images/avatar_default.jpg" alt="">
                            <p>
                                <span>建议头像尺寸200*200，格式支持Jpg，图片大小不得超过1M</span>
                                <a href="javascript:;" class="avatar_upload">修改头像</a>
                            </p>
                        </div>
                    </div>
                    <div class="form-row clearfix">
                        <span class="tt"><em>*</em> 手机号</span>
                        <input type="text" name="phone" class="ipt-text" placeholder="请输入手机号" value="" autocomplete="off">
                    </div>
                    <div class="form-row clearfix">
                        <span class="tt"><em>*</em> 邮箱</span>
                        <input type="text" name="email" class="ipt-text" placeholder="请输入邮箱" value="" autocomplete="off">
                    </div>
                    <div class="form-row clearfix">
                        <span class="tt">所在地址</span>
                        <input type="text" name="address" class="ipt-text" placeholder="请输入所在地址" value="" autocomplete="off">
                    </div>
                    <div class="form-row clearfix">
                        <span class="tt"></span>
                        <input type="submit" class="submit nooutline" value="新增">
                        <input type="reset" class="reset nooutline" value="重置">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../common/templates/admin/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../common/templates/admin/js/m_add.js"></script>
</body>

</html>