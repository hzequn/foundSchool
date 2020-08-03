<?php /* Smarty version 2.6.29, created on 2020-04-06 21:32:49
         compiled from user/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'smartTruncate', 'user/index.tpl', 94, false),)), $this); ?>
<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="ie8"><![endif]-->
<!--[if lt IE 7 ]><html class="ie6"><![endif]-->
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="校园，寻物，招领，启事，失主，物主，匹配" />
    <meta name="description" content="校园失物招领平台，致力于为校园寻物以及失物招领提供信息发布平台，同时通过快速的站内信息匹配推送，提高失物信息传播效率以及失物找回率，是失物寻找的好帮手。" />
    <title>校园失物招领平台</title>
</head>

<body>
    <!-- 页面导航 -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user/topBar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!-- /页面导航 -->
    <!--搜索区-->
    <div class="section search" style="margin-top:10px;">
        <div class="wrapper hand-seach">
            <form action="search.php" method="get">
                <div class="search-box">
                    <input class="search-input" type="text" id="search" name="keywords" value="<?php echo $this->_tpl_vars['keys']; ?>
" />
                    <input class="search-submit" type="submit" value="搜索" />
                    <input class="search-submit2 <?php if ($this->_tpl_vars['sub']): ?>active<?php endif; ?>" type="button" value="高级搜索" />
                    <div class="usually">
                        <span class="tt a-type1">常用关键字 : </span>
                        <span class="select">
                            <a  href="">手机</a>
                            <a  href="">钱包</a>
                            <a  href="">校园卡</a>
                            <a  href="">学生证</a>
                            <a  href="">雨伞</a>
                            <a  href="">教材</a>
                            <a  href="">水壶</a>
                            <a  href="">电脑</a>
                            <a  href="">U盘</a>
                            <a  href="">背包</a>
                        </span>
                    </div>
                </div>
            </form>
            <form action="search.php" method="get">
                <ul class="sub-search clearfix" <?php if (! $this->_tpl_vars['sub']): ?>style="display:none;" <?php endif; ?>>
                    <span>启事类型：</span>
                    <select id="select1">
                <option value="1" selected="selected">所有启事</option>
                <option value="2">寻物启事</option>
                <option value="3">招领启事</option>
            </select>
                    <input type="hidden" id="type" name="type" value="" />
                    <span>失物类别：</span>
                    <select id="select2">
                <option value="0" <?php if ($this->_tpl_vars['class'] == 0): ?>selected="selected"<?php endif; ?>>不限</option>
                <option value="1" <?php if ($this->_tpl_vars['class'] == 1): ?>selected="selected"<?php endif; ?>>证件</option>
                <option value="2" <?php if ($this->_tpl_vars['class'] == 2): ?>selected="selected"<?php endif; ?>>电子产品</option>
                <option value="3" <?php if ($this->_tpl_vars['class'] == 3): ?>selected="selected"<?php endif; ?>>学习用品</option>
                <option value="4" <?php if ($this->_tpl_vars['class'] == 4): ?>selected="selected"<?php endif; ?>>衣物</option>
                <option value="5" <?php if ($this->_tpl_vars['class'] == 5): ?>selected="selected"<?php endif; ?>>箱包</option>
                <option value="6" <?php if ($this->_tpl_vars['class'] == 6): ?>selected="selected"<?php endif; ?>>宠物</option>
                <option value="7" <?php if ($this->_tpl_vars['class'] == 7): ?>selected="selected"<?php endif; ?>>其他</option>
            </select>
                    <input type="hidden" id="class" name="class" value="" />
                    <span>丢失日期：</span>
                    <input name="date1" value="<?php echo $this->_tpl_vars['date1']; ?>
" type="text" class="Wdate" onClick="WdatePicker()" size=6 maxlength=5><span style="padding:0 5px;">至</span><input name="date2" type="text" value="<?php echo $this->_tpl_vars['date2']; ?>
" class="Wdate" onClick="WdatePicker()" size=6
                        maxlength=5>
                    <span>关键字：</span>
                    <input type="text" class="sub-keywords" value="<?php echo $this->_tpl_vars['keys']; ?>
" name="sub-keywords" />
                    <input type="submit" class="select-btn thank" value=" 筛 选 " />
                </ul>
            </form>
        </div>
    </div>
    <!-- 启事大厅 -->
    <div class="section notice">
        <div class="wrapper clearfix">
            <div class="section-notice fr">
                <h1 class="title-bar1">
                    <div class="topic-title">
                        最<span class="txt">新</span>寻物
                    </div>
                </h1>
                <div class="notice-list">
                    <?php if (! $this->_tpl_vars['lost']): ?>
                    <p style="padding-left:20px;line-height:30px;">暂无相关启事！</p><?php else: ?>
                    <ul>
                        <?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['lost']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['key']['show'] = true;
$this->_sections['key']['max'] = $this->_sections['key']['loop'];
$this->_sections['key']['step'] = 1;
$this->_sections['key']['start'] = $this->_sections['key']['step'] > 0 ? 0 : $this->_sections['key']['loop']-1;
if ($this->_sections['key']['show']) {
    $this->_sections['key']['total'] = $this->_sections['key']['loop'];
    if ($this->_sections['key']['total'] == 0)
        $this->_sections['key']['show'] = false;
} else
    $this->_sections['key']['total'] = 0;
if ($this->_sections['key']['show']):

            for ($this->_sections['key']['index'] = $this->_sections['key']['start'], $this->_sections['key']['iteration'] = 1;
                 $this->_sections['key']['iteration'] <= $this->_sections['key']['total'];
                 $this->_sections['key']['index'] += $this->_sections['key']['step'], $this->_sections['key']['iteration']++):
$this->_sections['key']['rownum'] = $this->_sections['key']['iteration'];
$this->_sections['key']['index_prev'] = $this->_sections['key']['index'] - $this->_sections['key']['step'];
$this->_sections['key']['index_next'] = $this->_sections['key']['index'] + $this->_sections['key']['step'];
$this->_sections['key']['first']      = ($this->_sections['key']['iteration'] == 1);
$this->_sections['key']['last']       = ($this->_sections['key']['iteration'] == $this->_sections['key']['total']);
?>
                        <li class="clearfix">
                            <a href="detail.php?type=lost&l_id=<?php echo $this->_tpl_vars['lost'][$this->_sections['key']['index']]['l_id']; ?>
">
                                <img src="<?php if ($this->_tpl_vars['lost'][$this->_sections['key']['index']]['l_img']): ?><?php echo $this->_tpl_vars['lost'][$this->_sections['key']['index']]['l_img']; ?>
<?php else: ?>../common/templates/images/wutu.jpg<?php endif; ?>" alt="">
                            </a>
                            <div class="news-info">
                                <h1>
                                    <span class="a-type1">[寻物]</span>
                                    <a href="detail.php?type=lost&l_id=<?php echo $this->_tpl_vars['lost'][$this->_sections['key']['index']]['l_id']; ?>
" class="a-type1 lost-title"><?php echo ((is_array($_tmp=$this->_tpl_vars['lost'][$this->_sections['key']['index']]['l_name'])) ? $this->_run_mod_handler('smartTruncate', true, $_tmp, 8, "...") : smarty_modifier_smartTruncate($_tmp, 8, "...")); ?>
</a>
                                </h1>
                                <h2>
                                    <span class="a-type1 lost-features">特征 :</span>
                                    <span class="a-type1" style="height:inherit; overflow:hidden;color:#666 !important;"><?php echo $this->_tpl_vars['lost'][$this->_sections['key']['index']]['l_feature']; ?>
</span>
                                </h2>
                                <p class="text a-type3">
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['lost'][$this->_sections['key']['index']]['l_desc'])) ? $this->_run_mod_handler('smartTruncate', true, $_tmp, 100, "...") : smarty_modifier_smartTruncate($_tmp, 100, "...")); ?>

                                </p>
                                <p class="author">
                                    <span class="time"><?php echo $this->_tpl_vars['lost'][$this->_sections['key']['index']]['p_date']; ?>
</span>
                                </p>
                            </div>
                        </li>
                        <?php endfor; endif; ?>
                        <li class="clearfix" style="border-bottom:none;">
                            <div class="notice-info check-more" align="right">
                                <h3><a href="list_lost.php">查看更多></a></h3>
                            </div>
                        </li>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
            <div class="section-notice fl">
                <h1 class="title-bar1">
                    <div class="topic-title">
                        最<span class="txt">新</span>招领
                    </div>
                </h1>
                <div class="notice-list ">
                    <?php if (! $this->_tpl_vars['found']): ?>
                    <p style="padding-left:20px;line-height:30px;">暂无相关启事！</p><?php else: ?>
                    <ul>
                        <?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['found']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['key']['show'] = true;
$this->_sections['key']['max'] = $this->_sections['key']['loop'];
$this->_sections['key']['step'] = 1;
$this->_sections['key']['start'] = $this->_sections['key']['step'] > 0 ? 0 : $this->_sections['key']['loop']-1;
if ($this->_sections['key']['show']) {
    $this->_sections['key']['total'] = $this->_sections['key']['loop'];
    if ($this->_sections['key']['total'] == 0)
        $this->_sections['key']['show'] = false;
} else
    $this->_sections['key']['total'] = 0;
if ($this->_sections['key']['show']):

            for ($this->_sections['key']['index'] = $this->_sections['key']['start'], $this->_sections['key']['iteration'] = 1;
                 $this->_sections['key']['iteration'] <= $this->_sections['key']['total'];
                 $this->_sections['key']['index'] += $this->_sections['key']['step'], $this->_sections['key']['iteration']++):
$this->_sections['key']['rownum'] = $this->_sections['key']['iteration'];
$this->_sections['key']['index_prev'] = $this->_sections['key']['index'] - $this->_sections['key']['step'];
$this->_sections['key']['index_next'] = $this->_sections['key']['index'] + $this->_sections['key']['step'];
$this->_sections['key']['first']      = ($this->_sections['key']['iteration'] == 1);
$this->_sections['key']['last']       = ($this->_sections['key']['iteration'] == $this->_sections['key']['total']);
?>
                        <li class="clearfix">
                            <a href="detail.php?type=found&l_id=<?php echo $this->_tpl_vars['found'][$this->_sections['key']['index']]['l_id']; ?>
"><img src="<?php if ($this->_tpl_vars['found'][$this->_sections['key']['index']]['l_img']): ?><?php echo $this->_tpl_vars['found'][$this->_sections['key']['index']]['l_img']; ?>
<?php else: ?>../common/templates/images/wutu.jpg<?php endif; ?>" alt=""></a>
                            <div class="news-info">
                                <h1>
                                    <span class="a-type1">[招领]</span>
                                    <a href="detail.php?type=found&l_id=<?php echo $this->_tpl_vars['found'][$this->_sections['key']['index']]['l_id']; ?>
" class="a-type1 lost-title"><?php echo $this->_tpl_vars['found'][$this->_sections['key']['index']]['l_name']; ?>
</a>
                                </h1>
                                <h2>
                                    <span class="a-type1 lost-features">特征 :</span>
                                    <span class="a-type1" style="height:inherit; overflow:hidden;color:#666 !important"><?php echo $this->_tpl_vars['found'][$this->_sections['key']['index']]['l_feature']; ?>
</span>
                                </h2>
                                <p class="text a-type3" style="padding-top:0; font-size:14px;">
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['found'][$this->_sections['key']['index']]['l_desc'])) ? $this->_run_mod_handler('smartTruncate', true, $_tmp, 100, "...") : smarty_modifier_smartTruncate($_tmp, 100, "...")); ?>

                                </p>
                                <p class="author">
                                    <span class="time"><?php echo $this->_tpl_vars['found'][$this->_sections['key']['index']]['p_date']; ?>
</span>
                                </p>
                            </div>
                        </li>
                        <?php endfor; endif; ?>
                        <li class="clearfix" style="border-bottom:none;">
                            <div class="notice-info check-more" align="right">
                                <h3><a href="list_found.php">查看更多></a></h3>
                            </div>
                        </li>
                    </ul>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <!--启事大厅 -->
    <!--公告栏 留言板 感谢信-->
    <div class="section notice">
        <div class="wrapper clearfix">
            <div class="section-notice fl">
                <div class="section-ranking">
                    <h1 class="title-bar plate-div-h1">
                        <div class="plate-div">公告<span class="txt">栏</span></div>
                    </h1>
                    <div class="ranking-list">
                        <ul>
                            <?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['announce']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['key']['show'] = true;
$this->_sections['key']['max'] = $this->_sections['key']['loop'];
$this->_sections['key']['step'] = 1;
$this->_sections['key']['start'] = $this->_sections['key']['step'] > 0 ? 0 : $this->_sections['key']['loop']-1;
if ($this->_sections['key']['show']) {
    $this->_sections['key']['total'] = $this->_sections['key']['loop'];
    if ($this->_sections['key']['total'] == 0)
        $this->_sections['key']['show'] = false;
} else
    $this->_sections['key']['total'] = 0;
if ($this->_sections['key']['show']):

            for ($this->_sections['key']['index'] = $this->_sections['key']['start'], $this->_sections['key']['iteration'] = 1;
                 $this->_sections['key']['iteration'] <= $this->_sections['key']['total'];
                 $this->_sections['key']['index'] += $this->_sections['key']['step'], $this->_sections['key']['iteration']++):
$this->_sections['key']['rownum'] = $this->_sections['key']['iteration'];
$this->_sections['key']['index_prev'] = $this->_sections['key']['index'] - $this->_sections['key']['step'];
$this->_sections['key']['index_next'] = $this->_sections['key']['index'] + $this->_sections['key']['step'];
$this->_sections['key']['first']      = ($this->_sections['key']['iteration'] == 1);
$this->_sections['key']['last']       = ($this->_sections['key']['iteration'] == $this->_sections['key']['total']);
?>
                            <li>
                                <h2 style=" font-weight:100; display: inline-block;height:24px;"><?php echo $this->_tpl_vars['announce'][$this->_sections['key']['index']]['title']; ?>
</h2>
                                <span class="time"><?php echo $this->_tpl_vars['announce'][$this->_sections['key']['index']]['p_date']; ?>
</span>
                                <p class="text"><?php echo $this->_tpl_vars['announce'][$this->_sections['key']['index']]['context']; ?>
</p>
                            </li>
                            <?php endfor; endif; ?>
                            <li class="clearfix no-border">
                                <div class="notice-info  check-more" align="right">
                                    <h4><a href="list_announce.php">查看更多></a></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="leavemessage">
                    <h1 class="title-bar plate-div-h1">
                        <div class="plate-div">留言<span class="txt">板</span></div>
                    </h1>
                    <?php if (( ! $this->_tpl_vars['uid'] )): ?>
                    <div class="require">
                        <h2 style="padding-top:50px; font-size:medium;">如需留言，请先登陆</h2>
                    </div>
                    <div>
                        <a class="tologin" href="login.php">去登录</a>
                    </div>
                    <?php else: ?>
                    <div class="leavemessage-textarea">
                        <textarea name="leavemessage" placeholder=" 欢迎留下您对本网站存在的任何意见或建议。"></textarea>
                    </div>
                    <div>
                        <input class="leavemessage-submit nooutline" type="submit" id="leavemessage" value="提交" />
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="section-notice fr">
                <div class="thletter">
                    <h1 class="title-bar plate-div-h1">
                        <div class="plate-div">感谢<span class="txt">信</span></div>
                    </h1>
                    <div class="letter-list">
                        <ul>
                            <?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['thanks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['key']['show'] = true;
$this->_sections['key']['max'] = $this->_sections['key']['loop'];
$this->_sections['key']['step'] = 1;
$this->_sections['key']['start'] = $this->_sections['key']['step'] > 0 ? 0 : $this->_sections['key']['loop']-1;
if ($this->_sections['key']['show']) {
    $this->_sections['key']['total'] = $this->_sections['key']['loop'];
    if ($this->_sections['key']['total'] == 0)
        $this->_sections['key']['show'] = false;
} else
    $this->_sections['key']['total'] = 0;
if ($this->_sections['key']['show']):

            for ($this->_sections['key']['index'] = $this->_sections['key']['start'], $this->_sections['key']['iteration'] = 1;
                 $this->_sections['key']['iteration'] <= $this->_sections['key']['total'];
                 $this->_sections['key']['index'] += $this->_sections['key']['step'], $this->_sections['key']['iteration']++):
$this->_sections['key']['rownum'] = $this->_sections['key']['iteration'];
$this->_sections['key']['index_prev'] = $this->_sections['key']['index'] - $this->_sections['key']['step'];
$this->_sections['key']['index_next'] = $this->_sections['key']['index'] + $this->_sections['key']['step'];
$this->_sections['key']['first']      = ($this->_sections['key']['iteration'] == 1);
$this->_sections['key']['last']       = ($this->_sections['key']['iteration'] == $this->_sections['key']['total']);
?>
                            <li>
                                <h2 style="font-weight:100;height:24px;"><?php echo $this->_tpl_vars['thanks'][$this->_sections['key']['index']]['title']; ?>
</h2>
                                <div class="timeandname">
                                    <span class="author">发布人 : <?php echo $this->_tpl_vars['thanks'][$this->_sections['key']['index']]['u_name']; ?>
</span>
                                    <span class="time"><?php echo $this->_tpl_vars['thanks'][$this->_sections['key']['index']]['p_date']; ?>
</span>
                                </div>
                                <p class="text"><?php echo $this->_tpl_vars['thanks'][$this->_sections['key']['index']]['context']; ?>
</p>
                            </li>

                            <?php endfor; endif; ?>
                            <li class="clearfix no-border">
                                <div class="notice-info  check-more" align="right">
                                    <h4><a href="list_thank.php">查看更多></a></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--公告栏 留言板 感谢信-->
    <script type="text/javascript" src="../common/templates/user/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../common/templates/user/js/Date/WdatePicker.js"></script>
    <script type="text/javascript" src="../common/templates/user/js/common.js"></script>
    <script type="text/javascript" src="../common/templates/user/js/index.js"></script>
</body>

</html>