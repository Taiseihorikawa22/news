@extends('layouts.app2')

@section('content')

    <div class="text-center login-title">
        <h1>ログイン</h1>
    </div>
<div id="wrapper">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                

                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            {{-- ユーザ登録ページへのリンク --}}
            <h4 class="mt-2 register-link">まだ登録してない？{!! link_to_route('signup.get', '登録する',['class'=>'btn btn-primary btn-block']) !!}</h4>
        </div>
    </div>
    </div>
@endsection


@section('head')
    <link href="/common/login_page.css" rel="stylesheet">
@endsection
