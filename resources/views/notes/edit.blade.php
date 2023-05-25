@extends('layouts.layouts')

@section('title-app', 'Update Notes')

@section('content')
	<h2> Edición de Notas</h2>

	<form action="{{ route('notes.update', $notes) }}" method="POST">

		@csrf
		@method('PUT')

		<input type="text" name="title" value="{{ old('title', $notes->title) }}">
		@error('title')
			<br>
			<small> * {{ $message }} </small>
		@enderror

		<br><br>

		<textarea name="body" rows="10"> {{ old('body', $notes->body) }} </textarea>
		@error('body')
			<br>
			<small> * {{ $message }} </small>
		@enderror

		<br><br>
		<button class="bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded-full" type="submit"> Editar nota </button>
		
	</form>
@endsection