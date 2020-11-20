<!DOCTYPE html>
<html>
<head>
  <title>Log In</title>
</head>
<body>
  <form action="{{ route('login') }}" method="post">
    @csrf
    <label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="email" value="">

    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="password" value="">

    <button type="submit">Submit</button>
  </form>

  @error('email')
    <p>Please check your email field</p>
  @enderror

  @error('password')
    <p>Please check your password field</p>
  @enderror

  @if (session('status'))
    {{ session('status') }}
  @endif

</body>
</html>
