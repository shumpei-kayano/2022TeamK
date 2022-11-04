<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    gennsinnsitai
    <form method="GET" action="/postingScreen">
        @csrf
        <input type="submit" name="postingScreen" value="掲載中案件">
        </form>

    <form method="GET" action="/approvalIndex">
        @csrf
        <input type="submit" name="approvalIndex" value="承認待ち">
        </form>
    
    <form method="GET" action="/listingConfirmation">
        @csrf
        <input type="submit" name="listingConfirmation" value="過去契約一覧">
        </form>
        
    <form method="GET" action="/create">
        @csrf
        <input type="submit" name="matterCreate" value="案件掲載">
        </form>
</body>
</html>