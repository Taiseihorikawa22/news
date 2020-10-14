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
     @foreach ($keywords as $id=> $keyword)
                
                  {{--削除ページへのリンク--}}
    {!! Form::open(['route' => ['keyword.destroy', $keyword->id], 'method' => 'delete']) !!}
        {!! Form::submit( '🚮 ', ['class' => 'btn btn-danger far fa-trash-alt']) !!}
    {!! Form::close() !!}
                
                <p>{{ $keyword->keyword }}</P>
     @endforeach          
              {!! Form::open(['route' => ['keyword.store'], 'method' => 'post']) !!}
                <div class="form-group">
                    {!! Form::label('keyword', 'キーワード') !!}
                    {!! Form::text('keyword', old('keyword'), ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            
@endsection


