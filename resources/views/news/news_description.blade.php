@extends('layouts.app2')

@section('content')

<div class="wrapper">
    <h1>このサービスの説明</h1>
    <p class="first-message">このサービスはたくさんのニュース記事の中から、自分の知りたい情報に絞ってニュースを見るために作成しました!</p>
    
    
    <p class="second-message">キーワード設定：：自分が設定したキーワードを設定してニュース記事の見出しやコンテンツの中にあるやつだけに絞ります</p>
    
    <p class="third-message">ニュース【キーワード制限】：：キーワード設定ページで設定したキーワードをもとにニュース記事を制限して見ることができます！</p>
    
    <p class="fouth-message">ニュース【新着】：：全部のニュースを見ることができるページです</p>
    
    <p class="fifth-message">ニュース【お気に入り】：：自分が保存しておきたいニュース記事を、保存しておくことができます。ニュース記事に★マークがあると思うのでそこをクリックしていただけると、お気に入りに追加することができます！</p>
    </div>
@endsection


@section('head4')
    <link href="/common/newsdescription_page.css" rel="stylesheet">
@endsection
