<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
</head>
<body>
  <form action="{{ route('register') }}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="name" value="">

    <label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="email" value="">

    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="password" value="">

    <button type="submit">Submit</button>
  </form>

  @error('name')
    <p>Please check your name field</p>
  @enderror

  @error('email')
    <p>Please check your email field</p>
  @enderror

  @error('password')
    <p>Please check your password field</p>
  @enderror

</body>
</html>
