<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Email Verification with OTP</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #dacece;">

    <!-- Container -->
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600"
        style="border-collapse: collapse; background-color: #9a1414; margin-top: 20px; padding: 20px;">
        <!-- Header -->
        <tr>
            <td align="center" style="padding: 20px 0;">
                <h1 style="color: #333333; margin: 0;">
                    <img src="https://djassa.net/assets/images/logo.png" alt="">
                </h1>
                <p style="margin: 0; color: hsl(0, 6%, 90%);">Vendez, Achetez tout ce qui vous fait envie !</p>
            </td>
        </tr>

        <!-- Body -->
        <tr>
            <td style="padding: 20px;">
                <h2 style="color: #f4f0f0; text-align: center;">Bienvenu {{ $get_user_name}}</h2>
                <p style="color: #fafafa; line-height: 1.5; text-align: center;">
                    Merci de faire partie de notre communauté. </p>

                <h3 style="color: #f4f0f0; text-align: center;">Votre OTP</h3>
                <div style="color: white; padding: 15px 10px; font-size: 30px; border-radius: 5px; text-align: center;">
                    {{
                    $validToken}}
                </div>


            </td>
        </tr>
    </table>

</body>

</html>
