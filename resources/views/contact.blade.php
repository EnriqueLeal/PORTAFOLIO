@extends('layout')
@section('title','CONTACT')
@section('content')
<h1>CONTACT</h1>
{{-- {{var_dump($errors->any())}}
 --}}
{{-- @if($errors->any())
 @foreach($errors->all() as $error)
 		<p>{{$error}}</p>
 @endforeach
 @endif --}}
<form method="POST" action="{{ route('contact') }}">
	@csrf
	<input name="name" type="name" placeholder="Nombre..." value="{{old('name')}}"><br>

	{!!$errors->first('name','<small>:message</small> <br>')!!}

	<input type="email" name="email" placeholder="Email" value="{{old('email')}}"><br>
	{!!$errors->first('email','<small>:message</small> <br>')!!}

	<input name="subject" type="text" placeholder="Asunto..." value="{{old('subject')}}"><br>
	{!!$errors->first('subject','<small>:message</small> <br>')!!}

	<input name="mensaje" type="text" placeholder="Mensaje..." value="{{old('subject')}}"><br>
	{!!$errors->first('mensaje','<small>:message</small> <br>')!!}
	<button>ENVIAR</button>
</form>

@endsection