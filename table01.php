<?php
	
	$data = [
		['id'=>1,'name'=>'张三','sx'=>18,'yw'=>120,'wy'=>90],
		['id'=>1,'name'=>'张三','sx'=>68,'yw'=>120,'wy'=>90],
		['id'=>1,'name'=>'张三','sx'=>98,'yw'=>120,'wy'=>90],
		['id'=>1,'name'=>'张三','sx'=>88,'yw'=>120,'wy'=>90],
		['id'=>1,'name'=>'张三','sx'=>78,'yw'=>120,'wy'=>90],
		['id'=>2,'name'=>'李四','sx'=>58,'yw'=>60,'wy'=>90],
		['id'=>3,'name'=>'网三','sx'=>98,'yw'=>70,'wy'=>90],
		['id'=>5,'name'=>'李丹','sx'=>98,'yw'=>120,'wy'=>90],
		['id'=>5,'name'=>'李丹','sx'=>78,'yw'=>120,'wy'=>90],
		
		

	];
	$ids = array_count_values(array_column($data,'id')) ;
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <script src="./public/jquery-1.8.3.min.js"></script>
</head>
<body>
<table border="1" width="800" height='600'>
			<tr>
				<th>姓名</th>
				<th>数学</th>
				<th>语文</th>
				<th>外语</th>

			</tr>
		<?php foreach($data as $val):?>
			<tr>
				<td class="stu_<?=$val['id']?>"><?=$val['name']?></td>
				<td><?=$val['sx']?></td>
				<td><?=$val['yw']?></td>
				<td><?=$val['wy']?></td>
			</tr>
		<?php endforeach;?>
			

		</table>

		<script type="text/javascript">
				var ids = <?=json_encode($ids)?>;
				for(x in ids){
					if(ids[x]>1){
						$('.stu_'+ x +':first-of-type').attr('rowspan',ids[x])
						$('.stu_'+ x +':not(.stu_'+ x +':first)').remove()//匹配不是第一个元素的其它元素全部干掉
					}	

				}
				

		</script>
</body>
</html>