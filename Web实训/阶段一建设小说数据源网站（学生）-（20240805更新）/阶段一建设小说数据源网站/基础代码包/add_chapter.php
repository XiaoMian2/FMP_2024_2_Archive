<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title> 张三 - 添加章节 </title>

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
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
                <h1 class="text-center">添加章节</h1>
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="NovelSelector" class="col-sm-2 control-label">选择小说</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="novelId" required>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputNovelChapterName" class="col-sm-2 control-label">章节名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNovelChapterName" name="chapter_name" placeholder="章节名" required maxlength="15">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputChapterContent" class="col-sm-2 control-label">章节内容</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="inputChapterContent" name="chapter_content" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default btn-block">添加</button>
                        </div>
                    </div>
                </form>
            </div>
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
