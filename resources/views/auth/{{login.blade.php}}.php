<form method="POST" action="{{ URL::to('/auth/login') }}">

    <div>
        email
        <input type="text" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div>
        <button type="submit">Login</button>
    </div>
</form>