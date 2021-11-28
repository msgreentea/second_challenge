<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/inquiry.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/share.css') }}">
    <title>お問い合わせ</title>
</head>

<body>
    <div class="container">
    <h1>お問い合わせ</h1>
        <form class="frame" action="/confirmation" method="POST">
            @csrf
            <table>
                <tr>
                    <th><label for=""><h2>お名前<span>※</span></h2></label></th>
                    <td class="nextto">
                        {{-- @error('lastname') --}}
                        <div class="right with_example">
                            <input class="textbox-name" type="text" name="lastname" value="{{ old('lastname') }}">
                            <p class="example">例）山田</p>
                            @if ($errors->has('lastname'))
                            <p class="ErrorMessage">{{ $errors->first('lastname') }}</p>
                            @endif
                        </div>
                        {{-- @enderror --}}
                        {{-- @error('firstname') --}}
                        <div class="right with_example">
                            <input class="textbox-name" type="text" name="firstname" value="{{ old('firstname') }}">
                            <p class="example">例）太郎</p>
                            @if ($errors->has('firstname'))
                            <p class="ErrorMessage">{{ $errors->first('firstname') }}</p>
                            @endif
                        </div>
                        {{-- @enderror --}}
                    </td>
                </tr>
                <tr>
                    <th><h2>性別<span>※</span></h2></th>
                    {{-- @error('gender') --}}
                    <td class="nextto">
                        <input class="radio" type="radio" name="gender" value="男性" checked="checked">男性
                        <input class="radio" type="radio" name="gender" value="女性">女性
                    </td>
                    {{-- @enderror --}}
                </tr>
                <tr>
                    <th><h2>メールアドレス<span>※</span></h2></th>
                    {{-- @error('email') --}}
                    <td>
                        <div class="right with_example">
                            <input type="text" name="email" value="{{ old('email') }}">
                            <p class="example">例）test@example.com</p>
                            @if ($errors->has('email'))
                            <p class="ErrorMessage">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </td>
                    {{-- @enderror --}}
                </tr>
                <tr>
                    <th><h2>郵便番号<span>※</span></h2></th>
                    {{-- @error('postcode') --}}
                    <td class="nextto right">
                        &#12306;
                        <div class="with_example">
                            <input type="text" name="postcode" value="{{ old('postcode') }}">
                            <p class="example">例）123-4567</p>
                            @if ($errors->has('postcode'))
                            <p class="ErrorMessage">{{ $errors->first('postcode') }}</p>
                            @endif
                        </div>
                    </td>
                    {{-- @enderror --}}
                </tr>
                <tr>
                    <th><h2>住所<span>※</span></h2></th>
                    {{-- @error('address') --}}
                    <td>
                        <div class="right with_example">
                            <input type="text" name="address" value={{ old('address') }}>
                            <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
                            @if ($errors->has('address'))
                            <p class="ErrorMessage">{{ $errors->first('address') }}</p>
                            @endif
                        </div>
                    </td>
                    {{-- @enderror --}}
                </tr>
                <tr>
                    <th><h2>建物名</h2></th>
                    <td>
                        <div class="right with_example">
                            <input type="text" name="building_name" value="{{ old('building_name') }}">
                            <p class="example">例）千駄ヶ谷マンション101</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th><h2>ご意見<span>※</span></h2></th>
                    {{-- @error('opinion') --}}
                    <td>
                        <div class="right">
                            <textarea name="opinion" id="" cols="30" rows="10">{{ old('opinion') }}</textarea>
                            @if ($errors->has('opinion'))
                            <p class="ErrorMessage">{{ $errors->first('opinion') }}</p>
                            @endif
                        </div>
                    </td>
                    {{-- @enderror --}}
                </tr>
            </table>
            <button>確認</button>

           {{-- <div class="item">
                <label for=""><h2>お名前<span>※</span></h2></label>
                <div class="nextto">
                    <div class="right with_example">
                        <input class="textbox-name" type="text" name="lastname" value="{{ old('lastname') }}" method="POST">
                        <p class="example">例）山田</p>
                    </div>
                    <div class="right with_example">
                        <input class="textbox-name" type="text" name="firstname" value="{{ old('firstname') }}" method="POST">
                        <p class="example">例）太郎</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <label for=""><h2>性別<span>※</span></h2></label>
                <td class="nextto">
                    <input class="radio" type="radio" name="gender" value="男性" checked="checked">男性
                    <input class="radio" type="radio" name="gender" value="女性">女性
                </td>
            </div> --}}

        </form>
    </div>
</body>

</html>
