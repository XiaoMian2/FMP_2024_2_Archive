<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title> 张三 - 章节详情 </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/project.css">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.cn/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.cn/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img alt="Brand" src="images/brand.jpeg">
                </a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">主页</a></li>
                <li><a href="create_new.php">创建小说</a></li>
                <li><a href="add_chapter.php">添加章节</a></li>
                <li><a href="logout.php">退出登录</a></li>
                <li><a href="registration.php">注册</a></li>
                <li><a href="login.php">登录</a></li>
            </ul>
            <form method="post" action="search_result.php" class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" name="keyword" placeholder="小说名或作者名" required>
                </div>
                <button type="submit" class="btn btn-default">搜</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
    <div class="container">

        <div class="search-result">《xxxx》小说 - 第一章 XXXXX &nbsp;&nbsp;&nbsp; - <small>XXX</small></div>
        <div class="row">
            <p style="padding: 1em;">
                　　
                　　“在堤坝之后……是文明与生命的坟墓吗？！”
                　　
                　　跳大神的不禁喃喃着。
                　　
                　　这一刻，所有人都心神震动。
                　　
                　　浩瀚的宇宙，永恒的时空，在岁月上游中，曾有太多太多的生命纪元了。
                　　
                　　生命一次次出现，然后一次次毁灭，就像是大海浪花中的蜉蝣，生死不由人。
                　　
                　　寂者所属的文明、仙道、圣道等……又是第几个兴盛的生命纪元？没人知晓。
                　　
                　　而那些逝去的文明和过往，原本是被埋葬在堤坝之后的。
                　　
                　　随着李凡归来，神圣大潮复苏，这些逝去的过往没有了堤坝的阻拦，便出现在这一世。
                　　
                　　简单来说，往日重现！
                　　
                　　因为神圣大潮引动了岁月和因果的源头，所以让逝去的一切过往，同时出现，造成了往日重现的盛况，那些死去的强者和生灵，都以一种特殊的状态复苏而来。
                　　
                　　而此刻，随着小山村中敲锣打鼓办喜事的声音，历史长河中的无数眸光，都聚集到了小山村。
                　　
                　　“小山村中有喜事吗？”
                　　
                　　“喜事……难道是……”
                　　
                　　火灵儿等人，也瞩目向小山村。
                　　
                　　就在此刻，从小山村中，更是有一股莫名的力量，突破了虚实的界限，抵达村外。
                　　
                　　当世之中，忽然有两人被这种力量降临。
                　　
                　　云溪的生父——云辰，以及她的母亲，林雪涵。
                　　
                　　这种力量降临，因果长河瞬间都沸腾了，无尽的因果碎片，化作台阶，出现在他们脚下，形成了一条宽阔的因果桥梁，让他们直接可以通向那小山村中。
                　　
                　　“这是怎么回事？”慕千凝吃惊地开口。
                　　
                　　“云辰前辈，被小山村中的因果眷顾，超越了虚实界限，他可以进入其中！”
                　　
                　　火灵儿则是神色凝重。　
            </p>
        </div>
    </div>
</div>

<div class="row">
    <ul class="list-inline text-center">
        <li>张三&nbsp;&nbsp;@</li><li><a href="http://www.fmp.edu.cn/" target="_blank">小说网站名字</a></li>
    </ul>
</div>

<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="js/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>
