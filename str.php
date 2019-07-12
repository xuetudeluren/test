<?php 

// $str = <<<'EOT'   
// ni hao "nish" is shui
// ni jiao shuo jiao de
// EOT; // Nowdoc  Heredoc  大段文本


//echo $str;


//strlen('afadefd');

//sprintf('');  // 格式化打印字符串

// echo  strpos('afdaeae', 'a') ;           // 字符串出现的位置  第一次出现的位置

//serialize()   unserialize()   // 序列化  反序列化

//__call  __callStatic   // 调取不存在的方法触发


$x='old';
$a=['a'=>&$x,'b'=>&$x];
$a=unserialize(serialize($a));
$a['b']='new';
var_dump($a);  // 序列化