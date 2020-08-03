<?php /* Smarty version 2.6.29, created on 2020-04-06 21:00:23
         compiled from user/regist.tpl */ ?>
<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="ie8"><![endif]-->
<!--[if lt IE 7 ]><html class="ie6"><![endif]-->
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="校园，寻物，招领，启事，失主，物主，匹配" />
    <meta name="description" content="校园失物招领平台，致力于为校园寻物以及失物招领提供信息发布平台，同时通过快速的站内信息匹配推送，提高失物信息传播效率以及失物找回率，是失物寻找的好帮手。" />
    <title>用户注册</title>
</head>

<body>
    <!-- 页面导航 -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user/topBar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!-- /页面导航 -->
    <div class="uCenter-bar">
        <div class="wrapper">
            <h1>用户注册</h1>
        </div>
    </div>
    <div class="section uCenter">
        <div class="wrapper clearfix">
            <div class="uCenter-content">
                <div class="uCenter-follow ucenter-set">
                    <form id="form" action="../common/uploadImg.php?type=headIcon" method="post" enctype="multipart/form-data" target="frame">
                        <p style="display:none;"><input type="file" name="file" id="upload_file"></p>
                    </form>
                    <form id="form2" method="post" action='checkRegist.php'>
                        <div class="form-row clearfix">
                            <span class="tt"><em>*</em> 用户名</span>
                            <input type="text" name="name" class="ipt-text" autocomplete="off" placeholder="请输入用户名">
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
                                    <a href="javascript:;" class="avatar_upload">上传头像</a>
                                </p>
                            </div>
                        </div>
                        <div class="form-row clearfix">
                            <span class="tt"><em>*</em> 手机号</span>
                            <input type="text" name="phone" autocomplete="off" placeholder="请输入手机号" class="ipt-text">
                        </div>
                        <div class="form-row clearfix">
                            <span class="tt"><em>*</em> 邮箱</span>
                            <input type="text" name="email" autocomplete="off" placeholder="请输入邮箱" class="ipt-text">
                        </div>
                        <div class="form-row clearfix">
                            <span class="tt">所在地</span>
                            <input type="text" name="address" autocomplete="off" placeholder="请输入所在地" class="ipt-text">
                        </div>
                        <div class="form-row clearfix">
                            <span class="tt"></span>
                            <input type="submit" class="submit nooutline" value="提交">
                            <input type="reset" class="reset nooutline" value="重置">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../common/templates/user/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../common/templates/user/js/common.js"></script>
    <script type="text/javascript" src="../common/templates/user/js/regist.js"></script>
</body>

</html>