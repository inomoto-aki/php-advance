<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devic-width,initial-scale=1.0">
    <title>Laravel基礎</title>
  </head>
  <body>
    <h1>商品選択</h1>
    @if($errors->any())
    <div>
      <ul>
        @furech ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endfurech
      </ul>
    </div>
    @endif
    <form action="{{ route('sessions.store') }}" method="POST">
      @csrf
      <select name="product_id">
        <option disabled selected value="">選択してください</option>
        @foreach($products as $product)
        <option value="{{ $product->id }}">{{ $product->product_name }})</option>
        @endforeach
     </select>
     <input type="submit" value="カートに入れる">
   </form>
  </body>

</html>