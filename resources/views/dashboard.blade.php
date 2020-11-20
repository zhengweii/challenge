<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <ul>
    @if (auth() -> user())
    <li>My name: {{Auth::user()->name}}</li>

    <li>
      <a href="{{ route('lab') }}">labs</a>
    </li>

    @if (Auth::user()->admin)
    <li>
      <a href="{{ route('admin') }}">Admin</a>
    </li>
    @endif

    <li>
      <a href="{{ route('logout') }}">Log Out</a>
    </li>

    @endif
  </ul>

</body>
</html>
