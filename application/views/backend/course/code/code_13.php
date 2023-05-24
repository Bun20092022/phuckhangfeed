<h2>Hướng dẫn sử dụng</h2>
<p>Có 2 cách viết một nội dung jQuery:</p>
<ul>
	<li>Viết nội dung jQuery bên trong một <code>$(document).ready()</code>, điều này sẽ giúp cho đoạn script chạy sau khi các đoạn code trong file html đã được load xong, không bao gồm việc load các liên kết ngoài như image, iframe, file css, file script,...</li>
</ul>

<pre class="brush: xml; title: ; notranslate" title="">
<!-- Chú ý chuyển mã code HTML về kí tự đặc biệt -->
$(document).ready(function(){&#10;  //N&#7897;i dung jQuery vi&#7871;t &#7903; &#273;&acirc;y...&#10;});
</pre>
<p>Chúng ta có thể viết gọn lại như sau:</p>
<pre class="brush: xml; title: ; notranslate" title="">
<!-- Chú ý chuyển mã code HTML về kí tự đặc biệt -->
$(function(){&#10;  //N&#7897;i dung jQuery vi&#7871;t &#7903; &#273;&acirc;y...&#10;});
</pre>
<ul>
	<li>Viết nội dung jQuery bên trong <code>$(window).load()</code>, điều này sẽ giúp cho đoạn script chạy khi toàn bộ trang web đã được load xong, bao gồm tất cả image, iframe, và cả các liên kết ngoài.</li>
</ul>
<pre class="brush: xml; title: ; notranslate" title="">
<!-- Chú ý chuyển mã code HTML về kí tự đặc biệt -->
$(window).load(function(){&#10;  //N&#7897;i dung jQuery vi&#7871;t &#7903; &#273;&acirc;y...&#10;});
</pre>
<h2>Ví dụ đơn giản sử dụng jQuery</h2>
<h4><strong>Html viết:</strong></h4>
<pre class="brush: xml; title: ; notranslate" title="">
<!-- Chú ý chuyển mã code HTML về kí tự đặc biệt -->
&lt;!DOCTYPE HTML&gt;&#10;&lt;html&gt;&#10;&lt;head&gt;&#10;&lt;meta charset=&quot;utf-8&quot;&gt;&#10;&lt;title&gt;Ti&ecirc;u &#273;&#7873;&lt;/title&gt;&#10;&lt;script src=&quot;https://code.jquery.com/jquery-latest.js&quot;&gt;&lt;/script&gt;&#10;&lt;script&gt;&#10;$(document).ready(function(){&#10;  $(&#39;p&#39;).css(&#39;color&#39;,&#39;#ff0000&#39;);&#10;});&#10;&lt;/script&gt;&#10;&lt;/head&gt;&#10;&#10;&lt;body&gt;&#10;  &lt;p&gt;hocwebchuan&lt;/p&gt;&#10;&lt;/body&gt;&#10;&lt;/html&gt;
</pre>
<p>Hiển thị trình duyệt:</p>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
$(document).ready(function(){
  $('#timdiachi').css('color','#ff0000');
});
</script>
<p id="timdiachi">hocwebchuan</p>