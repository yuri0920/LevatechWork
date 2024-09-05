<x-app-layout>
    <h1>設定</h1>
    <form action='/settings' method='POST' enctype='multipart/form-data'>
        @csrf
        <div class='selfname'>
            <h2>あなたの名前</h2>
            <input type='text' name='setting[selfname]' placheholder='自分の名前' value='{{ old('settig.selfname') }}'/>
            <p class='selfname_error' style='color:red'>{{ $errors->first('setting.selfname') }}</p>
        </div>
        
        <div class='selfimage'>
            <input type='file' name='selfimage'>
        </div>
        
        <div class='partnername'>
            <h2>相談相手の名前</h2>
            <input type='text' name='setting[partnername]' placheholder='相手の名前' value='{{ old('setting.partnername') }}'/>
            <p class='partnername_error' style='color:red'>{{ $errors->first('setting.partnername') }}</p>
        </div>
        
        <div class='partnerimage'>
            <input type='file' name='partnerimage'>
        </div>

        <input type='submit' value='保存'/>
    </form>
    <div class='back'>
        <a href='/'>戻る</a>
    </div>
</x-app-layout>