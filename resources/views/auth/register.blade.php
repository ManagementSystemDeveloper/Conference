<!DOCTYPE html>
<html>
  <head>
    <title>Register Page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('main/css/auth.css') }}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="d-flex justify-content-center h-100">
        <div class="card h-auto">
          <div class="card-header">
            <h3>{{ __('Register') }}</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                
                @csrf
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-user"></i>
                  </span>
                </div>
                <input name='first_name' type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="{{ __('First name') }}" required autofocus>
                    @error('first_name') 
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span> @enderror
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-user"></i>
                  </span>
                </div>
                <input name='last_name' type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="{{ __('Last name') }}" required> @error('last_name') <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span> @enderror
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
                <input name='email' type="text" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" required> @error('email') <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span> @enderror
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-key"></i>
                  </span>
                </div>
                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required autocomplete="new-password"> @error('password') <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span> @enderror
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-key"></i>
                  </span>
                </div>
                <input name="password_confirmation" type="password" class="form-control" placeholder="{{ __('Password confirm') }}" required autocomplete="new-password">
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-user-friends"></i>
                  </span>
                </div>
                <select name="role" type="text" class="form-control" required>
                  <option value="0">I am a client</option>
                  <option value="1">I am a trainer</option>
                </select>
              </div>
              <div class="form-group">
                <input type="submit" value="{{ __('Register') }}" class="btn float-right login_btn">
              </div>
            </form>
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-center links">{{ __("Already have an account?") }}
              <a href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>