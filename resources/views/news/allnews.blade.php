@extends('layouts.app2')

@section('content')


<div class="container">
		
		
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
		
			<h4 class="p-title mt-30"><b>Awesome news</b></h4>
			@if (count($articles) > 0)
　				<div class="row">
           		@foreach ($articles as $article)
          
					 
	            @if($loop->iteration > 50)
	           
	            @break
	            
	            @else
					<div class="col-sm-6">
						<img src="{{$article->urlToImage}}">
						<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $article->url }} target="_blank"><b>{{$article->title}}<br/>{{$article->publishedAt}}</b></a></h4>
						<ul class="list-li-mr-20 pt-10 mb-30">
							<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$article->author}}</b></a></li>
							<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button')</li>
							
						</ul>
					</div><!-- col-sm-6 -->
				
						
				@endif
			
				@endforeach	
				</div><!-- row -->
			@endif		
	
	
	
@endsection