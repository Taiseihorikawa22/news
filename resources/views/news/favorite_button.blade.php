@if(Auth::check())
    @if (Auth::user()->isFavoriting($article->id))
    
        {{-- お気に入り削除のフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $article->id], 'method' => 'delete']) !!}
            {!! Form::submit('★')!!}
        {!! Form::close() !!}
    @else
        {{-- お気に入り追加のフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $article->id],'method'=>'post']) !!}
            {!! Form::submit('☆') !!} 
        {!! Form::close() !!}
    @endif

@endif