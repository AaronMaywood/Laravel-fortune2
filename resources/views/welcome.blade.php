<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
  <link rel="stylesheet" media="all" type="text/css" href="css/style.css" />
    <title>キャリアアップ占い｜ADjust Job School</title>
  <link rel="icon" href="images/favicon.ico">
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-WS4ZXCCS');</script>
  <!-- End Google Tag Manager -->
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WS4ZXCCS"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  @if ($errors->get('year') || $errors->get('month') || $errors->get('day') )
    <p class="bg-rd">入力エラーがあります。エラーメッセージに従って入力値を見直してください。</p>
  @endif
  <div id="wrapper">

    <section class="bg-wh">
      <p class="txt-bk_rd">ADjust Job Schoolが<br class="sp-only">Webクリエイターを目指すあなたを応援します！</p>
      <h1 class="ttl-lg">キャリアアップ占い</h1>
      <p class="txt-mark">転職やキャリアアップに迷いはつきものだから<br class="pc-only">もっと生き生き、ながーく活躍するために<br class="pc-only">ご自身の長所や特性を知ることから始めてみませんか？</p> 

      <ul class="list-img">
        <li><img src="images/01.jpg" alt=""></li>
        <li><img src="images/02.jpg" alt=""></li>
        <li><img src="images/03.jpg" alt=""></li>
        <li><img src="images/04.jpg" alt=""></li>
        <li><img src="images/05.jpg" alt=""></li>
        <li><img src="images/06.jpg" alt=""></li>
        <li><img src="images/07.jpg" alt=""></li>
        <li><img src="images/08.jpg" alt=""></li>
        <li><img src="images/09.jpg" alt=""></li>
      </ul>
      <p class="party_info">カバラ数秘術：ChatGPT　イラスト：いらすとやさん　<br class="sp-only">企画運営：株式会社アジャスト</p>
    </section>

    <!--占いフォーム部分-->
    <section class="uranai-form mb15">
      <h2>生年月日を入力してください</h2>
      <form method="GET" action="{{ route('kabbala') }}" class="mb10">
        <p>
          <input type="text" name="year" class="form-flam01" value="{{ old('year') }}"">
        年</p>
        <p>
        <select name="month" class="form-flam02">
          <!-- <option>--</option> -->
          <option value="1" @if(1 === (int)old('month')) selected @endif>1</option>
          <option value="2" @if(2 === (int)old('month')) selected @endif>2</option>
          <option value="3" @if(3 === (int)old('month')) selected @endif>3</option>
          <option value="4" @if(4 === (int)old('month')) selected @endif>4</option>
          <option value="5" @if(5 === (int)old('month')) selected @endif>5</option>
          <option value="6" @if(6 === (int)old('month')) selected @endif>6</option>
          <option value="7" @if(7 === (int)old('month')) selected @endif>7</option>
          <option value="8" @if(8 === (int)old('month')) selected @endif>8</option>
          <option value="9" @if(9 === (int)old('month')) selected @endif>9</option>
          <option value="10" @if(10 === (int)old('month')) selected @endif>10</option>
          <option value="11" @if(11 === (int)old('month')) selected @endif>11</option>
          <option value="12" @if(12 === (int)old('month')) selected @endif>12</option>
        </select>
        月</p>
        <p>
          <select name="day" class="form-flam02">
            <!-- <option>--</option> -->
            <option value="1" @if(1 == old('day')) selected @endif>1</option>
            <option value="2" @if(2 == old('day')) selected @endif>2</option>
            <option value="3" @if(3 == old('day')) selected @endif>3</option>
            <option value="4" @if(4 == old('day')) selected @endif>4</option>
            <option value="5" @if(5 == old('day')) selected @endif>5</option>
            <option value="6" @if(6 == old('day')) selected @endif>6</option>
            <option value="7" @if(7 == old('day')) selected @endif>7</option>
            <option value="8" @if(8 == old('day')) selected @endif>8</option>
            <option value="9" @if(9 == old('day')) selected @endif>9</option>
            <option value="10" @if(10 === (int)old('day')) selected @endif>10</option>
            <option value="11" @if(11 === (int)old('day')) selected @endif>11</option>
            <option value="12" @if(12 === (int)old('day')) selected @endif>12</option>
            <option value="13" @if(13 === (int)old('day')) selected @endif>13</option>
            <option value="14" @if(14 === (int)old('day')) selected @endif>14</option>
            <option value="15" @if(15 === (int)old('day')) selected @endif>15</option>
            <option value="16" @if(16 === (int)old('day')) selected @endif>16</option>
            <option value="17" @if(17 === (int)old('day')) selected @endif>17</option>
            <option value="18" @if(18 === (int)old('day')) selected @endif>18</option>
            <option value="19" @if(19 === (int)old('day')) selected @endif>19</option>
            <option value="20" @if(20 === (int)old('day')) selected @endif>20</option>
            <option value="21" @if(21 === (int)old('day')) selected @endif>21</option>
            <option value="22" @if(22 === (int)old('day')) selected @endif>22</option>
            <option value="23" @if(23 === (int)old('day')) selected @endif>23</option>
            <option value="24" @if(24 === (int)old('day')) selected @endif>24</option>
            <option value="25" @if(25 === (int)old('day')) selected @endif>25</option>
            <option value="26" @if(26 === (int)old('day')) selected @endif>26</option>
            <option value="27" @if(27 === (int)old('day')) selected @endif>27</option>
            <option value="28" @if(28 === (int)old('day')) selected @endif>28</option>
            <option value="29" @if(29 === (int)old('day')) selected @endif>29</option>
            <option value="30" @if(30 === (int)old('day')) selected @endif>30</option>
            <option value="31" @if(31 === (int)old('day')) selected @endif>31</option>
          </select>
        日</p>
        <ul class="list-error">
          @if ($errors->get('year'))
          	@foreach ((array) $errors->get('year') as $message)
            	<li>{{ $message }}</li>
          	@endforeach
          @endif
          @if ($errors->get('month'))
          	@foreach ((array) $errors->get('month') as $message)
            	<li>{{ $message }}</li>
          	@endforeach
          @endif
          @if ($errors->get('day'))
          	@foreach ((array) $errors->get('day') as $message)
            	<li>{{ $message }}</li>
          	@endforeach
          @endif
        </ul>
        <input type="submit" class="btn-uranau" value="占う">
      </form>
    </section>

    <!--ソーシャルボタン-->
    <div id="snsbtnArea" class="clearfix">
      <div id="snsbtnArea-in">

        <!-- LINE// -->
        <div class="line-it-button" data-lang="ja" data-type="share-a" data-env="REAL"
          data-url="https://nenga.adjust.ne.jp/index_2025.html" data-color="default" data-size="small" data-count="true"
          data-ver="3" style="display: none;"></div>
          <script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async"
        defer="defer"></script>
        <!-- //LINE -->

        <div class="fb-share-button" data-href="https://nenga.adjust.ne.jp/index_2025.html" data-layout="button" data-size="small" height="20px"><a
          target="_blank"
          href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnenga.adjust.ne.jp%2Findex_2025.html&amp;src=sdkpreparse"
          class="fb-xfbml-parse-ignore">シェアする</a></div>

        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

        <div class="g-plusone" data-size="medium"></div>
        <script type="text/javascript">
          window.___gcfg = {lang: 'ja'};

          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/platform.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
      </div>
    </div>
    <!--ソーシャルボタンend-->

    <article class="bnr-ag">
      <p>求められる情報を求める人へ</p>
      <h2>ADjust Group</h2>
      <ul class="bnr-wrap">
        <li class="big"><a href="http://www.adjust.ne.jp/" target="_blank"><img src="images/bnr_adjust.png" alt="ウェブ制作・システム開発 株式会社アジャスト"></a></li>
        <li><a href="http://adjustacademy.com/" target="_blank"><img src="images/bnr_academy.png" alt="ウェブデザイナー・ディレクター養成 アジャストアカデミー"></a></li>
        <li><a href="https://adjustcareer.com/" target="_blank"><img src="images/bnr_career.png" alt="あなたの未来がここにある！アジャストキャリア"></a></li>
        <li><a href="https://anytime.adjust.ne.jp/" target="_blank"><img src="images/bnr_anytime.png" alt="「改正派遣法」対応！関連スキルに特化したeラーニング エニィタイムラーニング"></a></li>
        <li><a href="https://fidfid.shop/" target="_blank"><img src="images/bnr_fid.png" alt="ファストファッション販売サイト ファッションイズダンシング"></a></li>
        <li><a href="https://ad-job.com/" target="_blank"><img src="images/bnr_jobschool.png" alt="Adjust Job School"></a></li>
        <li><a href="https://strander.jp/" target="_blank"><img src="images/bnr_strander.png" alt="人やビジネスを、つなげるような仕事を 株式会社ストランダー"></a></li>
        <li><a href="http://socialcast.jp/" target="_blank"><img src="images/bnr_sc.png" alt="動画配信・販売システム ソーシャルキャスト"></a></li>
        <li><a href="https://owlcast.jp/" target="_blank"><img src="images/bnr_oc.png" alt="オンラインスクール構築システム オウルキャスト"></a></li>
      </ul>
    </article>

  </div>
  <!--end/wrapper-->

  <footer>
    <p>&copy; 2025 ADjust Co.,Ltd. All Right Reserved.</p>
  </footer>

</body>
<!-- InstanceEnd --></html>