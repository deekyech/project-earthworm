@extends('layouts.app')

@section('content')
<div class="container container-signup animated fadeIn">
	{{-- <div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Register') }}</div>

				<div class="card-body">
					<form method="POST" action="{{ route('register') }}">
						@csrf

						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                            <div class="col-md-6">
								<input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autocomplete="username">

								@error('username')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
							</div>
						</div>

						<div class="form-group row">
							<label for="role" class="col-md-4 col-form-label text-md-right">Register as:</label>
							<div class="col-md-6">
								<select name="role" id="role" class="form-control">
									<option value="2">Farmer</option>
									<option value="3">Investor</option>
                                    <option value="4">Job Volunteer</option>
								</select>
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Register') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> --}}


    <h3 class="text-center">Sign Up</h3>
    <div class="login-form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group form-floating-label">
                <input  id="name" name="name" type="text" class="form-control input-border-bottom @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                <label for="name" class="placeholder">Fullname</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group form-floating-label">
                <input id="email" name="email" type="email" class="form-control input-border-bottom @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                <label for="email" class="placeholder">Email</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group form-floating-label">
                <input id="username" name="username" type="text" class="form-control input-border-bottom @error('username') is-invalid @enderror" value="{{ old('username') }}" required autocomplete="username">
                <label for="username" class="placeholder">Username</label>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group form-floating-label">
                <input id="password" name="password" type="password" class="form-control input-border-bottom @error('password') is-invalid @enderror" required autocomplete="new-password">
                <label for="password" class="placeholder">Password</label>
                {{-- <div class="show-password">
                    <i class="flaticon-interface"></i>
                </div> --}}
            </div>
            <div class="form-group form-floating-label">
                <input id="password-confirm" name="password_confirmation" type="password" class="form-control input-border-bottom" required autocomplete="new-password">
                <label for="password-confirm" class="placeholder">Confirm Password</label>
                {{-- <div class="show-password">
                    <i class="flaticon-interface"></i>
                </div> --}}
            </div>
            <div class="form-group form-floating-label">
                <select id="role" name="role" class="form-control input-border-bottom">
                    <option value="2">Farmer</option>
                    <option value="3">Investor</option>
                    <option value="4">Job Volunteer</option>
                </select>
                <label for="role" class="placeholder">Register as:</label>
            </div>
            {{-- <div class="row form-sub m-0">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="agree" id="agree">
                    <label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
                </div>
            </div> --}}
            <div class="form-action">
                {{-- <a href="#" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Cancel</a> --}}
                <button type="submit" class="btn btn-primary btn-rounded btn-login">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
