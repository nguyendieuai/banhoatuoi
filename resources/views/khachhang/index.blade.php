<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tbody>
        @foreach($khachhang as $khachhang)
            <tr>
                <td>{{$khachhang->id}}</td>
                <td>{{$khachhang->diachi}}</td>
                <td>{{$khachhang->sodienthoai}}</td>
                <td>{{$khachhang->email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
   
</body>