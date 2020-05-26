<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('hoadon.store')}}">
        {{ csrf_field() }}
        <label>{{ trans('bill.label.diachi')}}</label></br>
        <input name="diachi"></br>

        @if ($errors->has('diachi'))
        <span class="help-block">
            <strong>{{ $errors->first('diachi')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('bill.label.sodienthoai')}}</label></br>
        <input name="sodienthoai"></br>

        @if ($errors->has('sodienthoai'))
        <span class="help-block">
            <strong>{{ $errors->first('sodienthoai')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('bill.label.email')}}</label></br>
        <input name="email"></br>

        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email')}}</strong></br>
        </span>
        @endif

        <button>Submit</button>
    </form>

</body>

</html>