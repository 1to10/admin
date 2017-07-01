<form method="POST" action="user_logout">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" name="submit" value="Logout User">
</form>