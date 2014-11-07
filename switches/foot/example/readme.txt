<h1>Bootstrap 3 Lightbox switch guide</h1>

A lightbox gallery plugin for Bootstrap 3 based on the modal plugin
A lightbox module for Bootstrap that supports images, YouTube videos, and galleries - built around Bootstrap's Modal plugin.

<h3>의존성</h3>
아래 플러그인이 있어야 함 (기본패키지에 내장 됨)
<code>/plugins/lightbox</code>


<h3>적용예시 참고</h3>
<ul>
<li><a href="http://ashleydw.github.io/lightbox" target="_blank">http://ashleydw.github.io/lightbox</a></li><li><a href="https://github.com/ashleydw/lightbox" target="_blank">https://github.com/ashleydw/lightbox</a></li>
</ul>

<p>사이트별로 자신에게 맞는 라이브 박스를 적용할 수 있음 </p>

1. 이미지​ 
<code>&lt;a href="00.jpg" data-toggle="lightbox" data-title="​사진타이틀​" data-footer="​사진캡션​"&gt;</code>
<code>&lt;img src="​00.jpg"&gt;</code>
<code>&lt;/a&gt;</code>

​2. 동영상
<code>&lt;a href="http://www.youtube.com/watch?v=k6mFF3VmVAs" data-toggle="lightbox" data-width="동영상크기"&gt;링크&lt;/a&gt;​ </code>


​[테마적용]
bootstrap modal의 css를 변경하여 얼마든지 여러가지 형태로 modal의 형태 변경가능

<strong>dark 테마</strong>
<code>&lt;?php getImport('lightbox','themes/dark',false,'css') ?&gt;</code>

<strong>nyanx테마</strong>
<code>&lt;?php getImport('lightbox','themes/dark',false,'css') ?&gt;​</code>
