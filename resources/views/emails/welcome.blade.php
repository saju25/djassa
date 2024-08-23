<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Email Verification with OTP</title>
</head>

<body>
    <div style="margin: auto;">
        <div style="width: 500px; text-align: center; border: black 1px solid;">
            <div style="background-color: #EDEADE;padding: 5px 5px;">
                <a href="https://djassa.net/"><img style="max-width: 300px;" src="https: //ibb.co/yfVLwHq
" alt=""></a>
                <p>Connecter l’Afrique pour libérer le talent</p>
            </div>
            <h1>Hi <span>{{ $get_user_name}}</span></h1>
           <div>
                <span style="background: red; color: white; padding: 15px 10px; font-size: 30px; border-radius: 5px;">{{
                    $validToken}}</span>
            </div>

        </div>
    </div>
</body>

</html>
