<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="ie8"><![endif]-->
<!--[if lt IE 7 ]><html class="ie6"><![endif]-->
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="校园，寻物，招领，启事，失主，物主，匹配" />
    <meta name="description" content="校园失物招领平台，致力于为校园寻物以及失物招领提供信息发布平台，同时通过快速的站内信息匹配推送，提高失物信息传播效率以及失物找回率，是失物寻找的好帮手。" />
    <title>留言管理</title>
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
        {include file="admin/sideBar.tpl"}
        <div class="rightpart">
            <div class="breadpiece">
                <span class="on">留言列表</span>
            </div>
            <!-- <div class="search">
            <div class="search-box">
                <input class="search-input" type="text" id="search"/>
                <input class="search-submit" type="submit" value="搜索" />
            </div>
        </div> -->
            <form action="" method="get">
                <ul class="sub-search clearfix">
                    <select id="select1">
                        <option value="0" {if !$type}selected="selected" {/if}>不限</option>
                        <option value="1" {if $type==1}selected="selected" {/if}>留言者</option>
                        <option value="2" {if $type==2}selected="selected" {/if}>留言内容</option>
                    </select>
                    <input type="hidden" name="type" id='type' value="">
                    <input type="text" class="sub-keywords" style="margin-left:10px;" value="{$keyword}" name="keyword"
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
                                <th>留言者</th>
                                <th>留言时间</th>
                                <th class="detail">详细内容</th>

                            </tr>
                        </thead>
                        <tbody>
                            {section name=key loop=$page.list}
                            <tr {if $smarty.section.key.index % 2==0}class="hui" {/if}>
                                <td><input type="checkbox" name="l[]" data-mid="{$page.list[key].id}" /></td>
                                <td>{$page.list[key].u_name}</td>
                                <td>{$page.list[key].p_date}</td>
                                <td class="detail">{$page.list[key].content}</td>

                            </tr>
                            {/section}

                        </tbody>
                    </table>
                </div>
                <div class="clearfix" style="width:740px;margin-bottom: 20px;">
                    <a class="delete" href="javascript:;">删除</a>
                    <a class="edit unselect" style="margin-left:0;" href="javascript:;">全不选</a>
                    <a class="edit selectall" href="javascript:;">全选</a>
                </div>
            </div>
            {if $page.pageTotal>1}
            <div class="pager" style="margin-bottom:30px;">
                {foreach from=$page.pageNav key=i item=value}
                <a class="{$value.class}"
                    href="?{if $type!=''}type={$type}&{/if}{if $keyword}keyword={$keyword}&{/if}page={$value.pageIndex}">{$value.text}</a>
                {/foreach}
            </div>
            {/if}
        </div>
    </div>
    <script type="text/javascript" src="../common/templates/admin/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../common/templates/admin/js/leave_list.js"></script>
</body>

</html>
