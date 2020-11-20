<!DOCTYPE html>
<html>
  <head>
    <title>Explore Labs</title>
  </head>
  <body>
    <ul>
      @if(is_array($availableLabs))
        @foreach($availableLabs as $lab)
          <li>
            <p>{{$lab['labName']}}</p>
            <a href="https://maps.google.com/?q={{$lab['location']}}" target="_blank">
              <p>Location: {{$lab['location']}}</p>
            </a>
          </li>
        @endforeach
      @endif
    </ul>
  </body>
</html>
