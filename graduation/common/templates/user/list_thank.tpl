<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="ie8"><![endif]-->
<!--[if lt IE 7 ]><html class="ie6"><![endif]-->
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="校园，寻物，招领，启事，失主，物主，匹配" />
    <meta name="description" content="校园失物招领平台，致力于为校园寻物以及失物招领提供信息发布平台，同时通过快速的站内信息匹配推送，提高失物信息传播效率以及失物找回率，是失物寻找的好帮手。" />
    <title>感谢信大厅</title>
</head>

<body>
    <!-- 页面导航 -->
    {include file="user/topBar.tpl"}
    <!-- /页面导航 -->
    <!--列表 -->
    <div class="section notes">
        <div class="wrapper clearfix">
            <div class="section-notes" style="padding-left: 40px;">
                <div class="title-bar2 find-hall-h1">
                    <div class="find-hall find-find" style="padding-left:0px;width:205px;">
                        感谢<span class="txt">信</span>大厅
                    </div>
                </div>
                <form action="" class="search-box" style="margin-top:20px;">
                    <div class="search-box">
                        <input class="search-input" type="text" name="keyword" value="{$keyword}" />
                        <input class="search-submit" type="submit" value="搜索" />
                    </div>
                </form>
                <div class="notes-list">
                    <ul>
                        {section name=key loop=$page.list}
                        <li class="clearfix">
                            <div class="notes-info">
                                <h2>{$page.list[key].title}</h2>
                                <p class="author">
                                    <span class="nickname">{$page.list[key].u_name}</span>
                                    <span class="time">{$page.list[key].p_date}</span>
                                </p>
                                <p class="text">{$page.list[key].context}
                                </p>
                            </div>
                        </li>
                        {/section}
                    </ul>
                    {if $page.pageTotal>1}
                    <div class="pager" style="margin-bottom:30px;padding-top:20px;">
                        {foreach from=$page.pageNav key=i item=value}
                        <a class="{$value.class}" href="?{if $keyword}keyword={$keyword}&{/if}page={$value.pageIndex}">{$value.text}</a> {/foreach}
                    </div>
                    {/if}
                </div>
            </div>
        </div>
    </div>
    <!-- 公告列表 -->
    <script type="text/javascript" src="../common/templates/user/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../common/templates/user/js/common.js"></script>
</body>

</html>