<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        
        <div class="mart5pr">
            <div class="login_bg1">
                <div>
                    <div class="login_title1">Create Account</div>
    <div>
        <form method="POST" action="{{ route('register') }}">
                        @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          </div>
          @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
          @enderror

          
          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          </div>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          
          <div class="form-group">
            <label for="pwd">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          </div>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div class="form-group">
            <label for="pwd">Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          </div>
          
          <div class="checkbox">
            <label><input type="checkbox"> Remember Me</label>
          </div>
          
          <div class="mart20">
           
            <button type="submit" class="btn btn-primary">
                                    {{ __('Sign Up') }}
                                </button>
          </div>


          
          <div class="mart30 text-center">
          Already have an account? <a href="{{ route('login') }}">Login</a>
          </div>
        </form>
        <div class="clear"></div>
    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
