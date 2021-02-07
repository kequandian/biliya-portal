<?php
require_once 'include.php';
$sql="select * from smup_news2 order by id desc";
$rows=fechAll($sql);
?>
<!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
  <meta charset="utf-8">
	<title>新闻动态-十美优品</title>
  <meta name="keywords" content="十美优品新闻中心，洗涤液新闻动态，十美优品新闻信息网，洗涤行业新闻动态">
  <meta name="description" content="广州十美日化有限公司每日新闻动态，每日为用户提供洗涤用品的正确使用方法和注意事项。每天多学一点，离健康更近一些。">
	<link rel="shortcut icon" href="http://image.10mup.com/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link href="css/jpage.css" rel="stylesheet" type="text/css"/>
  <script src="js/vendor/jquery-1.10.0.min.js"></script>
  <script src="js/vendor/jpage.min.js"></script>
<script>
$('document').ready(function(){
  $('#jpage').jpage({
    effect: 'random'//'', 'crossfade', 'bricks', 'slideLeft', 'slideRight', 'random'
  });
});
</script>
</head>
<body>
<div class="logo">
  <div class="logo_content">
    <div class="logo_left"><img src="http://image.10mup.com/LOGO.png" width="454" height="143" alt="logo"></div><!--logo_left结束-->
    <div class="logo_right">
      <img src="http://image.10mup.com/phone.jpg">全国统一热线：<span class="logo_right_font">4008-301-201</span>
    </div><!--logo_right结束-->
  </div>
</div><!--logo结束-->
<div class="nav_container">
   <div class="nav_font">
     <ul>
       <li><a href="index.html">首页</a></li>
       <li><a href="about.html">集团介绍</a></li>
       <li><a href="introduce.html">关于十美</a></li>
       <li><a href="products.html">产品展示</a></li>
       <li><a href="news.html" class="font_color">新闻动态</a></li>
       <li><a href="alliance.html">招商加盟</a></li>
       <li><a href="contact.html">联系我们</a></li>
     </ul>
   </div>
</div><!--nav结束-->
<div class="top_img">
  <div class="top_container">
    <img src="http://image.10mup.com/news_banner.jpg" sizes="(max-width:767px) 767px" alt="text">
  </div>
</div><!--top_img结束-->
<div class="location"><h2 class="news_title_l" style="font-size:18px;width:130px">您所在的位置:</h2>
  <ul>
    <li><a href="index.html">首页</a></li>
    <li class="location_img"><img src="http://image.10mup.com/indicate_right.jpg"></li>
    <li><a href="news.html">新闻动态</a></li>
  </ul>
</div><!--location结束-->
<div class="news_container" style="position:relative;min-height:800px;_height:800px;">
    <div id="jpage" class="news_paging"><!-- pagination panel -->
    <div class="list box text-shadow" data-type="content">
      <?php foreach ($rows as $row):?>
      <div class="list-item box"><!-- item 18 -->
        <div class="img left"><a onclick="goNews(<?php echo $row['id']?>)" title=""><img src="<?php echo $row['newsImg'];?>" height="110" alt="" title="怎么选购好的沐浴露"/></a></div>
        <div class="block right">
          <p class="date">2017-11-09</p>
          <p class="news_title_f"><a onclick="goNews(<?php echo $row['id']?>)" style="cursor:default"><?php echo $row['title'];?></a></p>
          <p class="desc"><?php echo $row['introduce'];?></p>
          <p class="like"><?php echo $row['likes'];?> Likes</p>
        </div>
      </div>
    <?php endforeach;?>
      <!-- <div class="list-item box">item 16
        <div class="img left"><a href="news_page/news_016.html" title=""><img src="http://image.10mup.com/news_img_009.jpg" alt="" title="如何使变硬的衣物变软-怎么避免衣物洗后变硬"/></a></div>
        <div class="block right">
          <p class="date">2017-11-04</p>
          <p class="news_title_f"><a href="news_page/news_016.html">如何使变硬的衣物变软-怎么避免衣物洗后变硬</a></p>
          <p class="desc">衣物经过几次洗涤后都会变硬，对于变硬的衣物许多人喜欢用衣物柔顺剂来处理，因为它能令衣物变得柔软，而且闻起来也更清新。然而，加拿大《自然生活》</p>
          <p class="like">789 Likes</p>
        </div>
      </div> -->
    </div>
    <div class="box jpage-panel" data-type="panel" style="clear:none"></div><!--控制按钮的-->
    <div class="perdu"></div>
  </div><!-- end of jPage DEMO -->
  <div class="container_right" style="position:absolute;left:76%;top:40px;">
    <h2 class="news_title_1">为您推荐</h2>
    <div class="news_empfehlung"><a href="news_page/news_006.html">个人清洁与健康：洁肤沐浴露</a></div>
    <div class="news_empfehlung"><a href="news_page/news_005.html">5个宝宝衣服洗涤注意事项</a></div>
    <div class="news_empfehlung"><a href="news_page/news_004.html">夏日清洗衣服记得洗护合一</a></div>
    <div class="news_empfehlung"><a href="news_page/news_002.html">荧光增白剂的安全使用说明</a></div>
    <div class="news_empfehlung"><a href="news_page/news_003.html">如何洗涤保养棉质衣服</a></div>
    <div class="empfehlung_dottom"><a href="news_company.php">公司动态</a></div>
  </div><!--container_right结束-->
  <div class="perdu"></div>
</div><!--news_container结束-->
<div class="footer">
  <div class="footer_content">
    <ul>
      <li><a href="index.html">首页</a>
        <ul>
          <li><a href="introduce.html">关于十美</a></li>
          <li><a href="products.html">产品展示</a></li>
          <li><a href="news.html">新闻动态</a></li>
          <li><a href="alliance.html">招商加盟</a></li>
          <li><a href="contact.html">联系我们</a></li>
        </ul>
      </li>
       <li><a href="products.html">产品展示</a>
        <ul>
          <li><a href="products/products_hand.html">手洗系列</a></li>
          <li><a href="products/products_baby.html">宝宝系列</a></li>
          <li><a href="products/products_bathe.html">沐浴系列</a></li>
          <li><a href="products/products_washer.html">洗衣机系列</a></li>
        </ul>
      </li>
      <li><a href="news.html">新闻动态</a>
        <ul>
          <li><a href="news_company.html">集团要闻</a></li>
          <li><a href="news.html">行业动态</a></li>
        </ul>
      </li>
      <li><a href="alliance.html">招商加盟</a></li>
      <li style="padding-top:6px;"><wb:follow-button uid="6339848551" type="red_1" width="67" height="22" title=""></wb:follow-button>
        <ul>
          <li><img src="http://image.10mup.com/wechat.jpg" width="25" height="25" alt="text" title="关注十美微信公众号"></li>
        </ul>
      </li>
      <li><img src="http://image.10mup.com/erweima1.jpg" width="150" height="150" alt="text">
        <ul>
          <li style="color:#999;width:160px;text-align:center;">欢迎进入十美微信商城</li>
        </ul>
      </li>
    </ul>
  </div><!--footer_content结束-->
</div><!--footer结束-->
<div class="copyright">
  <div class="copyright_top">
    <ul>
      <li>友情链接：</li>
      <li><a href="javascript:void(0)">嘉和基金</a></li>
      <li><img src="http://image.10mup.com/index_right.png"></li>
      <li><a href="javascript:void(0)">广东广播电视台</a></li>
      <li><img src="http://image.10mup.com/index_right.png"></li>
      <li><a href="javascript:void(0)">广州可圈点科技有限公司</a></li>
      <li><img src="http://image.10mup.com/index_right.png"></li>
      <li><a href="javascript:void(0)">广州益颜生物科技有限公司</a></li>
    </ul>
  </div>
  <div class="copyright_b"><p>Copyright &copy; 2017 广州十美日化有限公司&emsp;版权所有 </p><p>【粤ICP备15048211号-2】</p>
  </div>
</div><!--copyright结束--><a href="javascript:void(0)" id="btn" title="回到顶部"></a>
  <script src="js/top.js" type="text/javascript"></script>
  <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
</body>
<script type="text/javascript">
  function goNews(id){
    window.location="news_page/news_001.php?id="+id;
  }
</script>
</html>