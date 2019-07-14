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


1.数组的键值操作函数


• array_values();
获取数组中的值
• array_keys();
获取数组中的键
• in_array();
检查一个值是否在数组中
• array_key_exists();
检查一个键是否在数组中
• array_flip();
键和值对调
• array_reverse();
数组中的值反转

2.统计数组的元素和唯一性
• count();
统计数组的个数
• array_count_values();
统计数组中值出现的次数 
• array_unique();
删除数组中重复值

3.使用回调参数处理数组的函数
• array_filter();
数组值过滤
• array_map();
将回调函数作用到给定数组的单元上 

4.数组的排序函数(都会改变原数组)
• sort();
按值把数组值进行排序,升序,不保留key
• rsort();
按值把数组值进行排序,降序,不保留key
• asort();
按值把数组值进行排序,升序,保留key
• arsort();
按值把数组值进行排序,降序,保留key
• ksort();
按键把数组值进行排序,升序,保留key
• krsort();
按键把数组值进行排序,降序,保留key
• natsort();
按自然数排序
• natcasesort();
忽略大小写的自然数排序
• array_multisort();
用一个数组对另外一个数组进行排序

5.拆分、合并、分解与结合函数
• array_slice();
截取一段值
• array_splice();
截取一段值，保留一段值
• array_combine();
合并，一个是key,一个是value
• array_merge();  并集
合并，键值相同，后面覆盖前面
• implode();
把数组连接成字符串       
• explode();
把字符串分解成数组 

6.数组与数据结构
• array_pop();
从最后弹出一个值,返回弹出值
• array_push();
从最后压入一个值,返回数组个数
• array_shift();
从前面弹出一个值,返回移出值,原数组下标重排
• array_unshift();
从前面插入一个值,返回数组个数

7.其他有用的数组处理函数
• array_rand();
随机取一个key
• shuffle();
打乱数组
• array_sum();
数组所有值的和
• array_product();
数组所有值的乘积
• range();
获取一个范围内数组

删除变量或数组中某个元素:
unset($str);
unset($arr[2]);

字符串常用函数:
1.去除空格和字符串填补函数
ltrim()
rtrim()
trim()
str_pad()
str_repeat()

2.字符串大小写转换函数
strtolower()
strtoupper()
ucfirst()
ucwords()

3.与html标签相关联的字符串函数
nl2br()
strip_tags()
htmlspecialchars()
htmlspecialchars_decode()
addslashes()
stripslashes()

4.其他字符串格式化函数
strrev()
strlen()
number_format()
md5() 
str_shuffle()

5.字符串的分割与拼接
explode()
implode()
join()
str_split();

6.字符串的截取
substr()

7.字符串的查找
strpos()
strrpos($str,'w')

8.字符串的替换
str_replace()

9.多字节处理函数
mb_substr($str,0,7,"utf-8");

10.路径处理函数
dirname();
basename();
pathinfo();
parse_url();
parse_str();

正则的使用场景:
1.检查手机格式
/^\d{11}$/

2.检查邮箱格式
/^\w+@\w+\.\w+$/

3.检查手机是否是以139开头
/^139\d{8}$/

4.复杂的字符串替换环境
/(\d+)\-(\d+)\+(\d+)/


正则表达式:
1.原子
2.元子符
3.模式修正符

原子:
.
a-z
A-Z
0-9
[0-9]
[^0-9]
\d
\D
\w
\W
\s
\S

元字符:
*   #0个、1个或多个
+   #1个或多个
?   #0个或1个
|   #或
\b  #词边界
\B  #非词边界
{3}  #3个
{3,7} #3个到7个
{3,}  #3个以上
^   #以什么开始
$   #以什么结尾

向后引用:
(abc)
$1
\\1

模式修正符:
i #忽略大小写
U #贪婪模式(最小化匹配)
m #把\n视为多行

能够使用正则的函数:
preg_match();
preg_match_all();
preg_replace();
preg_grep();
preg_split();

正则使用场景:
1.手机格式
/^\d{11}$/

2.邮箱格式
/^\w+@\w+\.\w$/

3.139开头的手机格式
/^139\d{8}$/

4.QQ号格式
/^\d{6,11}$/

数学函数:
max();
min();
round();
ceil();
floor();
mt_rand();

日期函数:
time();
strtotime();
date();
microtime();

中华人民共和国时区:(东八区)
date.timezone = PRC

date格式化参数:
Y:2013年
m:01-12月
n:1-12月
d:01-31天
j:1-31天
H:24时
h:12时
i:00-59分
s:00-59秒
w:0-6周
A:AM或PM
a:am或pm
L:是否闰年
t:某月天数

闰年定义:
1.能被4整除，但不能被100整除
2.能被4和100整除，并且同时要被400整除

PHP的错误处理:
1.错误报告级别
2.调整错误报告级别

设置是否报错:
display_errors = On

报错级别:
E_ALL    #所有报错
E_NOTICE      #提示报错
E_DEPRECATED  #未来弃用报错
E_WARNING     #警告报错
E_ERROR       #致命报错
E_PARSE       #语法报错

控制报错级别:
E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED

不同级别报错的危害:
E_NOTICE      #不阻断
E_WARNING     #不阻断
E_ERROR       #阻断
E_PARSE       #不执行




