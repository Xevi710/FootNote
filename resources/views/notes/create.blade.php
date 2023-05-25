@extends('layouts.layouts')

@section('title-app', 'Create Notes')

@section('content')
	<h2> Crear notas</h2>

	<form action="{{ route('notes.store') }}" method="POST">

		@csrf
		<input type="hidden" name="user_id" value="{{ Auth::id() }}">

		<input type="text" name="title" placeholder="Título de la Nota" value="{{ old('title') }}">
		@error('title')
			<br>
			<small> * {{ $message }} </small>
		@enderror

		<br><br>

		<textarea name="body" rows="10"> {{ old('body') }} </textarea>
		@error('body')
			<br>
			<small> * {{ $message }} </small>
		@enderror

		<br><br>

		
		<button class="bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded-full" type="submit"> Guardar nota </button>
		
	</form>
@endsection