<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/confirmation.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/share.css') }}">
    <title>内容確認</title>
</head>
<body>
    <form action="/send">
        @csrf
        <div class="container frame">
            <h1>内容確認</h1>
            <table>
                <tr>
                    <th><h2 class="item-title">お名前</h2></th>
                    {{-- <td>{{ $data->fullname }}</td> --}}
                <p>{{ $data->lastname }}{{ $data->firstname }}</p>
                    {{-- <td>{{ $data->firstname }}</td> --}}
                    {{-- <input type="hidden" name="lastname" value="{{ $data->lastname }}"> --}}
                    {{-- <input type="hidden" name="firstname" value="{{ $data->firstname }}"> --}}
                </tr>
                <tr>
                    <th><h2 class="item-title">性別</h2></th>
                    {{-- <td>男</td> --}}
                    <td>{{ $data->gender }}</td>
                    <input type="hidden" name="gender" value="{{ $data->gender }}">
                </tr>
                <tr>
                    <th><h2 class="item-title">メールアドレス</h2></th>
                    <td>{{ $data->email }}</td>
                    <input type="hidden" name="email" value="{{ $data->email }}">
                </tr>
                <tr>
                    <th><h2 class="item-title">郵便番号</h2></th>
                    <td>{{ $data->postcode }}</td>
                    <input type="hidden" name="postcode" value="{{ $data->postcode }}">
                </tr>
                <tr>
                    <th><h2 class="item-title">住所</h2></th>
                    <td>{{ $data->address }}</td>
                    <input type="hidden" name="address" value="{{ $data->address }}">
                </tr>
                <tr>
                    <th><h2 class="item-title">建物名</h2></th>
                    <td>{{ $data->building_name}}</td>
                    <input type="hidden" name="building_name" value="{{ $data->building_name }}">
                </tr>
                <tr>
                    <th><h2 class="item-title">ご意見</h2></th>
                    <td>{{ $data->opinion }}</td>
                    <input type="hidden" name="opinion" value="{{ $data->opinion }}">
                </tr>
            </table>
            {{-- <form action="/confirmation" method="POST">
                @csrf
                <button>送信</button>
            </form> --}}
            {{-- <form action="/" method="POST">
                @csrf
                <a href="">修正する</a>
            </form> --}}
        </div>
    </form>
</body>
</html>
