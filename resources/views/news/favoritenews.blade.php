@extends('layouts.app2')

@section('content')
<header>
	
		
		<div class="container">
			
			
		<a class="logo" href="../..index.html"><img src="../../images/logo-black.png" alt="Logo"></a>
			
			
			<ul class="main-menu" id="main-menu">
				<li>{!! link_to_route('keyword.index', 'キーワード設定', [], []) !!}</li>　
				<li>{!! link_to_route('keywordsnews.index', 'ニュース【キーワード制限】', [], []) !!}</li>
				<li>{!! link_to_route('allnews.index', 'ニュース【新着】', [], []) !!}</li>
				<li>{!! link_to_route('favoritenews.index', 'ニュース【お気に入り】', [], []) !!}</li>
				<li>{!! link_to_route('logout.get', 'ログアウト', [], []) !!}</li>
			
			</ul>
			<div class="clearfix"></div>
		</div><!-- container -->
	</header>
            
<h4 class="p-title mt-30"><b>Exciting news</b></h4>
@if (count($articles) > 0)
	<div class="row">
           @foreach ($articles as $article)
				
					
						<div class="col-sm-6">
							<img src="{{$article->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $article->url }} target="_blank"><b>{{$article->title}}<br/>{{$article->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$article->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button')</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						
						
					
				 @endforeach	
		　</div><!-- row -->
		 @endif			
@endsection