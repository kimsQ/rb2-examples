<h1>lazy-load-xt 스위치 이용안내</h1>
<h3>[의존성]</h3>
아래 플러그인이 있어야 함 (기본패키지에 내장 됨)
<code>/plugins/lazy-load-xt</code>

<h3>[이미지 삽입예시]</h3>
<code>&lt;img data-src="" class="lazy-hidden"&gt;</code>
<code>data-src</code>를 적용한 것만 lazy-load가 적용됨.
<code>class="lazy-hidden"</code>  로드 되기전 상태 ( 로딩될때 css를 통해 다양한 이펙트를 부여할 수 있음 )
<code>class="lazy-loaded"</code>  로드 완료 상태

  
<h3>[동영상 삽입예시]</h3>
<code>&lt;iframe class="lazy-hidden" data-src=""&gt;&lt;/iframe&gt;</code>
<code>&lt;video class="lazy-hidden" data-src=""&gt;&lt;/video&gt;</code>


<h3>[로딩이미지 이펙트]</h3>
<code>.lazy-hidden {}</code> 를 변경하여 가능
