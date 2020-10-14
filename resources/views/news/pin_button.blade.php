@if ($article->pivot->pin === 1)
    
        {{-- ピン止め解除のフォーム --}}
        {!! Form::open(['route' => ['pin.unpin', $article->id], 'method' => 'delete']) !!}
            {!! Form::submit( $article->id , ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- ピン止めのフォーム --}}
        {!! Form::open(['route' => ['pin.pin', $article->id],"method"=>'post']) !!}
            {!! Form::submit( $article->id, ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
    
    