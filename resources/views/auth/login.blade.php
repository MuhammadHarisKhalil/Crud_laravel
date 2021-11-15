<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

   

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signup-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="{{ route('register') }}" class="signup-image-link">Create an account</a>
                    </div>
                    
                        @if (session('status'))
                     <div class="mb-4 font-medium text-sm text-green-600">
                         {{ session('status') }}
                      </div>
                           @endif

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" action="{{ route('login') }}">
                                  @csrf
                            <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input id="email" type="email" name="email"  :value="old('email')" placeholder="email" required autofocus/>
                            </div>
                            <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input id="password" type="password" name="password" placeholder="password" required autocomplete="current-password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <x-jet-button class="form-submit">
                            {{ __('Log in') }}
                        </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    
   

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
