<x-app-layout>
    <p>ルーム選択</p>
    <p><a href='/create'>新規ルーム作成</a></p>
    @foreach($settings as $setting)
        <a href="/talk/{{ $setting->id }}">{{$setting->selfname}}と{{$setting->partnername}}のトークルーム</a>
        <br>
    @endforeach
</x-app-layout>