@extends('layouts.app2')

@section('content')


		<div class="container">
		<div class="h-600x h-sm-auto">
			<div class="h-2-3 h-sm-auto oflow-hidden"><header>
	
		
		<div class="container">
			
			
		<h1>知りたい情報だけをすぐそばに</h1>
			
			
			<ul class="main-menu" id="main-menu">
				<li>@include('auth.login_register')</li>
				<li>{!! link_to_route('keyword.index', 'キーワード設定', [], []) !!}</li>　
				<li>{!! link_to_route('keywordsnews.index', 'ニュース【キーワード制限】', [], []) !!}</li>
				<li>{!! link_to_route('allnews.index', 'ニュース【新着】', [], []) !!}</li>
				<li>{!! link_to_route('favoritenews.index', 'ニュース【お気に入り】', [], []) !!}</li>
				<li>{!! link_to_route('logout.get', 'ログアウト', [], []) !!}</li>
			
			</ul>
			<div class="clearfix"></div>
		</div><!-- container -->
	</header>
		
				<div class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href={{ $articles[0]->url }} target="_blank">
					
						<img src="{{ $articles[0]->urlToImage }}" class="img-bg bg-grad-layer-6">
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h3 class="mb-15 mb-sm-5 font-sm-13"><b>{{$articles[0]->title}}</b></h3>
							<ul class="list-li-mr-20">
								<li> <span class="color-primary"><b>{{$articles[0]->auhtor}}</b></span>{{$articles[0]->publishedAt}}</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[0]])</li>
								
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="float-left float-sm-none w-1-3 w-sm-100 h-100 h-sm-600x">
				
					<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" href={{ $articles[1]->url }} target="_blank">
						
							<img src="{{ $articles[1]->urlToImage }}" class="img-bg bg-grad-layer-6">
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b>{{$articles[1]->title}}</b></h4>
								<ul class="list-li-mr-20">
									<li>{{$articles[1]->publishedAt}}</li>
									<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[1]])</li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					
					<div class="pl-5 ptb-5 pl-sm-0 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" href={{ $articles[2]->url }} target="_blank">
						
								<img src="{{ $articles[2]->urlToImage }}" class="img-bg bg-grad-layer-6">
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b>{{$articles[2]->title}}</b></h4>
								<ul class="list-li-mr-20">
									<li>{{$articles[2]->publishedAt}}</li>
									<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[2]])</li>
								
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					
				</div><!-- float-left -->

			</div><!-- h-2-3 -->
			
			<div class="h-1-3 oflow-hidden">
		
				<div class="pr-5 pr-sm-0 pt-5 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href={{ $articles[3]->url }} target="_blank">
					
							<img src="{{ $articles[3]->urlToImage }}" class="img-bg bg-grad-layer-6">
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>{{$articles[3]->title}}</b></h4>
							<ul class="list-li-mr-20">
								<li>{{$articles[3]->publishedAt}}</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[3]])</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="plr-5 plr-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href={{ $articles[4]->url }} target="_blank">
					
							<img src="{{ $articles[4]->urlToImage }}" class="img-bg bg-grad-layer-6">
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>{{$articles[4]->title}}</b></h4>
							<ul class="list-li-mr-20">
								<li>{{$articles[4]->publishedAt}}</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[4]])</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="pl-5 pl-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href={{ $articles[5]->url }} target="_blank">
					
							<img src="{{ $articles[5]->urlToImage }}" class="img-bg bg-grad-layer-6">
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>{{$articles[5]->title}}</b></h4>
							<ul class="list-li-mr-20">
								<li>{{$articles[5]->publishedAt}}</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[5]])</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
			</div><!-- h-2-3 -->
		</div><!-- h-100vh -->
	</div><!-- container -->
	
	
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					<h4 class="p-title"><b>RECENT NEWS</b></h4>
					
					
						<div class="row">
					
						<div class="col-sm-6">
								<img src="{{$articles[6]->urlToImage}}" alt="">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[6]->url }} target="_blank"><b>{{$articles[6]->title}}<br/>{{$articles[6]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[6]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[6]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="{{$articles[7]->urlToImage}}" alt="">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[7]->url }} target="_blank"><b>{{$articles[7]->title}}<br/>{{$articles[7]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[7]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[7]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
					
						
						
					</div><!-- row -->
					
		
				</div><!-- col-sm-6 -->
					</div>
					<h4 class="p-title mt-30"><b>Exciting news</b></h4>
					<div class="row">
					
						<div class="col-sm-6">
							<img src="{{$articles[8]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[8]->url }} target="_blank"><b>{{$articles[8]->title}}<br/>{{$articles[8]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[8]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[8]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="{{$articles[9]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[9]->url }} target="_blank"><b>{{$articles[9]->title}}<br/>{{$articles[9]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[9]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[9]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
					
						<div class="col-sm-6">
							<img src="{{$articles[10]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[10]->url }} target="_blank"><b>{{$articles[10]->title}} <br/>{{$articles[10]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[10]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[10]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="{{$articles[11]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[11]->url }} target="_blank"><b>{{$articles[11]->title}}<br/>{{$articles[11]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[11]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[11]])</li>
								<
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="{{$articles[12]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[12]->url }} target="_blank"><b>{{$articles[12]->title}} <br/>{{$articles[12]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[12]->auhtor}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[12]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						
						<div class="col-sm-6">
							<img src="{{$articles[13]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[13]->url }} target="_blank"><b>{{$articles[13]->title}} <br/>{{$articles[13]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[13]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[13]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[14]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[14]->url }} target="_blank"><b>{{$articles[14]->title}} <br/>{{$articles[14]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[14]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[14]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[15]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[15]->url }} target="_blank"><b>{{$articles[15]->title}} <br/>{{$articles[15]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[15]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[15]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[16]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[16]->url }} target="_blank"><b>{{$articles[16]->title}} <br/>{{$articles[13]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[16]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[16]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[17]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[17]->url }} target="_blank"><b>{{$articles[17]->title}} <br/>{{$articles[17]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[17]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[17]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[18]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[18]->url }} target="_blank"><b>{{$articles[18]->title}} <br/>{{$articles[18]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[18]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[18]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[19]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[19]->url }} target="_blank"><b>{{$articles[19]->title}} <br/>{{$articles[19]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[19]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[19]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[20]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[20]->url }} target="_blank"><b>{{$articles[20]->title}} <br/>{{$articles[20]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[20]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[20]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[21]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[21]->url }} target="_blank"><b>{{$articles[21]->title}} <br/>{{$articles[21]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[21]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[21]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[22]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[22]->url }} target="_blank"><b>{{$articles[22]->title}} <br/>{{$articles[22]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[22]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[22]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[23]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[23]->url }} target="_blank"><b>{{$articles[23]->title}} <br/>{{$articles[23]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[23]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[23]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[24]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[24]->url }} target="_blank"><b>{{$articles[24]->title}} <br/>{{$articles[24]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[24]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[24]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[25]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[25]->url }} target="_blank"><b>{{$articles[25]->title}} <br/>{{$articles[25]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[25]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[25]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[26]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[26]->url }} target="_blank"><b>{{$articles[26]->title}} <br/>{{$articles[26]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[26]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[26]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[27]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[27]->url }} target="_blank"><b>{{$articles[27]->title}} <br/>{{$articles[27]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[27]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[27]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[28]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[28]->url }} target="_blank"><b>{{$articles[28]->title}} <br/>{{$articles[28]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[28]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[28]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[29]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[29]->url }} target="_blank"><b>{{$articles[29]->title}} <br/>{{$articles[29]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[29]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[29]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<img src="{{$articles[30]->urlToImage}}">
							<h4 class="pt-20"><a class="pos-relative h-100 dplay-block" href={{ $articles[30]->url }} target="_blank"><b>{{$articles[30]->title}} <br/>{{$articles[30]->publishedAt}}</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black"> <a href="#" class="color-black"><b>{{$articles[30]->author}}</b></a>
								</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>@include('news.favorite_button', ['article'=>$articles[30]])</li>
								
							</ul>
						</div><!-- col-sm-6 -->
						
					</div><!-- row -->
					
			</div><!-- row -->
		</div><!-- container -->
	</section>
	
	
	
@endsection