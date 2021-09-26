<html>
    <head>
        <link href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
        <link href="{{asset('assets/css/home-login.css')}}" rel="stylesheet" >
        <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')}}"></script>
        <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
    </head>

<body bg-image = "{{asset('assets/img/bg.jpg')}}" >
    <div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
        <img src="{{asset('assets/img/circle-cropped.png')}}" id="icon" alt="circle" />
        </div>

        <!-- Icon -->
        <div class="fadeIn first">
        <img src="{{asset('assets/img/logo.png')}}" id="icon" alt="LOGO" />
        </div>

        <!-- Login Form -->
        <form action = "{{url('/user-login')}}" method="POST">
        @csrf
        <input type="text" id="login" class="fadeIn second" name="email" placeholder="EMAIL">
        <input type="text" id="password" class="fadeIn third" name="password" placeholder="PASSWORD">
        <input type="submit" class="fadeIn fourth" value="LOG IN">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
        <a class="underlineHover" href="#">FORGOT PASSWORD</a> <br>
        <a class="underlineHover" href="#">REGISTER</a>
        </div>

    </div>
    </div>
</body>

</html>