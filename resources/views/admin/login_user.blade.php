<form method="POST" action="user_login">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Email:<input type="email" name="email">
    Password:<input type="password" name="password">
    <input type="submit" name="submit" value="post user">
</form>