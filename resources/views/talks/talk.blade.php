<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>chat</title>
        <!--Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>{{$setting->selfname}}と{{$setting->partnername}}のトークルーム</h1>
        <form action="/talk/{{ $setting->id }}" method="POST">
            <div class='talk'>
                @foreach ($talks as $talk)
                    <div class='comment'>
                        @if($talk->role === 0)
                            <div>
                                <img src="{{ $setting->selfimage_url}}" alt="画像が読み込めません。">
                            </div>
                            <p class="speaker">{{ $setting->selfname }}</p>
                        @else
                            <div>
                                <img src="{{ $setting->partnerimage_url}}" alt="画像が読み込めません。">
                            </div>
                            <p class="speaker">{{ $setting->partnername }}</p>
                        @endif
                        <p class="content">{{ $talk->contents }}</p>
                    </div>
                @endforeach
            </div>
            @csrf
            <div class="role">
                <select name="talk[role]">
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="message">
                <textarea name="talk[contents]" placeholder="メッセージを入力してください。"></textarea>
            </div>
            <input type="submit" value="送信"/>
        </form>
    </body>
</html>