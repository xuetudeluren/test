#id ：通过id属性值获取元素
Element ：通过元素名获取元素
selector1,selector2 ：获取列表中指定的所有元素
.class ：获取使用class样式的所有元素
ancetor descendant	：匹配祖先元素下的后代元素
parent > child	：匹配父元素下的子元素
prev + next		：匹配上一个元素的后面的元素，必须是挨着的
prev~siblings	：匹配前一个元素的所有平辈元素，在prev元素后面才能匹配


:first ：匹配第一个元素
:last ：匹配最后一个元素
:even ：匹配索引为偶数的元素
:odd  ：匹配索引为奇数的元素
:eq(index) ：匹配索引为指定值的元素
:gt(index) ：匹配索引大于指定值的元素
:lt(index) ：匹配索引小于指定值的元素
:not(selector) ：匹配除了指定选择器之外的所有元素    这里必须是选择器


:nth-child(index/even/odd) ：匹配指定索引的元素 从1算起 
:first-child ：匹配第一个子元素
:last-child ：匹配最后一个子元素
:only-child ：如果子元素是父元素的唯一子元素，则匹配


:input 	：匹配所有表单元素
$(“:input”) ：匹配所有表单元素		select、textarea
$(‘input’) ：匹配input标签
:text 		：文本框
:password	：密码框
:radio		：单选按钮
:checkbox	：复选框
:submit	：提交按钮
:reset		：重置按钮
:image	：图像按钮
:button	：按钮
:file		：文件框
:hidden	：隐藏域


jQuery[0]
或
jQuery.get(0)

$(dom)


attr(name) ：获取指定属性的值
attr(key,value) ：设置指定属性的值
attr(properties) ：一次设置多个属性的值，要求参数必须是json对象
attr(key,fn) ：通过一个函数的返回值设置指定属性的值
removeAttr(name) ：删除指定的属性

addClass(class)	：添加样式
removeClass(class)	：移除样式
toggleClass(class)	：切换样式，如果有，就删除，如果没有，则添加
hasClass(class)		：判断是否使用了某个样式  返回true：有  false：无



innerHTML
html()
html(val)

innerText
text()
text(val)

value
val()
val(val)


事件

blur(fn)		：失去焦点
change(fn)		：内容改变
click(fn)		：点击
dblclick(fn)	：双击
focus(fn)		：获得焦点
keydown(fn)	    ：键盘按下
keyup(fn)		：键盘抬起
keypress(fn)	：键盘点击
load(fn)		：页面载入
unload(fn)		：页面关闭
mousedown(fn)	：鼠标按下
mouseup(fn)	    ：鼠标抬起
mousemove(fn)	：鼠标移动
mouseover(fn)	：鼠标经过
mouseout(fn)	：鼠标离开
resize(fn)		：改变尺寸
scroll(fn)		：滚动条滚动
select(fn)		：选择内容
submit(fn)		：提交按钮


append(content) ：在元素内部的最后插入数据
appendTo(content) 	：将匹配到的元素插入到指定内容的后面
prepend(content) ：在元素内部的前面插入数据
prependTo(content) ：将匹配到的元素插入到指定内容的前面

$.ajax   	get 
$.get		get
$.getJSON	get