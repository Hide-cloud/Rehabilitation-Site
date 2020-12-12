<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="{{ asset('css/login_page.css') }}" type="text/css">
    <title>Login</title>
</head>
<body>

  <div class="main">
    <p class="sign">Login Your Account</p>
    <form class="form1">
      <input class="un " type="text"  name="E-mail" placeholder="E-mail">
      <input class="pass" type="password" name="password" placeholder="パスワード">
      <input type="submit" value="Login" class="submit">
      <p class="forgot" ><a href=" ">パスワードを忘れましたか?</a></p>
    </form> 
      <p class="new">新規アカウント登録はこちらから</p>     
      <a href="new_account.blade.php" class="account"><p>アカウント登録</p></a>        
  </div>
     
</body>

</html>
</body>
</html>