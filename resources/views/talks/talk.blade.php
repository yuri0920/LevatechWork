<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>chat</title>
        <!--Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form action="/talks" method="POST">
            @csrf
            <div class="message">
                <textarea name="talk[contents]" placeholder="メッセージを入力してください。"></textarea>
            </div>
            <input type="submit" value="送信"/>
        </form>
    </body>
</html>