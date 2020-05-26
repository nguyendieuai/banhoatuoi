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
        @foreach($hoadon as $hoadon)
            <tr>
                <td> {{$hoadon->id}}</td>
                <td> {{$hoadon->gia}}</td>
                <td> {{$hoadon->ngaylaphoadon}}</td>
                <td> {{$hoadon->diachigiaohang}}</td>
                <td> {{$hoadon->ghichu}}</td>
                <td> {{$hoadon->khachhang_id}}</td>
                <td> {{$hoadon->nhanvien_id}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
   
</body>