<?php /* Smarty version 2.6.29, created on 2020-08-02 16:15:52
         compiled from admin/a_list.tpl */ ?>
<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="ie8"><![endif]-->
<!--[if lt IE 7 ]><html class="ie6"><![endif]-->
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="校园，寻物，招领，启事，失主，物主，匹配" />
    <meta name="description" content="校园失物招领平台，致力于为校园寻物以及失物招领提供信息发布平台，同时通过快速的站内信息匹配推送，提高失物信息传播效率以及失物找回率，是失物寻找的好帮手。" />
    <title>答案验证管理</title>
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
                <span class="on">答案验证列表</span>
            </div>
            <form action="" method="get">
                <ul class="sub-search clearfix">
                    <select id="select1">
                        <option value="0" <?php if (! $this->_tpl_vars['type']): ?>selected="selected" <?php endif; ?>>不限</option>
                        <option value="1" <?php if ($this->_tpl_vars['type'] == 1): ?>selected="selected" <?php endif; ?>>启事名称</option>
                        <option value="2" <?php if ($this->_tpl_vars['type'] == 2): ?>selected="selected" <?php endif; ?>>回答用户</option>
                    </select>
                    <input type="hidden" name="type" id='type' value="">
                    <input type="text" class="sub-keywords" style="margin-left:10px;" value="<?php echo $this->_tpl_vars['keyword']; ?>
" name="keyword"
                        autocomplete="off">
                    <input type="submit" class="select-btn thank submit" value=" 搜 索 ">
                </ul>
            </form>
            <div class="list m_left_30">
                <div class="lmessages">
                    <table cellpadding="5" cellspacing="1">
                        <thead>
                            <tr>
                                <th>选 择</th>
                                <th style="width:140px;text-align:center;">启事名称</th>
                                <th>验证问题</th>
                                <th>正确答案</th>
                                <th>回答用户</th>
                                <th>用户答案</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['page']['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <tr <?php if ($this->_sections['key']['index'] % 2 == 0): ?>class="hui" <?php endif; ?>>
                                <td><input type="checkbox" name="a[]" data-mid="<?php echo $this->_tpl_vars['page']['list'][$this->_sections['key']['index']]['id']; ?>
" /></td>
                                <td style="text-align:center;"><span class="a-type1">[招领]</span><a
                                        href="l_edit.php?type=<?php echo $this->_tpl_vars['page']['list'][$this->_sections['key']['index']]['type']; ?>
&l_id=<?php echo $this->_tpl_vars['page']['list'][$this->_sections['key']['index']]['l_id']; ?>
"><?php echo $this->_tpl_vars['page']['list'][$this->_sections['key']['index']]['l_name']; ?>
</a>
                                </td>
                                <td class="detail" style="text-align:center;"><?php echo $this->_tpl_vars['page']['list'][$this->_sections['key']['index']]['question']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['page']['list'][$this->_sections['key']['index']]['answer']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['page']['list'][$this->_sections['key']['index']]['u_name']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['page']['list'][$this->_sections['key']['index']]['u_answer']; ?>
</td>

                            </tr>
                            <?php endfor; endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="clearfix" style="margin-bottom: 20px;">
                    <a class="delete" href="javascript:;">删除</a>
                    <a class="edit unselect" style="margin-left:0;" href="javascript:;">全不选</a>
                    <a class="edit selectall" href="javascript:;">全选</a>
                </div>
            </div>
            <?php if ($this->_tpl_vars['page']['pageTotal'] > 1): ?>
            <div class="pager" style="margin-bottom:30px;">
                <?php $_from = $this->_tpl_vars['page']['pageNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['value']):
?>
                <a class="<?php echo $this->_tpl_vars['value']['class']; ?>
"
                    href="?<?php if ($this->_tpl_vars['type'] != ''): ?>type=<?php echo $this->_tpl_vars['type']; ?>
&<?php endif; ?><?php if ($this->_tpl_vars['keyword']): ?>keyword=<?php echo $this->_tpl_vars['keyword']; ?>
&<?php endif; ?>page=<?php echo $this->_tpl_vars['value']['pageIndex']; ?>
"><?php echo $this->_tpl_vars['value']['text']; ?>
</a>
                <?php endforeach; endif; unset($_from); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <script type="text/javascript" src="../common/templates/admin/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../common/templates/admin/js/a_list.js"></script>
</body>

</html>