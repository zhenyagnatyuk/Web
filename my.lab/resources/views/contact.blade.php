@extends('layouts.app')

@section('title')Contact @endsection


@section('page_h1')
	<header>
		<h1>Contact</h1>
	</header>
@endsection


@section('content')
	
	<section id="feedback">
		<div class="form-group container">
			<div class="row justify-content-center" >
				<form class="col-lg-6 col-12 form" method="post" action="{{ route('contact-form') }}">
					
					@csrf
					<div class = 'form-group'>
						<label for = 'name'>Ім'я</label>
						<input type="text" id="name"  name="name" placeholder="Ім'я" class = "form-control">
					</div>
					<div class = 'form-group'>
						<label for = 'surname'>Прізвище</label>
						<input type="text" id="surname" name="surname" placeholder="Прізвище" class = "form-control">
					</div>
					<div class = 'form-group'>
						<label for = 'email'>E-mail</label>
						<input type="text" id="email" name="email" placeholder="E-mail" class = "form-control">
					</div>
					<div class = 'form-group'>
						<label for = 'message'>Повідомлення</label>
						<textarea id="message" name = "message" placeholder="Текст повідомлення" class = "form-control" ></textarea>
					</div>
						
					<button type = "submit" value = "Надіслати" class="btn btn-success">Надіслати</button>
				
				</form>
			</div>
		</div>
	</section>
@endsection
