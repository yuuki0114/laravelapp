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
    <p>&#064; foreachディレクティブの例</p>
    <ol>
      @foreach($date as $item)
        <li>{{$item}}</li>
      @endforeach
    </ol>
    <form method="POST" action="/hello">
      @csrf
        <input type="text" name="msg">
        <input type="submit">
    </form>
  </body>
</html>