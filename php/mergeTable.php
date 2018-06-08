<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	
	//var ids = <?=!empty($result['setOrderList'])?json_encode(array_count_values(array_column($result['setOrderList'],'memberId'))):json_encode([])?>;
    ids=[];
    for (x in ids) {
        if (ids[x] > 1) {
            $('.one_' + x).eq(0).attr('rowspan', ids[x])
            $('.one_' + x + ':not(.one_' + x + ':first)').remove()//匹配不是第一个元素的其它元素全部干掉

            $('.two_' + x).eq(0).attr('rowspan', ids[x])
            $('.two_' + x + ':not(.two_' + x + ':first)').remove()//匹配不是第一个元素的其它元素全部干掉
        }

    }
</script>
</body>
</html>