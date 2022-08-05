@extends('layouts.logout')
@section('content')

{!! Form::open(['url' => '/added']) !!}

<h2>新規ユーザー登録</h2>

  <p class='username'>
   {{ Form::label('UserName') }}</p>
   {{ Form::text('username',null,['required','class' => 'input','placeholder' => 'dawntown']) }}
<br><br>

 <p class='mail'>
   {{ Form::label('MailAddress') }}</p>
   {{ Form::text('mail',null,['required','class' => 'input','placeholder' => 'dawn@dawn.jp']) }}
<br><br>

<p class='pass'>
   {{ Form::label('Password') }}</p>
   {{ Form::text('password',null,['required','class' => 'input']) }}
<br><br>

<p class='passconfirm'>{{ Form::label('Password confirm') }}</p>
   {{ Form::text('password-confirm',null,['required','class' => 'input']) }}
<br>

<div class='registertbtn'>{{ Form::button('REGISTER') }}</div>

<p class='backlogin_form'><a href="/login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}

@endsection
