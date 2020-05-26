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
                <td> {{$hoadon->diachi}}</td>
                <td> {{$hoadon->sodienthoai}}</td>
                <td> {{$hoadon->email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
   
</body>