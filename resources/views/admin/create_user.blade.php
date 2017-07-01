<form method="POST" action="post_user">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Name:<input type="text" name="first_name">
    Last Name:<input type="text" name="last_name">
    Email:<input type="email" name="email">
    Password:<input type="password" name="password">
    <input type="submit" name="submit" value="post user">
</form>