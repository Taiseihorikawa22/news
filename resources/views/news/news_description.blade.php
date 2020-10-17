@extends('layouts.app2')

@section('content')
<header>
	
		
		<div class="container">
			
			
			<h2>MAGAZINE</h2>
			<nav class="navbar navbar-expand-md navbar-light bg-light">
            
				<!-- 横幅が狭いときに出るハンバーガーボタン -->
		        <button type="button" class="navbar-toggler d-md-none" data-toggle="collapse" data-target="#nav-bar">
		            <span class="navbar-toggler-icon d-md-none"></span>
		        </button>
		     
		
		        <!-- メニュー項目 -->
		        <div class="collapse navbar-collapse" id="nav-bar">
		            <ul class="navbar-nav menu-catalog d-md-none">
		            	@include('auth.login_register')
		            	@if(Auth::check())
		                <li class="nav-item manu-one menu-keyword d-md-none">{!! link_to_route('keyword.index', 'キーワード設定', [], []) !!}</li>
		                <li class="nav-item menu-one d-md-none">{!! link_to_route('keywordsnews.index', 'ニュース【キーワード制限】', [], []) !!}</li>
		                <li class="nav-item menu-one d-md-none">{!! link_to_route('allnews.index', 'ニュース【新着】', [], []) !!}</li>
		                <li class="nav-item menu-one d-md-none">{!! link_to_route('favoritenews.index', 'ニュース【お気に入り】', [], []) !!}</li>
		                <li class="nav-item menu-one d-md-none">{!! link_to_route('logout.get', 'ログアウト', [], []) !!}</li>
		               @endif
		            </ul>
		        </div>
            
        	</nav>
        
        
        	<ul class="main-menu" id="main-menu">
        	    <li>@include('auth.login_register')</li>
        	    <li>{!! link_to_route('news.description', 'サービスの使い方', [], []) !!}</li>
				<li>{!! link_to_route('keyword.index', 'キーワード設定', [], []) !!}</li>　
				<li>{!! link_to_route('keywordsnews.index', 'ニュース【キーワード制限】', [], []) !!}</li>
				<li>{!! link_to_route('allnews.index', 'ニュース【新着】', [], []) !!}</li>
				<li>{!! link_to_route('favoritenews.index', 'ニュース【お気に入り】', [], []) !!}</li>
				<li>{!! link_to_route('logout.get', 'ログアウト', [], []) !!}</li>
			
			</ul>
			<div class="clearfix"></div>
		
			
			<div class="clearfix"></div>
		</div><!-- container -->
</header>
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
