<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login to dashboard</title>
</head>

<style>
  .form{
    width: 100%;
    height: 100vh;
    position: fixed;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
  }
</style>
<body>
    <div class="form">
      <form action="{{route('login.auth')}}" method="post">
        @csrf
        <h1>Login to dashboard</h1>
        <label for="">
          <h3>Email</h3>
          <input type="email" name="email" placeholder="email">
        </label>
        <label for="">
          <h3>Password</h3>
          <input type="password" name="password" placeholder="password">
        </label>
        <button style="" type="submit">Login</button>
      </form>
    </div>
</body>
</html>