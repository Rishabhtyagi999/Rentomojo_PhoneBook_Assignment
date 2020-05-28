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
		<h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Forgot Password</h2>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
				<p class="wow fadeIn" data-wow-duration="1s">Enter your email id used while registring on GoMayavi.</p>
			</div>
		</div>

		<div class="inner-wrapper row">
			<div class="col-md-12">

                @include('parts/flash')

				<form name="frm" id="frm" action="{{ url('/password/email') }}" method="post"  class="form-inline">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<!-- Left offset -->
					<div class="col-sm-2"></div>

					<!-- Email -->
					<div class="form-group col-sm-7">
						<input id="email" name="email" placeholder="please enter your email" class="form-control input-large" type="text" value="{{ old('email') }}" />
					</div> 

					<!-- Submit -->
					<div class="col-sm-3">
						<button id="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
					</div>

					<a class="btn btn-link col-sm-7 col-sm-offset-2"" href="{{ url('/auth/login') }}">Wait, I have my password</a>
				</form>
			</div>
		</div>

	</div>
</section>
@endsection