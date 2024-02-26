<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Credentials</title>
</head>

<body>
    <p>Hello {{ $name }},</p>
    <p>Your credentials for our site are:</p>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Password:</strong> {{ $password }}</p>
    <p>You can login with this password or change it later.</p>
</body>

</html>





{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
</head>

<body>
    <h2>Reset Your Password</h2>
    <p>Hello {{ $user->name }},</p>
    <p>Welcome to our site! Please set your password by clicking the following link:</p>
    <a href="{{ route('set_password', ['token' => $user->verification_token]) }}">Set Password</a>
    <p>Thank you!</p>
</body>

</html> --}}
