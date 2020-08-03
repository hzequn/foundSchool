<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="ie8"><![endif]-->
<!--[if lt IE 7 ]><html class="ie6"><![endif]-->
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="校园，寻物，招领，启事，失主，物主，匹配" />
    <meta name="description" content="校园失物招领平台，致力于为校园寻物以及失物招领提供信息发布平台，同时通过快速的站内信息匹配推送，提高失物信息传播效率以及失物找回率，是失物寻找的好帮手。" />
    <script>
        document.write('<link rel="stylesheet" href="../common/templates/admin/css/mstyle.css?' + Math.random() + '">');
    </script>
    <title>管理员登陆</title>
</head>

<body>
    <!--登录-->
    <div class="mCenter-bar topbar">
        <div class="wrapper">
            <h1 style="margin-left: 120px;">管理员登陆</h1>
        </div>
    </div>
    <div class="section mCenter">
        <div class="wrapper clearfix">
            <div class="mCenter-content">
                <div class="mCenter-follow mcenter-set">
                    <form method="post" action='checkLogin.php'>
                        <div class="form-row clearfix">
                            <span class="tt"><em>*</em> 账号</span>
                            <input type="text" name="name" class="ipt-text" placeholder="请输入账号" autocomplete="off">
                        </div>
                        <div class="form-row clearfix">
                            <span class="tt"><em>*</em> 密码</span>
                            <input type="password" name="password" class="ipt-text" placeholder="请输入密码">
                        </div>
                        <div class="form-row clearfix">
                            <span class="tt"><em>*</em> 验证码</span>
                            <input type="text" name="code" style="width:80px;margin-right: 10px;" class="ipt-text" placeholder="请输入验证码" autocomplete="off">
                            <img style="display:inline; vertical-align:middle;border-radius: 6px;" src="" id="imgcode"><a href="javascript:;" id="reCode" style="margin-left:6px;text-decoration: none;color:#ffe60f;font-size: 14px;">换一张</a>
                        </div>
                        <!-- <div class="form-row clearfix"><input type="checkbox" name="auto" class="tip" />自动登陆</div> -->
                        <div class="form-row clearfix nooutline">
                            <span class="tt"></span>
                            <input type="submit nooutline" class="submit" value="登陆" style="padding:0 40px;" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--登录-->
    <script type="text/javascript" src="../common/templates/admin/js/jquery-1.7.2.min.js"></script>
    <!-- <script type="text/javascript" src="../common/templates/admin/js/login.js"></script> -->
    <!-- 解决缓存 -->
    <script>
        document.write('<script type="text/javascript" src="../common/templates/admin/js/login.js?' + +Math.random() + '"><\/script>');
    </script>
</body>

</html>