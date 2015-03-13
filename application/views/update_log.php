
<!doctype html>
<html>
<head>

    <link href="<?php echo base_url("application/views/css/base.css");?>" rel="stylesheet">
    <link href="<?php echo base_url("application/views/css/mood.css");?>" rel="stylesheet">

</head>
<body>

<div class="moodlist">
    <h1 class="t_nav"><span>我们的每一步，都是一个回忆</span><a href="/" class="n1">网站首页</a><a href="/" class="n2">更新日志</a></h1>
    <div class="bloglist">
        <?php foreach ($logs as $log):?>
        <ul class="arrow_box">
            <div class="sy">
                <!--<img src="images/001.png">-->
                <p> <?php echo $log->update_content ;?></p>
            </div>
            <span class="dateview"><?php echo $log->update_date ;?></span>
        </ul>
        <?php endforeach;?>

    </div>
    <div class="page"><!--<a title="Total record"><b>41</b></a><b>1</b><a href="/news/s/index_2.html">2</a><a href="/news/s/index_2.html">&gt;</a><a href="/news/s/index_2.html">&gt;&gt;</a></div>
--></div>

</body>
</html>