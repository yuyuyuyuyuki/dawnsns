@extends('layouts.logout')
@section('content')
<p class='text'>Social Network Service</p>
<div>
{!! Form::open(['url'=>'/top']) !!}

<p class='welcome'>DAWNのSNSへようこそ</p>

<p class='mail'>{{ Form::label('Mailaddress') }}</p>
{{ Form::text('mail',null,['class' => 'input']) }}</p>
<br><br>
<p class='pass'>{{ Form::label('Password') }}</p>
{{ Form::password('password',['class' => 'input']) }}

<br>
<div class='loginbtn'>
{{  Form::submit('LOGIN')  }}</div>

<p class='register_form'><a href="/register">新規ユーザーの方はこちら</a></p>

{!! Form::close() !!}
</div>

@endsection
