@extends('layouts.app2')

@section('content')
<header>
	
    <div class="container">
			
			
		<nav class="navbar navbar-expand-md navbar-light bg-light">
            
<!-- 横幅が狭いときに出るハンバーガーボタン -->
            <button type="button" class="navbar-toggler d-md-none" data-toggle="collapse" data-target="#nav-bar">
                <span class="navbar-toggler-icon d-md-none "></span>
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
			<li>{!! link_to_route('keyword.index', 'キーワード設定', [], []) !!}</li>　
			<li>{!! link_to_route('keywordsnews.index', 'ニュース【キーワード制限】', [], []) !!}</li>
			<li>{!! link_to_route('allnews.index', 'ニュース【新着】', [], []) !!}</li>
			<li>{!! link_to_route('favoritenews.index', 'ニュース【お気に入り】', [], []) !!}</li>
			<li>{!! link_to_route('logout.get', 'ログアウト', [], []) !!}</li>
		</ul>
	    <div class="clearfix"></div>
		</div><!-- container -->
</header>
<div id="wrapper">
    <div class="keyword-form">
	    {!! Form::open(['route' => ['keyword.store'], 'method' => 'post']) !!}
            <div class="form-group">
                <div class="title">{!! Form::label('keyword', 'キーワード設定') !!}</div>
                <h6 class="keyword-search-title">キーワード：</h6>
                <div class="keyword-text-form">{!! Form::text('keyword', old('keyword'), ['class' => 'form-control']) !!}</div>
            </div>
        
            <div class="submit-form">{!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}</div>
        
        {!! Form::close() !!}
    </div>
    
    <h3 class="keyword-title">キーワード一覧</h3>
        <ul class="catalog">
            @foreach ($keywords as $id=> $keyword)
                {{--削除ページへのリンク--}}
                <div  class="keyword-catalog">
                {!! Form::open(['route' => ['keyword.destroy', $keyword->id], 'method' => 'delete']) !!}
                    {!! Form::submit(  $keyword->keyword.'【🚮】', ['class' => 'btn  far fa-trash-alt far fa-trash-alt keyword-design']) !!}
                
                {!! Form::close() !!}
           
             
                </div>
            @endforeach          
        </ul> 
            
</div>
               
              
            
@endsection
@section('head3')
    <link href="/common/keyword_page.css" rel="stylesheet">
@endsection


