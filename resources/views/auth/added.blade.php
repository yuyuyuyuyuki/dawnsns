@extends('layouts.logout')

@section('content')

<div id="clear">
  @foreach ($users as $user)
<p> {{ $user -> username }} さん、</p>
  @endforeach
<p>ようこそ！DAWNSNSへ！</p>
<p>ユーザー登録が完了しました。</p>
<p>さっそく、ログインをしてみましょう。</p>

<p class="btn"><a href="/login">{{ Form::submit('ログイン画面へ') }}</a></p>
</div>

@endsection
