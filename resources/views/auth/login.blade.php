<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        
        <div class="mart5pr">
            <div class="login_bg1">
                <div>
                    <div class="login_title1">Login to your account</div>
                    <div>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                          
                          
                          <div class="form-group">
                            <label for="pwd">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                          </div>
                        @error('password')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                    </span>
                        @enderror                       
                          <div class="checkbox">
                            <label>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('Remember Me') ? 'checked' : '' }}> Remember Me
                            </label>
                          </div>
                          
                          <div class="mart20">
                            <button type="submit" class="btn btn-primary form-control" >{{ __('Login') }}
                          </div>
                          
                          <div class="mart30 text-center">
                          New to MyApp? <a href="{{ route('register') }}">Sign Up</a>
                          </div>
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
