<x-app-layout>
    <h1>Blog Name</h1>
    <form action='/settings' method='POST'>
        @csrf
        <div class='selfname'>
            <h2>Title</h2>
            <input type='text' name='setting[selfname]' placheholder='自分の名前' value='{{ old('settig.selfname') }}'/>
            <p class='selfname_error' style='color:red'>{{ $errors->first('setting.selfname') }}</p>
        </div>
        
        <div class='selfname'>
            <h2>Title</h2>
            <input type='text' name='setting[partnername]' placheholder='相手の名前' value='{{ old('setting.partnername') }}'/>
            <p class='partnername_error' style='color:red'>{{ $errors->first('setting.partnername') }}</p>
        </div>

        <input type='submit' value='保存'/>
    </form>
    <div class='back'>
        <a href='/'>戻る</a>
    </div>
</x-app-layout>