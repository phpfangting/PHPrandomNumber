<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>周报</title>

    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container" style="margin-top:100px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading"><strong>echo_music</strong>&nbsp;的周报</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <caption><?=date('Y-m-d')?></caption>
                        <thead>
                        <tr>
                            <th>日期</th>
                            <th>任务</th>
                            <th width="35%">进度</th>
                            <th>描述</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">周一</th>
                            <td>整理单元测试文档</td>
                            <td>
                                <div class="progress" style="margin:0">
                                    <?php $progress=100;?>
                                    <div class="progress-bar progress-bar-success progress-bar-striped"  role="progressbar" aria-valuenow="<?=$progress?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$progress?>%">
                                        <span class="sr-only"><?=$progress?>% Complete (success)</span>
                                    </div>
                                </div>

                            </td>
                            <td>完成单元测试入门</td>
                        </tr>
                        <tr>
                            <th scope="row">周二</th>
                            <td>惠民消费（活动）</td>
                            <td>
                                <div class="progress" style="margin:0">
                                    <?php $progress=50;?>
                                    <div class="progress-bar progress-bar-warning progress-bar-striped"  role="progressbar" aria-valuenow="<?=$progress?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$progress?>%">
                                        <span class="sr-only"><?=$progress?>% Complete (success)</span>
                                    </div>
                                </div>
                            </td>
                            <td>正在和前端对接口</td>
                        </tr>
                        <tr>
                            <th scope="row">周三</th>
                            <td>惠民消费（活动）</td>
                            <td>
                                <div class="progress" style="margin:0">
                                    <?php $progress=100;?>
                                    <div class="progress-bar progress-bar-success progress-bar-striped"  role="progressbar" aria-valuenow="<?=$progress?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$progress?>%">
                                        <span class="sr-only"><?=$progress?>% Complete (success)</span>
                                    </div>
                                </div>
                            </td>
                            <td>完成惠民消费</td>
                        <tr>
                            <th scope="row">周四</th>
                            <td>年鉴BUG</td>
                            <td>
                                <div class="progress" style="margin:0">
                                    <?php $progress=65;?>
                                    <div class="progress-bar progress-bar-warning progress-bar-striped"  role="progressbar" aria-valuenow="<?=$progress?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$progress?>%">
                                        <span class="sr-only"><?=$progress?>% Complete (success)</span>
                                    </div>
                                </div>
                            </td>
                            <td>年鉴首页BUG,拍卖结果页BUG</td>
                        </tr>
                        <tr>
                            <th scope="row">周五</th>
                            <td>年鉴BUG</td>
                            <td>
                                <div class="progress" style="margin:0">
                                    <?php $progress=100;?>
                                    <div class="progress-bar progress-bar-success progress-bar-striped"  role="progressbar" aria-valuenow="<?=$progress?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$progress?>%">
                                        <span class="sr-only"><?=$progress?>% Complete (success)</span>
                                    </div>
                                </div>
                            </td>
                            <td>完成年鉴首页BUG,拍卖结果页BUG</td>
                        </tr>
                        <tr>
                            <th scope="row">周六</th>
                            <td>休息</td>
                            <td>
                                <div class="progress" style="margin:0">
                                    <div class="progress-bar progress-bar-info progress-bar-striped"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        <span class="sr-only">100% Complete (success)</span>
                                    </div>
                                </div>
                            </td>
                            <td>sleep</td>
                        </tr>
                        <tr>
                            <th scope="row">周日</th>
                            <td>休息</td>
                            <td>
                                <div class="progress" style="margin:0">
                                    <div class="progress-bar progress-bar-info progress-bar-striped"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        <span class="sr-only">100% Complete (success)</span>
                                    </div>
                                </div>
                            </td>
                            <td>sleep</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>