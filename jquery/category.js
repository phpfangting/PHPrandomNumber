/**
  *
  *分类折叠
  *
  */


$(function () {

       $('#cateList .glyphicon').click(function () {
           var _this = $(this).parent('td').parent('tr');//获取tr对象
           var level = $(_this).attr('level')*1;//层级深度数 0 一级, 1 二级, 2 三家
           $(_this).toggleClass('off-flog');//标记是否展开或收缩  "" 展开, 'off-flog' 收缩
           if($(_this).hasClass('off-flog')){
               //如果收起了就添加+
               $(this).removeClass('glyphicon-minus-sign');
               $(this).addClass('glyphicon-plus-sign');
           }else{
               //如果展开了就添加-
               $(this).removeClass('glyphicon-plus-sign');
               $(this).addClass('glyphicon-minus-sign');
           }

           //遍历后代分类
           $(_this).nextAll().each(function () {
               var _level = $(this).attr('level')*1;//层级深度数
               //子分类是否展开或收缩
               if(level<_level){
                   $(this).toggleClass('off');//标记是否展开或收缩
                   //被点击的分类展开与收缩的状态
                   if($(_this).hasClass('off-flog')){
                       //收缩
                       $(this).addClass('off');//所有子元素关闭
                   }else{
                       //展开
                       //当前点击子元素开启不要关闭
                       if(_level == (level+1)){
                           $(this).addClass('off-flog');
                           $(this).find('.glyphicon').removeClass('glyphicon-minus-sign');
                           $(this).find('.glyphicon').addClass('glyphicon-plus-sign');
                       }else{
                           $(this).addClass('off');
                       }
                   }
               }else{
                   return false;
               }
           });

       });
   })
