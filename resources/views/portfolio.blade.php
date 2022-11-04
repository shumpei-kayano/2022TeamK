<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form method="GET" action="portfolioAdd">
        @csrf
        <input type="submit" name="portfolioAdd" value="ポートフォリオ作成">
    </form>

    <form method="GET" action="update">
        @csrf
        <input type="submit" name="portfolioUpdate" value="ポートフォリオ編集">
    </form>
</body>
</html>