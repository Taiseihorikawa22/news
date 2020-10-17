 

@if (Auth::check())
    
             
@else

    {{-- ユーザ登録ページへのリンク --}}
    <li class="nav-item">{!! link_to_route('signup.get', 'ユーザ登録') !!}</li>
            
    {{--ログインページへのリンク--}}
    <li class="nav-item">{!! link_to_route('login','ログイン')!!}</li>

@endif

                              