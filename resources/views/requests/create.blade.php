<!DOCTYPE html>
<html lang="ja">
  <head>
    <mate charset="UTF-8">
      <mate name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Laravel基礎</title>
  </head>
  <body>
    <h1>お問い合わせ</h1>
    <form action="{{ route('requests.confirm') }}" method="POST">
      @csrf
      <table>
        <tr>
          <th>お名前</th>
          <td>
            <input type="text" name="user_name">
          </td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td>
            <input type="text" name="user_email">
          </td>
        </tr>
        <tr>
          <th>性別</th>
          <td>
            <input type="radio" name="user_gender" value="男性" chexked>男性
            <input type="radio" name="user_gender" value="女性">女性
          </td>
        </tr>
        <tr>
          <th>お問い合わせ種別</th>
          <td>
            <select name="category">
              <option value="ご意見やご感想">ご意見やご感想</option>
              <option value="不具合について">不具合について</option>
           </select>
          </td>
        </tr>
        <tr>
          <th>お問い合わせ内容</th>
          <td>
            <textarea name="message" cols="30" rows="10"></textarea>
          </td>
        </tr>
      </table>
      <input type="submit" value="送信">
   </form>
  </body>
</html>