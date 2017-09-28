<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>HTML 常用标签演示 - 前端开发仓库</title>
<meta name="keywords" content="前端开发,Web标准">
<meta name="description" content="编写HTML时常用到的标签在浏览器下的默认效果。">
</head>
<body>
<h1>HTML 常用标签演示</h1>
<p>本页演示的所有标签均为浏览器默认效果。</p>



<h2>【基础】</h2>

<p><strong>&lt;div&gt;</strong> 定义文档中的节。<small>（无任何属性）</small></p>
<p><strong>&lt;span&gt;</strong> <span>定义文档中的节。</span><small>（内联元素，无任何属性）</small></p>

<hr>

<p><strong>&lt;h1&gt;</strong> to <strong>&lt;h6&gt;</strong> 定义标题。<small>（通常使用粗体显示。注意：单个页面内最好只使用1个H1标签）</small></p>
<h1>H1 标题</h1>
<h2>H2 标题</h2>
<h3>H3 标题</h3>
<h4>H4 标题</h4>
<h5>H5 标题</h5>
<h6>H6 标题</h6>

<hr>

<p><strong>&lt;p&gt;</strong> 定义段落。</p>

<hr>

<p><strong>&lt;hr&gt;</strong> 定义水平线。<small>（本页中的分割线均为 &lt;hr&gt; 标签）</small></p>

<hr>

<p><strong>&lt;header&gt;</strong> 定义 section 或页面的头部。</p>
<p><strong>&lt;footer&gt;</strong> 定义 section 或页面的尾部。</p>
<p><strong>&lt;article&gt;</strong> 定义文章。</p>
<p><strong>&lt;section&gt;</strong> 定义文档中的节。</p>
<p><strong>&lt;aside&gt;</strong> 定义文档内容相关的内容。</p>
<p><strong>&lt;nav&gt;</strong> 定义导航。</p>

<header>header 头部</header>
<footer>footer 尾部</footer>
<article>article 内容</article>
<section>section 内容</section>
<aside>aside 内容</aside>
<nav>nav 内容</nav>

<hr>

<p><strong>&lt;details&gt;</strong> 定义细节内容。</p>
<p><strong>&lt;summary&gt;</strong> 定义 details 的标题。</p>
<details>
<p>All pages and graphics on this web site are the property of W3School.</p>
</details>

<details>
<summary>HTML 5</summary>
This document teaches you everything you have to learn about HTML 5.
</details>

<hr>



<h2>【列表】</h2>

<p><strong>&lt;ul&gt;</strong> 定义无序列表。<small>（通常列表前会有项目符号）</small></p>
<ul>
  <li><strong>&lt;li&gt;</strong> 定义列表的项目。</li>
  <li>张三</li>
  <li>李四</li>
</ul>

<hr>

<p><strong>&lt;ol&gt;</strong> 定义有序列表。<small>（通常列表前会有数字符号）</small></p>
<ol>
  <li><strong>&lt;li&gt;</strong> 定义列表的项目。</li>
  <li>张三</li>
  <li>李四</li>
</ol>

<hr>

<p><strong>&lt;dl&gt;</strong> 定义定义列表。</p>
<dl>
  <dt><strong>&lt;dt&gt;</strong> 定义定义列表中的项目。</dt>
  <dd><strong>&lt;dd&gt;</strong> 定义定义列表中项目的描述。 </dd>
  <dt>张三的家谱</dt>
  <dd>张三的家谱于1900年开始统计，进行了..</dd>
</dl>

<hr>



<h2>【表格】</h2>

<p><strong>&lt;table&gt;</strong> 定义表格。</p>
<p><strong>&lt;caption&gt;</strong> 定义表格标题。</p>
<p><strong>&lt;thead&gt;</strong> 定义表格中的表头内容。</p>
<p><strong>&lt;tfoot&gt;</strong> 定义表格中的表注内容（脚注）。</p>
<p><strong>&lt;tbody&gt;</strong> 定义表格中的主体内容。</p>
<p><strong>&lt;tr&gt;</strong> 定义表格中的行。</p>
<p><strong>&lt;th&gt;</strong> 定义表格中的表头单元格。<small>（通常使用粗体显示）</small></p>
<p><strong>&lt;td&gt;</strong> 定义表格中的单元。</p>
<p>table 结构标准顺序如下：</p>
<pre>
&lt;table&gt;
  &lt;caption&gt;&lt;/caption&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tfoot&gt;
    &lt;tr&gt;
      &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tfoot&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
</pre>
<p>※ 虽然 tfoot 放在了 tbody 之前，浏览器依然会将 tfoot 显示在 tbody 之后，而且这样做能让浏览器在获得所有表格内的数据前显示表注。</p>
<table>
  <caption>表格标题</caption>
  <thead>
    <tr>
      <th>表头 ID</th>
      <th>表头 姓名</th>
      <th>表头 日期</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td>表注 这是编号</td>
      <td>表注 这是假名</td>
      <td>表注 这是添加日期</td>
    </tr>
  </tfoot>
  <tbody>
    <tr>
      <td>1</td>
      <td>张三</td>
      <td>2009-09-09</td>
    </tr>
    <tr>
      <td>2</td>
      <td>李四</td>
      <td>2010-10-10</td>
    </tr>
  </tbody>
</table>

<hr>

<table border="1" cellpadding="1" cellspacing="1">
  <caption>自带边框样式</caption>
  <thead>
    <tr>
      <th>表头 ID</th>
      <th>表头 姓名</th>
      <th>表头 日期</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td>表注 这是编号</td>
      <td>表注 这是假名</td>
      <td>表注 这是添加日期</td>
    </tr>
  </tfoot>
  <tbody>
    <tr>
      <td>1</td>
      <td>张三</td>
      <td>2009-09-09</td>
    </tr>
    <tr>
      <td>2</td>
      <td>李四</td>
      <td>2010-10-10</td>
    </tr>
  </tbody>
</table>

<hr>

<h2>【表单】</h2>

<p><strong>&lt;form&gt;</strong> 定义表单。</p>

<hr>

<p><strong>&lt;fieldset&gt;</strong> 定义围绕表单中元素的边框。<small>（通常四周会有缩进，并显示围绕的边框）</small></p>
<p><strong>&lt;legend&gt;</strong> 定义 fieldset 元素的标题。</p>
<fieldset>
  <legend>legend 标题</legend>
  <p>内容</p>
</fieldset>

<hr>

<p><strong>&lt;select&gt;</strong> 定义选择列表（下拉列表）。</p>
<p><strong>&lt;optgroup&gt;</strong> 定义选择列表中相关选项的组合。</p>
<p><strong>&lt;option&gt;</strong> 定义选择列表中的选项。</p>
<select>
  <optgroup label="张氏">
    <option>张三</option>
    <option>张三的儿子</option>
    <option>张三的孙女</option>
  </optgroup>
  <optgroup label="李氏">
    <option>李四</option>
    <option>李四的女儿</option>
    <option>李四的孙子</option>
  </optgroup>
</select>

<hr>

<form id="test_form" action="#test_form">
<p><strong>&lt;input&gt;</strong> 定义输入控件。<small>（如果浏览器不支持 HTML5 新的类型，那么会使用文本域替代）</small></p>
<p>文本域 <code>type="text"</code> <input name="" type="text"></p>
<p>密码域 <code>type="password"</code> <input name="" type="password"></p>
<p>复选框 <code>type="checkbox"</code> <input name="" type="checkbox" value="">A <input name="" type="checkbox" value="">B <input name="" type="checkbox" value="">C</p>
<p>单选按钮 <code>type="radio"</code> 组A:<input name="radio_a" type="radio" value="" checked="checked">① <input name="radio_a" type="radio" value="">②　　组B:<input name="radio_b" type="radio" value="" checked="checked">Ⅰ <input name="radio_b" type="radio" value="">Ⅱ</p>
<p>文件域 <code>type="file"</code> <input name="" type="file"></p>
<p>图像域 <code>type="image"</code> <input name="" type="image" src="http://ciaoca.com/logo/88x31.jpg" alt="图片无法显示"><small>（可用做提交按钮）</small></p>
<p>隐藏域 <code>type="hidden"</code> <input name="" type="hidden" value=""><small>（当然是看不见的了）</small></p>
<p>普通按钮 <code>type="button"</code> <input name="" type="button" value="无任何作用的按钮"></p>
<p>重置按钮 <code>type="reset"</code> <input name="" type="reset" value="重置所有控件"></p>
<p>提交按钮 <code>type="submit"</code> <input name="" type="submit" value="提交表单用的按钮"></p>

<p>email 域 <code>type="email"</code> <input name="" type="email"><small>（若有输入内容，则会验证格式是否符合 email）</small></p>
<p>url 域 <code>type="url"</code> <input name="" type="url"><small>（若有输入内容，则会验证格式是否符合 url）</small></p>
<p>数值域 <code>type="number"</code> <input name="" type="number" min="1" max="10"><small>（若有设置最大值或最小值，则会验证数字是否在最大最小值之内）</small></p>
<p>数值范围域 <code>type="range"</code> <input name="" type="range" min="1" max="10"><small>（通过拖动滑块来选择数值）</small></p>
<p>日期域 <code>type="date"</code> <input name="" type="date"><small>（会调用浏览器自带的日期选择器，可设置的类型：date, month, week, time, datetime, datetime-local）</small></p>
<p>　　　 <code>type="time"</code> <input name="" type="time"></p>
<p>色值域 <code>type="color"</code> <input name="" type="color"><small>（会调用浏览器自带的颜色选择器）</small></p>
<p>搜索域 <code>type="search"</code> <input name="" type="search"><small>（用于搜索，站内搜索或 Google 搜索等，在输入框内容右侧通常会出现清除按钮）</small></p>

<hr>

<p><strong>&lt;datalist&gt;</strong> 定义 input 元素的选项列表</p>
<div>
  <input id="myCar" list="cars">
  <datalist id="cars">
    <option value="BMW">
    <option value="Ford">
    <option value="Volvo">
  </datalist>
</div>

<hr>

<p><strong>&lt;keygen&gt;</strong> 定义生成秘钥。<keygen name=""></p>

<hr>

<p><strong>&lt;output&gt;</strong> 定义多行的文本输入控件。<output name="x" for="a b"></output></p>

<hr>

<p><strong>&lt;label&gt;</strong> 定义 input 元素的标注。<input id="testid_1" name="" type="checkbox" value="1"><label for="testid_1">点击这里也可以选中</label></p>

<hr>

<p><strong>&lt;textarea&gt;</strong> 定义多行的文本输入控件。</p>
<p><textarea></textarea></p>

<hr>

<p><strong>&lt;button&gt;</strong> 定义按钮。<small>（与input不同的是，buttom内部可以放置更多的内容，比如文本或图像）</small></p>
<p>
  <button type="button">普通按钮</button>
  <button type="reset">重置按钮</button>
  <button type="submit">提交按钮</button>
</p>
</form>

<hr>

<h2>【格式】</h2>

<p><strong>&lt;blockquote&gt;</strong> 定义长的引用。<small>（通常四周会有缩进）</small></p>
<blockquote>WEB标准不是某一个标准，而是一系列标准的集合。网页主要由三部分组成：结构（Structure）、表现（Presentation）和行为（Behavior）。对应的标准也分三方面：结构化标准语言主要包括XHTML和XML，表现标准语言主要包括CSS，行为标准主要包括对象模型（如W3C DOM）、ECMAScript等。这些标准大部分由W3C起草和发布，也有一些是其他标准组织制订的标准，比如ECMA（European Computer Manufacturers Association）的ECMAScript标准。
</blockquote>

<hr>

<p><strong>&lt;pre&gt;</strong> 定义预格式文本。<small>（通常会<strong>保留空格及换行符</strong>，并使用等宽字体显示，很适合用来表示计算机代码）</small></p>
<pre>
for(var i=0; i<9; i++){
    i++;
};
</pre>

<hr>

<p><strong>&lt;address&gt;</strong>定义文档作者或拥有者的联系信息。<small>（通常使用斜体显示）</small></p>
<address>
  <a href="mailto:ciaoca@gmail.com">联系小叉</a><br>
  前端开发工程师
</address>

<hr>

<p><strong>&lt;a&gt;</strong> <a href="http://ciaoca.com/">定义链接、锚点。</a></p>
<p><strong>&lt;em&gt;</strong> <em>定义强调文本。</em><small>（通常使用斜体显示）</small></p>
<p><strong>&lt;strong&gt;</strong> <strong>定义更为强调的文本。</strong><small>（通常使用粗体显示）</small></p>
<p><strong>&lt;mark&gt;</strong> 定义带有<mark>标记</mark>的文本。<small>（通常会高亮显示）</small></p>
<p><strong>&lt;time&gt;</strong> 定义<time datetime="2015-03-31">时间</time>。<small>（通常不会有任何视觉效果）</small></p>

<hr>

<p><strong>&lt;del&gt;</strong> <del>定义被删除文本。</del><small>（通常带有删除线）</small></p>
<p><strong>&lt;ins&gt;</strong> <ins>定义新插入文本。</ins><small>（通常带有下划线）</small></p>
<p>2015年1月1日是<del>星期五</del><ins>星期四</ins></p>

<hr>

<p><strong>&lt;i&gt;</strong> <i>定义斜体文本。</i></p>
<p><strong>&lt;b&gt;</strong> <b>定义粗体文本。</b></p>
<p><strong>&lt;big&gt;</strong> 定义<big>大号文本</big>。<small>（通常使用比正文更大的字号显示）</small></p>
<p><strong>&lt;small&gt;</strong> 定义<small>小号文本</small>。<small>（通常使用比正文更小的字号显示）</small></p>
<p><strong>&lt;sup&gt;</strong> 定义上标文本。X<sup>2</sup></p>
<p><strong>&lt;sub&gt;</strong> 定义下标文本。H<sub>2</sub>O</p>

<hr>

<p><strong>&lt;code&gt;</strong> <code>定义计算机代码文本。This HTML Code.</code><small>（通常使用等宽字体显示，但<strong>不会保留空格及换行符</strong>，需要保留空格及换行符，请使用&lt;pre&gt;）</small><a href="http://www.w3school.com.cn/tags/tag_code.asp">详细描述</a></p>
<p><strong>&lt;cite&gt;</strong> <cite>定义引用。可使用该标签对参考文献的引用进行定义，比如书籍或杂志的标题。</cite><small>（通常使用斜体显示）</small><a href="http://www.w3school.com.cn/tags/tag_cite.asp">详细描述</a></p>
<p><strong>&lt;q&gt;</strong> <q>定义短的引用。</q><small>（通常会在两边加双引号）</small></p>

<hr>

<p><strong>&lt;bdo&gt;</strong> 定义文本的方向。</p>
<p>后面的文字会从右到左来显示：<bdo dir="rtl">你已经具备了倒读的能力</bdo></p>

<hr>

<p><strong>&lt;abbr&gt;</strong> 定义缩写。</p>
<p>微软推出的浏览器是 <abbr title="Internet Explorer">IE</abbr> 浏览器。（鼠标移到“IE”上看效果）</p>

<hr>
<p><strong>&lt;progress&gt;</strong> 定义进度条。<progress value="22" max="100"></progress> </p>
<p><strong>&lt;meter&gt;</strong> 定义度计量。<meter value="3" min="0" max="10">十分之三</meter> <meter value="0.6">60%</meter></p>



 

<hr>

<h2>【图像】</h2>

<p><strong>&lt;img&gt;</strong> 定义图像。</p>
<p><strong>&lt;map&gt;</strong> 定义可点击区域。</p>
<p><strong>&lt;area&gt;</strong> 定义可点击区域的内部区域。</p>
<p><img src="http://ciaoca.com/logo/88x31.jpg" usemap="#ciaocamap"></p>
<!--
圆形
shape="circle" coords="x,y,r"
x,y 为坐标（0,0是左上角），r 为圆的半径

多边形
shape="polygon"，coords="x1,y1,x2,y2,x3,y3,..."
多边形会自动封闭，不需要在结尾重复第一个坐标来关闭

矩形
shape="rectangle"，coords="x1,y1,x2,y2"
-->
<map name="ciaocamap" id="ciaocamap">
  <area shape="circle" coords="15,15,15" href ="http://ciaoca.com" alt="Blog">
  <area shape="rectangle" coords="40,0,80,30" href ="http://code.ciaoca.com" alt="F2E">
</map>

<hr>

<p><strong>&lt;figure&gt;</strong> 定义文档中的媒体内容（图片、图表、照片、代码等）。</p>
<p><strong>&lt;figcaption&gt;</strong> 定义 figure 元素的标题。</p>

<figure>
  <figcaption>小叉试验场</figcaption>
  <img src="http://ciaoca.com/logo/88x31.jpg">
</figure>

<hr>

<p><strong>&lt;canvas&gt;</strong> 定义画布。<small>（此处不做演示）</small></p>

<hr>

<h2>【音频/视频】</h2>

<p><strong>&lt;audio&gt;</strong> 定义声音。</p>
<p><strong>&lt;source&gt;</strong> 定义媒体源。</p>
<audio controls="controls">
您的浏览器不支持 audio 标签。
</audio>

<hr>

<p><strong>&lt;audio&gt;</strong> 定义视频。</p>
<p><strong>&lt;video&gt;</strong> 定义字幕。</p>
<video controls="controls">
您的浏览器不支持 video 标签。
</video>

<hr>


<h2>【其他】</h2>

<p><strong>&lt;noscript&gt;</strong> 定义针对不支持客户端脚本的用户的替代内容。</p>
<script type="text/javascript"> 
document.write("<p>当前您的浏览器支持JavaScript脚本。</p>")
</script>
<noscript>若您看到这行字，说明您的浏览器不支持JavaScript脚本。</noscript>

<hr>

<p><strong>&lt;noframes&gt;</strong> 定义针对不支持框架的用户的替代内容。</p>
<noframes>若您看到这行字，说明您的浏览器不支持运行框架。</noframes>

<hr>

<p><strong>&lt;ruby&gt;</strong> 定义 ruby 注释。</p>
<p><strong>&lt;rt&gt;</strong> 定义 ruby 注释的解释。</p>
<p><strong>&lt;rp&gt;</strong> 定义若浏览器不支持 ruby 元素显示的内容。</p>
<ruby>
漢 <rt><rp>(</rp>ㄏㄢˋ<rp>)</rp></rt>
</ruby>

<div style="display:none;"><script src="http://s25.cnzz.com/stat.php?id=5076009&web_id=5076009" language="JavaScript"></script></div>
</body>
</html>
