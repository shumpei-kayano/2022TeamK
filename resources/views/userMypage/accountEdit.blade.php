<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action='{{ route('user_update',) }}'method='post'>
        @csrf
    名前: <br><input type="text" name='name' value='{{ $form->name }}'><br>
    メールアドレス: <br><input type="text" name='email'value='{{ $form->email }}'><br>
    <input type="submit" value="作成">
    </form>
</body>
</html>