<!DOCTYPE html>
<html lang="ja">
  <head>
    <mate charset="UTF-8">
      <mate name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Laravel基礎</title>
  </head>
  <body>
    <p>こんにちは、{{$name}}さん！</p>
    <ul>
      @foreach($languages as $language)
      <li>{{$language}}</li>
      @endforeach
    </ul>
  </body>
</html>