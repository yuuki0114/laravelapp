<html>
    <head>
      <title>Hello/Index</title>
      <style>
        body { font-size: 16pt; color: #999; }
        h1   { font-size: 50pt; text-align: right; color: #f6f6f6;
                margin: -20px 0 -30px 0; letter-spacing: -4pt;}
      </style>
    </head>
    <body>
      <h1>Blade/Index</h1>
      <p>&#064;foreachディレクティブの例</p>
      <ol>
        @foreach($data as $item)
          <li>{{$item}}</li>
        @endforeach
      </ol>
      <form method="POST" action="/hello">
        @csrf
          <input type="text" name="msg">
          <input type="submit">
      </form>
      <p>&#064;forディレクティブの例1</p>
          <ol>
              @for ($i = 1; $i < 100; $i++)
                  @if ($i % 2 == 1)
                      @continue
                  @elseif ($i <= 10)
                      <li>No, {{ $i }}
                  @else
                      @break
                  @endif
              @endfor
          </ol>
      <p>&#064;forディレクティブの例2</p>
          @foreach ($data as $item)
              @if ($loop -> first)
                  <p>※データ一覧※</p><ul>
              @endif
                  <li>No, {{ $loop -> iteration }}. {{ $item }}</li>
              @if ($loop -> last)
                  </ul><p>---ここまで</p>
              @endif
          @endforeach
      <p>&#064;whileディレクトリの例</p>
          <ol>
              @php
                  $counter = 0;
              @endphp
              @while ($counter < count($data))
                  <li>{{ $data[$counter] }}</li>
                  @php
                      $counter++;
                  @endphp
              @endwhile
          </ol>
    </body>
</html>