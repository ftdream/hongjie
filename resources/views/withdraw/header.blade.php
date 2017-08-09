<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/css/withdraw.css" rel="stylesheet">
        <script src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>
        <script src="/assets/js/DatePicker/WdatePicker.js" type="text/javascript"></script>
        <script src="/assets/js/common.js" type="text/javascript"></script>
    </head>
    <body class="home-template">
        <div class="header" style="background-image: url(/assets/images/withdraw/banner.jpg)">
            <div class="logoimg">
                <a href="#">
                    <img src="/assets/images/withdraw/box.png" alt="" width="78">
                </a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="logotxt">
                             <!--
                             <h1>
                                <a href="http://www.hongegroup.com">弘洁</a>
                            </h1>
                            -->
                        </div>
                        <h2 class="site-name text-center">
                            弘洁
                            <span>www.hongegroup.com</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </body>
</html>
