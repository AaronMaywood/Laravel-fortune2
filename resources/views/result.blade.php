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

  <div id="wrapper">
    <section class="bg-wh kekka">

      <h1 class="txt-bk_rd">結果</h1>
      <h2>誕生数{{ $birthNumber }} {{ $fortune->name }}</h2>
      <img src="images/0{{ $birthNumber }}.jpg" alt="">
      @php
        $keys = array_keys($fortune->fortune);
      @endphp
      @foreach ($keys as $key)
          <h3>{{ $key }}</h3>
          @php
            $ks = array_keys($fortune->fortune[$key]);
          @endphp
          @foreach($ks as $k)
            @if (gettype($k) == 'string') {{-- integer は除外する --}}
              <h4>{{ $k }}</h4>
            @endif
            <p>{!! nl2br($fortune->fortune[$key][$k]) !!}</p>
          @endforeach
      @endforeach
      <a href="index.html" class="btn-uranau">もう一度占う</a>
    </section>

    <!--ソーシャルボタン-->
    <div id="snsbtnArea" class="clearfix">
      <div id="snsbtnArea-in">

        <!-- LINE// -->
        <div class="line-it-button" data-lang="ja" data-type="share-a" data-env="REAL"
          data-url="https://nenga.adjust.ne.jp/result_2025_01.html" data-color="default" data-size="small" data-count="true"
          data-ver="3" style="display: none;"></div>
        <script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async"
          defer="defer"></script>
        <!-- //LINE -->

        <div class="fb-share-button" data-href="https://nenga.adjust.ne.jp/result_2025_01.html" data-layout="button" data-size="small" height="20px"><a
      target="_blank"
      href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnenga.adjust.ne.jp%2Findex_2025.html&amp;src=sdkpreparse"
      class="fb-xfbml-parse-ignore">シェアする</a></div>

        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
        <script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + '://platform.twitter.com/widgets.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'twitter-wjs');</script>

        <div class="g-plusone" data-size="medium"></div>
        <script type="text/javascript">
          window.___gcfg = { lang: 'ja' };

          (function () {
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
        <li><a href="https://ad-job.com/" target="_blank"><img src="images/bnr_jobschool.png" alt="ADjust Job School"></a></li>
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
</html>