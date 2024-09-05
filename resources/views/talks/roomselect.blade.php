<x-app-layout>
    <p>ルーム選択</p>
    @foreach($settings as $setting)
        <a href="/talk/{{ $setting->id }}">{{$setting->selfname}}と{{$setting->partnername}}のトークルーム</a>
        <br>
    @endforeach
</x-app-layout>