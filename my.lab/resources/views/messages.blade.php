@extends('layouts.app')

@section('title')Повідомлення @endsection

@section('content')
	<div class = "container messages">
		<div class = "row">
			<div class = "col-md-12">
				<h1>Усі повідомлення</h1>
			</div>
			@foreach($data as $el)
				<div class = "col-md-12">
					<div class="alert alert-info">
						<h3>{{ $el -> name }} {{ $el -> surname }}</h3>
						<p>{{ $el -> email }}</p>
						<p>{{ $el -> message }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection