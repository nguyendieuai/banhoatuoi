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
        @foreach($sanpham as $sanpham)
            <tr>
                <td> {{$sanpham->id}}</td>
                <td> {{$sanpham->ten}}</td>
                <td> {{$sanpham->anh}}</td>
                <td> {{$sanpham->gia}}</td>
                <td> {{$sanpham->soluong}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
   
</body>