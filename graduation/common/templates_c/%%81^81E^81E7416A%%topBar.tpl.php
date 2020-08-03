<?php /* Smarty version 2.6.29, created on 2020-04-12 12:23:01
         compiled from user/topBar.tpl */ ?>
<script>
    document.write('<link rel="stylesheet" href="../common/templates/user/css/style.css?' + Math.random() + '">');
</script>
<div class="section header">
    <div class="wrapper clearfix">
        <div class="logo fl">校园失物招领平台</div>
        <div class="main-nav fl">
            <ul>
                <li>
                    <a href="index.php" <?php if ($this->_tpl_vars['title'] == 'index'): ?>class="on" <?php endif; ?>>首页</a>
                    <span>|</span>
                </li>
                <li>
                    <a href="list_lost.php" <?php if ($this->_tpl_vars['title'] == 'list_lost'): ?>class="on" <?php endif; ?>>寻物大厅</a>
                    <span>|</span>
                </li>
                <li>
                    <a href="list_found.php" <?php if ($this->_tpl_vars['title'] == 'list_found'): ?>class="on" <?php endif; ?>>招领大厅</a>
                    <span>|</span>
                </li>
                <li>
                    <a href="p_lost.php" <?php if ($this->_tpl_vars['title'] == 'p_lost'): ?>class="on" <?php endif; ?>>发布启事</a>
                    <span>|</span>
                </li>
                <li>
                    <a href="list_announce.php" <?php if ($this->_tpl_vars['title'] == 'list_announce'): ?>class="on" <?php endif; ?>>公告大厅</a>
                    <span>|</span>
                </li>
                <li>
                    <a href="list_thank.php" <?php if ($this->_tpl_vars['title'] == 'list_thank'): ?>class="on" <?php endif; ?>>感谢信大厅</a>
                    <span>|</span>
                </li>
                <li class="last">
                    <a href="about.php" <?php if ($this->_tpl_vars['title'] == 'about'): ?>class="on" <?php endif; ?>>关于我们</a>
                </li>
            </ul>
        </div>

        <div class="ucenter fr">
            <?php if (( ! $this->_tpl_vars['uid'] )): ?>
            <ul class="unlogin">
                <li><a href="login.php">登录</a><span>|</span></li>
                <li><a href="regist.php">注册</a></li>
            </ul>
            <?php else: ?>
            <div class="logined" style="width:auto;">
                <div href="#" id="uc-menu">
                    <span class="avatar"><img src="<?php echo $this->_tpl_vars['headImg']; ?>
" alt=""></span>
                    <span class="mutip" id="mutip" style="display:none;"><img src="../common/templates/images/bubble.png" ></span>
                    <span class="nickname"><?php echo $this->_tpl_vars['username']; ?>
</span>
                    <div class="uc-menu">
                        <span class="a"></span>
                        <ul>
                            <!--判断新消息来源-->
                            <li style="display:none;" id="pull_wrap"><a href="ucenter.php?p=list&action=pulling">最新推送<span class="mnumber"><h3 id="pullnum">0</h3></span></a></li>
                            <li style="display:none;" id="xs_wrap"><a href="javascript:;" id="getxs">收到线索<span class="mnumber"><h3 id="xsnum">0</h3></span></a></li>
                            <li style="display:none;" id="vd_wrap"><a href="javascript:;" id="getvalidation">验证处理<span class="mnumber"><h3 id="vdnum">0</h3></span></a></li>
                            <!--无新消息时-->
                            <li><a href="ucenter.php?p=list&action=working">正在发布</a></li>
                            <li><a href="ucenter.php?p=list">匹配推送</a></li>
                            <li><a href="check_rl.php" id="getrl">历史记录<span class="mnumber" style="display:none;" id="rl_wrap"><h3 id="rlnum">0</h3></span></a></li>
                            <li><a href="ucenter.php">个人资料</a></li>
                            <li><a href="ucenter.php?p=reset_psw">修改密码</a></li>
                            <li><a href="exit.php">退出</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="vd-mask" style="display:none;">
    <ul class="pop_box" style=" padding:20px 20px;">
        <li class="vd-title" style="padding-bottom:0; font-size:14px">
            <h3>
                <span>[招领]</span>
                <a href="detail.php?type=found&amp;l_id=60">电脑</a>
            </h3>
        </li>
        <li class="vd-title2" style="padding-bottom:0; font-size:14px">
            <span>留言用户：</span>
            <span>xiandean</span>
        </li>

        <li>
            <textarea class="answer-input" disabled="disabled" style="margin-top:10px; height:auto; border-color:#f5f5f5;">您没设置验证问题</textarea>
        </li>
        <li class="clearfix" style="padding-top:0;padding-bottom:20px;border-bottom: solid 1px #dddddd;">
            <span class="thank vd-confirm" data-rid="54" data-confirm="yes" style="cursor:pointer">保存</span>
            <span class="thank vd-confirm" data-rid="54" data-confirm="no" style="cursor:pointer">忽略</span>
            <span class="thank vd-cancle" style="cursor:pointer">回复</span>
        </li>
        <span class="pop_close"><img src="../common/templates/images/close_btn.png"></span>
    </ul>
</div>