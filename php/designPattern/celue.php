<?php


// error_reporting(E_ALL);
//抽象策略接口
abstract class Strategy{
    abstract function wayToSchool();
}
//具体策略角色
class BikeStrategy extends Strategy{
    function wayToSchool(){
         echo "骑自行车去上学";
    }
}
class BusStrategy extends Strategy{
    function wayToSchool(){
         echo "乘公共汽车去上学";
    }
}
class TaxiStrategy extends Strategy{
    function wayToSchool(){
         echo "骑出租车去上学";
    }
}

//环境角色
class Context{
    private $strategy;
    //获取具体策略
    function getStrategy($strategyName){
        try{
            $strategyReflection = new ReflectionClass($strategyName);
           
            $this->strategy = $strategyReflection->newInstance();

        }catch(ReflectionException $e){
             $this->strategy = ""; 
             echo $e->getMessage();
             exit;
        }       
    }

    function goToSchool(){
        $this->strategy->wayToSchool();
        // var_dump($this->strategy);
    }
}

//测试
$context = new Context();
$context->getStrategy("TaxiStrateg");
$context->goToSchool();

