@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('message'))
        <div class="alert alert-danger" role="alert">
            <h6>{{ session('message') }}</h6>
        </div>
    @endif
	<div class="screen">
		<div class="screen__content">
			<form method="POST" action="{{ route('login') }}" class="login">
                @csrf
				<div class="login__field">
					<i class="fa fa-user"></i>
					<input id="username" type="text" class="login__input @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Email or Username" required autocomplete="username" autofocus>
                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>
				<div class="login__field">
					<i class="fa fas fa-lock"></i>
					<input type="password" class="login__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>

                <div class="login__field">
                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                </div>
				<button type="submit" class="button login__submit">
					<span class="button__text">Log-in</span>
					<i class="fa fa-chevron-right"></i>
				</button>
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>
	</div>
</div>
@endsection
