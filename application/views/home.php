
<!doctype html>
<html>
<head>

</head>
<body>

<div class="banner">
  <section class="box">
    <ul class="texts">
      <p>第十人理论：</p>
      <p>十人中如果有九人得到的是相同的信息，</p>
      <p>第十人要做的就是提出异议，不管看上去有多不合理</p>
    </ul>
    <div class="avatar"><a href="#"><span>第十人</span></a> </div>
  </section>
</div>
<!--<div class="template">
  <div class="box">
    <h3>
      <p><span>个人博客</span>模板 Templates</p>
    </h3>
    <ul>
      <li><a href="/"  target="_blank"><img src="images/01.jpg"></a><span>仿新浪博客风格·梅——古典个人博客模板</span></li>
      <li><a href="/" target="_blank"><img src="images/02.jpg"></a><span>仿新浪博客风格·梅——古典个人博客模板</span></li>
      <li><a href="/"  target="_blank"><img src="images/03.jpg"></a><span>仿新浪博客风格·梅——古典个人博客模板</span></li>
      <li><a href="/" target="_blank"><img src="images/04.jpg"></a><span>仿新浪博客风格·梅——古典个人博客模板</span></li>
      <li><a href="/"  target="_blank"><img src="images/02.jpg"></a><span>仿新浪博客风格·梅——古典个人博客模板</span></li>
      <li><a href="/"  target="_blank"><img src="images/03.jpg"></a><span>仿新浪博客风格·梅——古典个人博客模板</span></li>
    </ul>
  </div>
</div>-->
<article>
  <h2 class="title_tj">
    <p>文章<span>推荐</span></p>
  </h2>
  <div class="bloglist left">
    <?php foreach ($previews as $preview):?>
      <h3><a title="/" href=" <?php echo "index.php/blog/".$preview->id;?>" target="_blank" ><?php echo $preview->title;?></a></h3>
      <figure><img src="application/views/<?php echo $preview->preview_pic ;?>"></figure>
      <ul>
        <p> <?php echo $preview->content_preview ;?></p>
        <a title="/" href="<?php echo "index.php/blog/".$preview->id;?>" target="_blank" class="readmore">阅读全文>></a>
      </ul>
      <p class="dateview"><span><?php echo $preview->insert_time ;?></span><span>作者：第十人</span><span>个人博客[<a href="<?php echo base_url("");?>">第十人</a>]</span> </span><span>阅读 (<?php echo $preview->view_count ;?>)</span></p>
    <?php endforeach;?>
  </div>
  <aside class="right">
    <div class="weather"><iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe></div>
    <div class="news">
    <h3>
      <p>最新<span>文章</span></p>
    </h3>
    <ul class="rank">
      <?php foreach ($last_five as $last_five):?>
        <li><a href="<?php echo "index.php/blog/".$last_five->id;?>" title="<?php echo $last_five->content_preview ;?>" target="_blank"><?php echo $last_five->title ;?></a></li>
      <?php endforeach;?>

    </ul>
    <!--<h3 class="ph">
      <p>点击<span>排行</span></p>
    </h3>
    <ul class="paih">
      <li><a href="/" title="Column 三栏布局 个人网站模板" target="_blank">Column 三栏布局 个人网站模板</a></li>
      <li><a href="/" title="withlove for you 个人网站模板" target="_blank">with love for you 个人网站模板</a></li>
      <li><a href="/" title="免费收录网站搜索引擎登录口大全" target="_blank">免费收录网站搜索引擎登录口大全</a></li>
      <li><a href="/" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
      <li><a href="/" title="企业做网站具体流程步骤" target="_blank">企业做网站具体流程步骤</a></li>
    </ul>-->
    <h3 class="links">
      <p>友情<span>链接</span></p>
    </h3>
    <ul class="website">
      <li><a href="http://www.uyicu.com/">青头白菜</a></li>
      <li><a href="http://union.click.jd.com/jdc?e=&p=AiIBZRprFDJWWA1FBCVbV0IUEEULRFRBSkAOClBMW0srGU8DR2YOaVJ3XkpzCGUNRVkbVyl7HRkOIgZlHVIdBhYHVCtrdHAi&t=W1dCFBBFC0RUQUpADgpQTFtL">京东商城</a></li>
      <!--<li><a href="/">谢泽文个人博客</a></li>
      <li><a href="/">3DST技术网</a></li>
      <li><a href="/">思衡网络</a></li>-->
    </ul>
    </div>
    <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
    <script type="text/javascript" id="bdshell_js"></script>
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
    </script>
    <!-- Baidu Button END -->
    <a href="/" class="weixin"> </a></aside>
</article>

</body>
</html>
