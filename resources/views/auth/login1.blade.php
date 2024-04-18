<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Login</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">

    <style>
    body{
        background-image: url("https://images.pexels.com/photos/4194857/pexels-photo-4194857.jpeg?auto=compress&cs=tinysrgb&w=800");
	    /* background-repeat: no-repeat; */
		opacity: 5;
    }
    .login{
        text-align: center;
        padding-top: 0px;
        /* padding-left: 200px; */
        font-size: larger;
        font-family: math;

    }
    button {
        background-color: #4caf50;
        color: white;
        padding: 10px 15px;
        margin: 20px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;      
    }
    button:hover {
        background-color: #45a049;
    }
    form {
        background-color: #ebeef9;
        padding-top:80px;
        padding-bottom:80px;
        border-radius: 2px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 500px;
        /* margin-left: 280px; */
        height: 310px;
    }
    input{
        width: 250px;
        padding-bottom: 9px;
        padding-top: 8px;
        margin-bottom: 18px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
.abc{
    display: flex;
    padding-top: 8px;
    justify-content: flex-start;
    margin-left: 170px;
}
.image{
    margin-left: 0px;   
}
.forgot-password {
            margin-top: 20px;
        }

    </style>
</head>
<body>
    
    <h2 style="font-size: 2.244em;font-family: math;font-weight: 400;color: rgb(31, 10, 166);text-align: center;padding-top: 10px;padding-bottom: 0px;">ARTIST LOGIN</h2>
<div class="abc">
   <div class="image"><img src="{{ asset('Images/fav.jpeg') }}" style="width: 560px;height:470px;"></div> 
    <div class="login">

        <form action="{{ route('login') }}" method="post">
            @csrf
            <label for="email">Email:&nbsp;&nbsp;</label>
            &nbsp;&nbsp;&nbsp; <input type="text" id="email" name="email" required><br>

            <label for="password">Password:</label>
            &nbsp; <input type="password" id="password" name="password" required>

            <div class="forgot-password">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot Password?</a>
                @endif
            </div>

            <button type="submit">Submit</button>

            <p>Don't have an account? <a href="{{ route('artist.register') }}">Sign up here</a></p>
    </form>
    </div>
</div>
</body>
</html>