<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: aqua;
            margin-top: 60px;
        }

        form {
            margin-top: 20px;
            margin-left: 35%;
        }

        .box input {
            margin-left: 50px;
            margin-top: 30px;
        }
        textarea{
            margin-left: 50px;
            margin-top: 30px;
        }

        .button input {
            margin-top: 30px;
            margin-left: 80px;
            background-color: brown;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            cursor: pointer;
            mar
        }
    </style>
</head>

<body>
    <div>
        <H1 style="text-align: center;">Send an Email in Laravel</H1>
        <form name="form1" method="get" action="/sendbasicemail">
            <div class="box">
                Enter Reciver Name <input type="text" name="name" required>
                <br>
                Enter Reciver Email <input type="email" name="email" required style="margin-left: 53px;">
                <br>
                Enter Your Subject <input type="text" name="subject" required style="margin-left: 58px;">
                <br>
                Enter Your Message <textarea type="text" name="message" required style="margin-left: 48px;"></textarea>
                <br>
            </div>
            <div class="button">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset" style="margin-left: 50px;">
            </div>

        </form>
    </div>
</body>

</html>