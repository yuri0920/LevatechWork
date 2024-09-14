<x-app-layout>
        <h1>{{$setting->selfname}}と{{$setting->partnername}}のトークルーム</h1>
        
            <div class='talk'>
                @foreach ($talks as $talk)
                    <style>
                        .right {
                            display: flex;
                            /*justify-content: flex-end; /* 右寄せ */
                            text-align:right;
                            margin: 0 0 0 auto;
                            width: fit-content;
                        }
                        .box {
                            padding: 10px;
                            background-color: white;
                            margin: 5px;
                        }
                        .left {
                            display: flex;
                            /*margin: 0 auto 0 0;*/
                            width: fit-content;
                            /*justify-content: flex-start;*/
                        }
                        
                        .reversefulbox {
                            display: flex;
                            
                        }
                    </style>
                    <div class='talk'>
                        <div class='left'>
                            @if($talk->role===0)
                                <div class='box'>
                                    <img src="{{ $setting->selfimage_url}}" alt="画像が読み込めません。" width="30" height="30">
                                </div>
                                <div class='box'>
                                    <p class="speaker">{{ $setting->selfname }}</p>
                                </div>
                                <p class="content">{{ $talk->contents }}</p>
                            @endif
                        </div>    
                        <div class='right'>
                            @if($talk->role===1)
                                <div class='box'>
                                    <img src="{{ $setting->partnerimage_url}}" alt="画像が読み込めません。" width="30" height="30">
                                </div>
                                <div class='box'>
                                    <p class="speaker">{{ $setting->partnername }}</p>
                                </div>
                                <p class="content">{{ $talk->contents }}</p>
                            @endif
                        </div>
                        
                    </div>
                @endforeach
            </div>
            
            <button id="toggleButton">位置を逆転する</button>
            <script>
                const roll = @json($setting->role);
            </script>

        <form action="/talk/{{ $setting->id }}" method="POST">
            @csrf    
            <div class="role">
                <select name="talk[role]">
                    <option value="0">{{ $setting->selfname }}</option>
                    <option value="1">{{ $setting->partnername }}</option>
                </select>
            </div>
            <div class="message">
                <textarea name="talk[contents]" placeholder={{ $setting->selfname }}></textarea>
            </div>
            <input type="submit" value="送信"/>
        </form>
        
        
</x-app-layout>