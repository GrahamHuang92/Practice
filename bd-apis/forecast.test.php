<!DOCTYPE html>

<html lang="zh-CN">

<head>

<meta charset="utf-8">

<title>fullPage.js — 绑定菜单演示</title>

<link rel="stylesheet" href="./js/vendor/jquery.fullPage.css">

<style>

#menu { margin: 0; padding: 0; position: fixed; left: 10px; top: 10px; list-style-type: none; z-index: 70;}

#menu li { float: left; margin:  0 10px 0 0; font-size: 14px;}

#menu a { float: left; padding: 10px 20px; background-color: #fff; color: #333; text-decoration: none;}

#menu .active a { color: #fff; background-color: #333;}

#slider .section { text-align: center; font: 50px "Microsoft Yahei"; color: #fff;}

</style>

<script src="js/jquery-1.11.1.min.js"></script>

<script src="js/jquery-ui.min.js"></script>

<script src="js/vendor/jquery.fullPage.min.js"></script>

<script>

$(document).ready(function() {

	$('#slider').fullpage({

		sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', '#f90'],

		anchors: ['page1', 'page2', 'page3', 'page4'],

		menu: '#menu',
        
        
	});

});

</script>

</head>



<body>



<ul id="menu">

	<li data-menuanchor="page1" class="active"><a href="#page1">第一屏</a></li>

	<li data-menuanchor="page2"><a href="#page2">第二屏</a></li>

	<li data-menuanchor="page3"><a href="#page3">第三屏</a></li>

	<li data-menuanchor="page4"><a href="#page4">第四屏</a></li>

</ul>


<div id="slider">
<div class="section">

	<h3>第一屏</h3>

	<p>fullPage.js — 绑定菜单演示</p>

</div>

<div class="section">

	<h3>第二屏</h3>

	<p>请查看左上角，点击可以控制</p>

</div>

<div class="section">

	<h3>第三屏</h3>

	<p>绑定的菜单没有默认的样式，你需要自行编写</p>

</div>

<div class="section">

	<h3>第四屏</h3>

	<p>这是最后一屏</p>

</div>


</div>
















</body>

</html>