<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="<?php echo base_url("application/views/css/base.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("application/views/css/new.css"); ?>" rel="stylesheet">

</head>
<body>

<article class="blogs">
    <h1 class="t_nav"><span>您当前的位置：<a href="/index.html">首页</a>&nbsp;>&nbsp;<a href="/jstt/">项目相关</a>&nbsp;>&nbsp;<a
                href="/jstt/bj/">项目笔记</a></span><a href="/" class="n1">网站首页</a><a href="#" class="n2">{detail_type_name}</a></h1>

    <div class="index_about">
        <h2 class="c_titile">{detail_title}</h2>

        <p class="box_c"><span class="d_time">发布时间：{detail_insert_time}</span><span>编辑：<a
                    href='mailto:cody1990@sina.com'>第十人</a></span><span>阅读（{detail_view_count}）</span></p>
        <ul class="infos">
            {detail_content}
        </ul>
        <div class="keybq">
            <p><span>关键字词</span>：执行力</p>
        </div>

        <div class="nextinfo">
            <?php if ($prev_id != null) echo "<p>上一篇：<a href='".base_url("index.php/blog/".$prev_id)."'> " . $prev_title . "</a></p>" ?>
            <?php if ($next_id != null) echo "<p>下一篇：<a href='".base_url("index.php/blog/".$next_id)."'>" . $next_title . "</a></p>" ?>

        </div>

        <div class="blank"></div>

        <div class="comment"> 评论</div>

    </div>

    <div class="right">


        <div class="rnavs">
            <h2>栏目导航</h2>
            <ul>

                <li><a href="http://www.ishuhui.com/" target="_blank">爱鼠绘</a></li>

                <li><a href="http://www.ip3q.com/" target="_blank">IP查询</a></li>

                <li><a href="http://www.e2go.com.cn/" target="_blank">北京客运网</a></li>

                <li><a href="http://www.jd.com/?utm_source=p.yiqifa.com&utm_medium=tuiguang&utm_campaign=t_1_724125&utm_term=5f98ddb9c9a74f5f936e77e6ae47bf83" target="_blank">京东商城</a></li>

                <li><a href="http://sae.sina.com.cn/" target="_blank">新浪引擎</a></li>

                <li><a href="http://www.hongtao.xyz/" target="_blank">红桃代理</a></li>
            </ul>
        </div>
        <div class="blank"></div>
        <div class="news">
            <h3>
                <p>栏目<span>最新</span></p>
            </h3>
            <ul class="rank">
                <?php foreach ($type_previews as $preview):?>
                    <li><a href="<?php echo base_url("index.php/blog/".$preview->id); ?>" title="<?php echo $preview->title;?>" target="_blank"><?php echo $preview->title;?></a>
                    </li>
                <?php endforeach;?>

            </ul>
            <h3 class="ph">
        </div>
        </div>
</article>

        </body>

