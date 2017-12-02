<?php
//测试数据开始
$area = [
    1001 => [
        'contryName' => '中国',
        'childList' => [
            1 => '北京',
            2 => '上海',
            4 => '广州',
            5 => '深圳',
            6 => '南京',
            7 => '太原',
            8 => '西安',
            9 => '长沙',
            10 => '沈阳',
            11 => '香港',
            12 => '澳门',
            13 => '台湾',


        ]
    ],
    1002 => [
        'contryName' => '美国',
        'childList' => [
            1 => '华盛顿',
            2 => '硅谷'


        ]

    ]


];
$company = [

    1 => '古天一？ & 澳门华夏',
    2 => 'hd 北京文津阁',
    3 => '安徽新艺占 简称',
    4 => '001-test',
    5 => '易拍 & 全球',
];

$partyCategory = [
    1 => '古董 & 文玩',
    2 => '绘画雕塑',
    3 => '珠宝尚品',


];
$startTime = [
    0 => '今天',
    1 => '昨天',
    2 => '最近三天'


];


$teSeParty = [
    1 => '中国书 & 画（二）',
    2 => '中国铜器',
    3 => '香炉'


];
//测试数据结束


$data = $_GET;

$data['company']=!empty($data['company'])?explode(',',$data['company']):[];
$data['companyName']=!empty($data['companyName'])?explode(',',$data['companyName']):[];
//定义参数类型,用于区分不同的查询类型
$types = [
    1, //国家
    2,//城市
    3,//拍行
    4,//分类
    5,//开拍时间
    6,//特色拍卖
];
//定义参数值
$searchParam = [

    'contry',
    'city',
    'company',
    'partyCategory',
    'startTime',
    'teSeParty'

];
var_dump($data);
//把types当做key  把$searchParam当做值合并返回新的数组
$paramConfig = array_combine($types, $searchParam);
<<<<<<< HEAD
print_r($_GET);EXIT;
=======


>>>>>>> dev
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>测试啊</title>
    <script src="/public/jquery-1.8.3.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-size: 12px;
            line-height: 1.5;

        }

        /*地区*/
        ul {
            display: block;
            margin: 0 auto;
            width: 100%;
        }

        li {
            list-style: none;
        }

        ul .contury, .company li, .partyCategory li, .search li, .startTime li, .teSeParty li {
            float: left;
            width: 200px;
        }

        .area, .city {
            overflow: hidden;
        }

        .area .contury span {
            display: block;
            height: 30px;
            line-height: 30px;
            text-align: left;
            font-weight: bold;
        }

        .area .city {
            display: none;
        }

        .area .contury .city li, .company li, .partyCategory li, .search li, .startTime li, .teSeParty li {
            height: 30px;
            line-height: 30px;
            text-align: left;
            float: left;
            margin-right: 10px;
        }

        .area .contury:hover .city {
            background: lightcyan;
            display: block;
            width: 500px;
        }

        ul li:hover {
            background: lightblue;
            cursor: pointer;
        }

        .search .label {
            background: limegreen;
            position: relative;
        }

        .search .label:hover {
            background: red;
            cursor: pointer;
        }

        .search .label:hover::after {
            content: 'X';
            position: absolute;
            left: 190px;
            height: 20px;
            top: -8px;
            width: 20px;
            padding-bottom: 10px;
        }


    </style>
</head>
<body>

<ul class="area">
    <li style="width:100px;height: 30px;line-height: 30px;float: left">所在地区:</li>
    <?php foreach ($area as $contryId => $item): ?>
        <li class="contury">
            <!--type=1-->
            <span type="1"><?= $item['contryName'] ?></span>

            <ul class="city">
                <?php foreach ($item['childList'] as $cityid => $val): ?>
                    <li type="2" contryId="<?= $contryId ?>" contryName="<?= $item['contryName'] ?>"
                        cityId="<?= $cityid ?>"><?= $val ?></li>
                <?php endforeach; ?>
            </ul>

        </li>
    <?php endforeach; ?>

</ul>
<br>
<br>
<br>
<br>
<ul class="company">
    <li style="width:100px;height: 30px;line-height: 30px;float: left">拍卖公司:</li>
    <?php foreach ($company as $companyId => $companyName): ?>
        <li class="comp" type="3" companyId="<?= $companyId ?>"><?= $companyName ?></li>
    <?php endforeach; ?>
</ul>
<br>
<br>
<br>
<br>
<ul class="partyCategory">
    <li style="width:100px;height: 30px;line-height: 30px;float: left">专场分类:</li>
    <?php foreach ($partyCategory as $partyCategoryId => $partyCategoryName): ?>
        <li class='party' type="4" partyCategoryId="<?= $partyCategoryId ?>"><?= $partyCategoryName ?></li>
    <?php endforeach; ?>

</ul>
<br>
<br>
<br>
<br>
<ul class="startTime">
    <li style="width:100px;height: 30px;line-height: 30px;float: left">开拍时间:</li>
    <?php foreach ($startTime as $key => $dt): ?>
        <li class='start' type="5" startTimeId="<?= $key ?>"><?= $dt ?></li>
    <?php endforeach; ?>

</ul>
<br>
<br>
<br>
<br>

<ul class="teSeParty">
    <li style="width:100px;height: 30px;line-height: 30px;float: left">专场分类:</li>
    <?php foreach ($teSeParty as $tsid => $tsName): ?>
        <li class='teSe' type="6" teSeParty="<?= $tsid ?>"><?= $tsName ?></li>
    <?php endforeach; ?>

</ul>
<br>
<br>
<br>
<br>
<ul class="search">
    <li style="width:100px;height: 30px;line-height: 30px;float: left">查询的条件:</li>

    <?php foreach ($data as $k => $val): ?>
        <?php if (in_array($k, $paramConfig)): ?>
            <?php $type = array_search($k, $paramConfig); ?>
            <?php if (is_array($val)):?>
                <?php foreach ($val as $kk=>$item):?>
                <li class="label" type='<?= $type ?>' onclick='searchObj.delLabel(this,<?= $type ?>)'><?= str_replace('-', '&', $kk) ?></li>
                <?php endforeach;?>
            <?php else: ?>
                <li class="label" type='<?= $type ?>' onclick='searchObj.delLabel(this,<?= $type ?>)'><?= str_replace('-', '&', $data[$k . 'Name']) ?></li>

            <?php endif;?>
        <?php endif; ?>

    <?php endforeach; ?>


</ul>
</body>
</html>
<script>
    //要传递的参数,没有值必须设置为空
    var _json = {
        'contry': "<?=isset($data['contry']) ? $data['contry'] : ''?>",
        'contryName': "<?=isset($data['contryName']) ? $data['contryName'] : ''?>",
        'city': "<?=isset($data['city']) ? $data['city'] : ''?>",
        'cityName': "<?=isset($data['cityName']) ? $data['cityName'] : ''?>",
        'company': <?=!empty($data['company']) ? json_encode($data['company']) : json_encode([])?>,
        'companyName': <?=!empty($data['companyName']) ? json_encode($data['companyName']) : json_encode([])?>,
        'partyCategory': "<?=isset($data['partyCategory']) ? $data['partyCategory'] : ''?>",
        'partyCategoryName': "<?=isset($data['partyCategoryName']) ? $data['partyCategoryName'] : ''?>",
        'startTime': "<?=isset($data['startTime']) ? $data['startTime'] : ''?>",
        'startTimeName': "<?=isset($data['startTimeName']) ? $data['startTimeName'] : ''?>",
        'teSeParty': "<?=isset($data['teSeParty']) ? $data['teSeParty'] : ''?>",
        'teSePartyName': "<?=isset($data['teSePartyName']) ? $data['teSePartyName'] : ''?>",
    };

    //要跳转的地址
    var _url = 'searchPage.php';
    //标签操作
    var searchObj = {
        //删除查询的条件 [思路:按type类型来区分标签]
        delLabel: function (e, type) {
            //判断是否是国家分类标签
            //type 查询类型  1 国家 2 城市 3 拍行 4 分类
            $(e).remove();
            switch (type) {
                case 1:
                    //type 为1时说明用户点击的是国家标签,那么可以将子类删除
<<<<<<< HEAD
//                    $(e).remove();
=======

>>>>>>> dev
                    $('.search li[type="2"]').remove();
                    _json.contry = '';//国家编号
                    _json.contryName = '';//国家名称
                    _json.city = '';//城市编号
                    _json.cityName = '';//城市名称
                    window.location.href = searchObj.getUrl();
                    return;
                    break;
                case 2:
                    _json.city = '';//城市编号
                    _json.cityName = '';//城市名称
                    break;
                case 3:
                    _json.company = '';
                    _json.companyName = '';
                    break;
                case 4:
                    _json.partyCategory = '';
                    _json.partyCategoryName = '';
                    break;
                case 5:
                    _json.startTime = '';
                    _json.startTimeName = '';
                    break;
                case 6:
                    _json.teSeParty = '';
                    _json.teSePartyName = '';
                    break;
            }
            //type不为1时删除标签
//            $('.search li[type=' + type + ']').remove();
            //页面跳转
            window.location.href = searchObj.getUrl();
            return;

        },
        //参数拼接
        getUrl: function () {

//            console.log(_json.companyName);
//            console.log(_json.company);

            var param = '';
            for (k in _json) {
                //值不为空的时候才能拼接

                if (_json[k] != "") {
                    if ($.isArray(_json[k])) {
                        param += k + '=' + _json[k].join(',') + '&';
                    } else {
                        param += k + '=' + _json[k] + '&';
                    }
                }
            }
            //去除多余的&符
            param = param.replace(/^&|&$/, '');
            //返回完整的url
            return _url + (param ? '?' + param : '');
        }
    };
    //查询国家分类
    $('.area .contury .city li').click(function () {
        _json.contry = $(this).attr('contryId');//国家编号
        _json.contryName = $(this).attr('contryName');//国家名称
        _json.city = $(this).attr('cityId');//城市编号
        _json.cityName = $(this).html();//城市名称
        window.location.href = searchObj.getUrl();
    });
    //拍行公司查询
    $('.company .comp').click(function () {
        if ($.inArray($(this).attr('companyId'), _json.company) == -1) {
            _json.company.push($(this).attr('companyId'));
        }
        if ($.inArray($(this).html().replace('&', "-"), _json.companyName) == -1) {
            _json.companyName.push($(this).html().replace('&', "-"));
        }

        url = searchObj.getUrl();
        console.log(url);
        //window.location.href = searchObj.getUrl();
    });
    //专场分类查询
    $('.partyCategory .party').click(function () {
        _json.partyCategory = $(this).attr('partyCategoryId');
        _json.partyCategoryName = $(this).html().replace('&', "-");
        ;
        window.location.href = searchObj.getUrl();
    });
    //按时间分类查询
    $('.startTime .start').click(function () {
        _json.startTime = $(this).attr('startTimeId');
        _json.startTimeName = $(this).html().replace('&', "-");
        window.location.href = searchObj.getUrl();
    });
    //特色专场
    $('.teSeParty .teSe').click(function () {
        _json.teSeParty = $(this).attr('teSeParty');
        _json.teSePartyName = $(this).html().replace('&', "-");
        window.location.href = searchObj.getUrl();
    });
window.history.pushState(null,'','http://www.baidu.com')
</script>

