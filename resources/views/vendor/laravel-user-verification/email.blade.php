<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style type="text/css" rel="stylesheet" media="all">
            /* Media Queries */
            @media  only screen and (max-width: 500px) {
	            .button {
    		        width: 100% !important;
            	}
            }
        </style>
    </head>

    <body style="margin: 0; padding: 0; width: 100%; background-color: #F2F4F6;">
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td style="width: 100%; margin: 0; padding: 0; background-color: #F2F4F6;" align="center">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <!-- Logo -->
                        <tr>
                            <td style="padding: 25px 0; text-align: center;">
                                <a style="font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #2F3133; text-decoration: none; text-shadow: 0 1px 0 white;" href="http://callcenter.dev999.com" target="_blank">
                                    Welcome to Victusian Website!
                                </a>
                            </td>
                        </tr>
                        <!-- Email Body -->
                        <tr>
                            <td style="width: 100%; margin: 0; padding: 0; border-top: 1px solid #EDEFF2; border-bottom: 1px solid #EDEFF2; background-color: #FFF;" width="100%">
                                <table style="width: auto; max-width: 570px; margin: 0 auto; padding: 0;" align="center" width="570" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; padding: 35px;">
                                            <!-- Greeting -->
                                            <h1 style="margin-top: 0; color: #2F3133; font-size: 19px; font-weight: bold; text-align: left;">
                                                Hi {{$user->name}}!
                                            </h1>
                                            <!-- Intro -->
                                            <p style="margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em;">
                                            	Thanks for registeration on our Victusian website. We need a little more information to complete your
                                                registration, including confirmation of your email address. Please click this to verify your email address.
                                            </p>
                                            <!-- Action Button -->
                                            <table style="width: 100%; margin: 30px auto; padding: 0; text-align: center;" align="center" width="100%" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td align="center">
                                                        <a href="{{ $link = route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) }}" style="font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px; background-color: #3869D4; border-radius: 3px; color: #ffffff; font-size: 15px; line-height: 25px; text-align: center; text-decoration: none; -webkit-text-size-adjust: none;" class="button" target="_blank">
                                                        	Verify Email Address
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>

                                            <!-- Salutation -->
                                            <p style="margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em;">
                                                Best,<br>Amit Jairath
                                            </p>
                                            
                                            <!-- Sub Copy -->
                                            <table style="margin-top: 25px; padding-top: 25px; border-top: 1px solid #EDEFF2;">
                                                <tr>
                                                    <td style="font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">
                                                        <p style="margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em;">
                                                            If you’re having trouble clicking the &quot;Verify Email Address&quot; button,
                                                            copy and paste the URL below into your web browser:
                                                        </p>
                                                        <p style="margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em;">
                                                            <a style="color: #3869D4;" href="{{ $link = route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) }}" target="_blank">
                                                            {{ $link = route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) }}
                                                            </a>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- Footer -->
                        <tr>
                            <td>
                                <table style="width: auto; max-width: 570px; margin: 0 auto; padding: 0; text-align: center;" align="center" width="570" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; color: #AEAEAE; padding: 35px; text-align: center;">
                                            <p style="margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em;">
                                                © 2017
                                                <a style="color: #3869D4;" href="http://dev.victusnetwork.com" target="_blank">Victusian</a>.
                                                All rights reserved.
                                            </p>
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