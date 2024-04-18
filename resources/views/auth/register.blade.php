<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo1.png')}}">

  <style>

    form {
      background-color: #fff;
      padding: 40px;
      border-radius: 2px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 700px;
      height: 780px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input, textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #4caf50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
           
    }

    button:hover {
      background-color: #45a049;
    }

    .checkbox-label {
      text-align: center;
    }
    .art_reg{
      font-size : 17px ;
      padding-left: 0px;
      padding-bottom: 20px;
      display: flex;
    }
    .a_main{
      background-image: linear-gradient(rgb(240, 208, 208), rgb(192, 235, 192), rgb(189, 237, 237));
      padding-top: 20px;
    }
    </style>
</head>
<body>
 <div class="a_main"><h2 style="text-align: center;">USER REGISTRATION</h2>
  <div class="art_reg">
   
    <div>
      <img src="https://storage.googleapis.com/pai-images/12a5cc3e7b16494797e705cbd85d2e8a.jpeg"style="height:862px;width:700px;">
    </div>
    <!-- @if ($errors->any())
    @php dd($errors) @endphp
    @endif -->
<form action="{{ route('register.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="fl">
    <label for="firstname">Name:</label>
    <input type="text" id="firstname" name="firstname" required>    
  </div>
  <div> 
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  </div> 
  <div class="fl">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
  </div>
 
  <div class="fl">
    <label for="phonenumber">Phone Number:</label>
    <input type="tel" id="phonenumber" name="phonenumber" required>
  
    <label for="bio">Bio:</label>
    <textarea id="bio" name="bio" rows="4" required></textarea>
  </div>

  <!-- <div class="input-field" style="display: none;">
                            <label>Type:</label>
                            <input type="number" placeholder="Creator" name="type" id="type" readonly required>
                            <input type="hidden" name="type_default" value="0">
                        </div> -->

    <label class="checkbox-label" for="agree_terms">
        <input type="checkbox" id="agree_terms" name="agree_terms" required>
        I agree to the terms and conditions
    </label>
    <button type="submit">Register</button>
    <div class="login-link">
      <p>Already have an account? <a href="{{ route('user.login') }}">Login here</a></p>
    </div>
</form>
</div>
</div> 
</body>
</html>
