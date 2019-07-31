<?php



class  Item {

    var $name;
    var $age;

    function __construct($par1,$par2)
    {
        $this->name = $par1;
        $this->age = $par2;
    }


    function __destruct()
    {
        // TODO: Implement __destruct() method.

        echo "<br>".__CLASS__."销毁了";
    }


}


$item = new Item("zhangsan",27);


//echo $item->name."<br>".$item->age;


$item->name = "lisi";

echo $item->name."<br>".$item->age;


//class Site{
//
//    var $url;
//    var $title;
//
//
//    function __construct($par1,$par2){
//        $this->url = $par1;
//        $this->title = $par2;
//    }
//    //析构函数  调用完 就销毁了
//    function __destruct()
//    {
//        echo "<br>".__CLASS__." 销毁了";
//    }
//
//
//    function setUrl($par){
//        $this->url = $par;
//    }
//
//    function  setTitle($par){
//        $this->title = $par;
//    }
//
//    function  getUrl(){
//        return $this->url;
//    }
//
//    function  getTitle(){
//        return $this->title;
//    }
//
//
//}
//
//
//$runoob = new Site('www.runoob.com','菜鸟联盟');
//
//echo $runoob->getUrl();
//echo "<br>";
//echo $runoob->getTitle();
//

?>