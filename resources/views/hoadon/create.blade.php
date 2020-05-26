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
        <label>{{ trans('hoadon.label.gia')}}</label></br>
        <input name="gia"></br>

        @if ($errors->has('gia'))
        <span class="help-block">
            <strong>{{ $errors->first('gia')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('hoadon.label.ngaylaphoadon')}}</label></br>
        <input name="ngaylaphoadon"></br>

        @if ($errors->has('ngaylaphoadon'))
        <span class="help-block">
            <strong>{{ $errors->first('ngaylaphoadon')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('hoadon.label.diachigiaohang')}}</label></br>
        <input name="diachigiaohnag"></br>

        @if ($errors->has('diachigiaohang'))
        <span class="help-block">
            <strong>{{ $errors->first('diachigiaohang')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('hoadon.label.ghichu')}}</label></br>
        <input name="ghichu"></br>

        @if ($errors->has('ghichu'))
        <span class="help-block">
            <strong>{{ $errors->first('ghichu')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('hoadon.label.khachhang_id')}}</label></br>
        <input name="khachhang_id"></br>

        @if ($errors->has('khachhang_id'))
        <span class="help-block">
            <strong>{{ $errors->first('khachhang_id')}}</strong></br>
        </span>
        @endif

        <label>{{ trans('hoadon.label.nhanvien_id')}}</label></br>
        <input name="nhanvieng_id"></br>

        @if ($errors->has('nhanvien_id'))
        <span class="help-block">
            <strong>{{ $errors->first('nhanvien_id')}}</strong></br>
        </span>
        @endif

        <button>Submit</button>
    </form>

</body>

</html>