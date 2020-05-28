@extends('app')

@section('content')
<!--
=================================
INNER SECTION
=================================
-->
<section id="inner" class="inner-section section">
	<div class="container">

		<!-- SECTION HEADING -->
		<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Signup</h2>
		<div class="inner-wrapper row">
			<div class="col-md-12">

                @include('parts/flash')

				<form name="frm" id="frm" action="{{ url('/auth/register') }}" method="post" class="col-md-6 col-md-offset-3">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<!-- fName -->
					<div class="form-group">
						<label for="name">Name</label>
 						<input type="text" name="name" maxlength="255" class="form-control" id="name" placeholder="Enter First first name" value="{{ old('name') }}" />
					</div>

					<!-- Email -->
					<div class="form-group">
						<label for="email">Email address</label>
 						<input type="email" name="email" maxlength="255" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}" />
					</div>

					

					<!-- Password -->
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" maxlength="255" class="form-control" id="password" name="password" placeholder="Password" value="" />
					</div>

					<!-- Confirm Password -->
					<div class="form-group">
						<label for="password_confirmation">Confirm Password</label>
						<input type="password" maxlength="255" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" value="" />
					</div>

					<!-- Submit -->
					<button type="submit" name="submit" id="submit" class="btn btn-primary">Register</button>

					<a class="btn btn-link" href="{{ url('/auth/login') }}">Already have an account?</a>
				</form>
			</div>
		</div>

	</div>
</section>
@endsection
