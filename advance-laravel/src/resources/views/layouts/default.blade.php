<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yield('title')</title>
</head>

<style>
    /* 表全体のデザインの指定 */
    body {
        /* 文字の大きさを16pxに指定 */
        font-size: 16px;
        /* 外側に5pxの余白を指定 */
        margin: 5px;
    }
    /* h1のデザインの指定 */
    h1 {
        /* 文字の大きさを60pxに指定 */
        font-size: 60px;
        /* 色をwhiteに指定 */
        color: white;
        /* 文字につける影を指定(横1px,ぼかし5px,色#289ADC) */
        text-shadow: 1px 0 5px #289ADC;
        /* 文字間の間隔を-4pxに指定 */
        letter-spacing: -4px;
        /* 外側の左に10pxの余白を指定 */
        margin-left: 10px;
    }
    /* contentクラスのデザインを指定 */
    .content {
        /* 外側に10pxの余白を指定 */
        margin: 10px;
    }
</style>

<body>
    <!--h1に@yield('title')を設定して別のファイルで管理する-->
    <h1>@yield('title')</h1>
    <!--クラス名をcontentに指定-->
    <div class="content">
    <!--.contentに@yield('content')を設定して別のファイルで管理する-->
        @yield('content')
    </div>
</body>

</html>