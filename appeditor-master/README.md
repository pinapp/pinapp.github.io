## AppEditor(内测版) 项目已有内测案例
~~~
首创移动端模块编辑器，数据采用多维数组。
非富文本格式，敏捷传输与API接口。
是微信小程序与app不错的选择。
~~~

用户界面：
	![](https://git.kancloud.cn/repos/tpcms/xcx2/raw/22b1e009bfb57c4f64cfe168240d53ed87f2b0ff/images/2017-10-06_111737.png?access-token=aba4c89da131d2e1410cdc95497b336d)

体验地址：
~~~
http://pintuan-xcx.cn/AppEditor/
~~~

使用方法：
~~~
1.页面引用 CSS 与 JS
	<script src="jquery.min.js"></script>
	<script charset="utf-8" src="appeditor.min.js"></script>
	<link  rel="stylesheet" href="appeditor.css">
2.页面容器
	<div id="editor_id"></div>
3.初始化
	var AppEdit = new AppEdit({
		"el" : '#editor_id',
		"name" :  'goods_detail',
		'data' : "[{'text' : 12318498},{'image' : 'https://ss0.baidu.com/6ONWsjip0QIZ8tyhnq/it/u=643873983,4278247275&fm=58'},{'text' : 12318498}]"
	});
~~~

4.方法说明

|  方法名称  | 方法注解   |
| --- | --- |
| AppEdit({"el": '元素选择器' ,'name': '表单input隐藏值','data' : 'jsonString'})    |  构造器  |
| AppEdit.uploadbutton()    |  获取图片上传元素  |
| AppEdit.uploadafter(url)    |  图片插件上传成功往编辑器插入内容 url是指 图片地址 |



5.下载链接：
~~~
	https://github.com/chenbei360/appeditor/archive/master.zip
~~~    

温馨提醒：
~~~
	样式可以在外边自定义，不建议修改插件内样式。
~~~

