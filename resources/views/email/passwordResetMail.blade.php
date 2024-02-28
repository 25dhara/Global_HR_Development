<!DOCTYPE html>
<html lang="en">

<head>
    <title>GLOBAL HR</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>

<body style="background-color: #f4f4f4; margin: 0; padding: 0; font-family: Arial, sans-serif;">

    <!-- HIDDEN PREHEADER TEXT -->
    <div
        style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
        New Global HR Account created.
    </div>

    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <!-- LOGO -->
        <tr>
            <td bgcolor="#7c72dc" align="center">
                <table border="0" cellpadding="0" cellspacing="0" width="480">
                    <tr>
                        <td align="center" valign="top" style="padding: 40px 10px;">
                            {{-- <a href="https://pifs.lts.com.fj" target="_blank">
                                <img src="{{ asset('assets/images/brand-logos/TKA.jpg') }}" width="70"
                                    border="0">
                            </a> --}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- HERO -->
        <tr>
            <td bgcolor="#7c72dc" align="center" style="padding: 0 10px;">
                <table border="0" cellpadding="0" cellspacing="0" width="480">
                    <tr>
                        <td bgcolor="#ffffff" align="center" valign="top"
                            style="padding: 40px 20px; border-radius: 4px 4px 0 0; color: #111111; font-size: 32px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                            <h3 style="font-size: 32px; font-weight: 400; margin: 0;">Your GLOBAL HR Account Is Ready
                            </h3>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- COPY BLOCK -->
        <tr>
            <td bgcolor="#f4f4f4" align="center" style="padding: 0 10px;">
                <table border="0" cellpadding="0" cellspacing="0" width="480">
                    <!-- COPY -->
                    <tr>
                        <td bgcolor="#ffffff" align="left"
                            style="padding: 20px 30px 40px 30px; color: #666666; font-size: 18px; font-weight: 400; line-height: 25px;">
                            <p style="margin: 0;">
                                Dear , {{ $name }} <br>
                                Your account on GLOBAL HR is ready. To login, please see your details below:<br><br>
                                <span style="display: inline-block; margin-bottom: 5px;">Your email:</span>
                                {{ $email }} <br>
                                <span style="display: inline-block; margin-bottom: 5px;">Your password:</span>
                                {{ $password }} <br><br>
                                You want to reset your own personal password. Resetting your password is easy. Just
                                press the button below and follow the instructions. We'll have you up and running in no
                                time.
                            </p>

                        </td>
                    </tr>
                    <!-- BULLETPROOF BUTTON -->
                    <tr>
                        <td bgcolor="#ffffff" align="left">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" bgcolor="#7c72dc" style="border-radius: 3px;">
                                                    <a href={{ $resetUrl }} target="_blank"
                                                        style="font-size: 20px; color: #e1e6f1; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #7c72dc; display: inline-block;">Reset
                                                        Password</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>

</html>
