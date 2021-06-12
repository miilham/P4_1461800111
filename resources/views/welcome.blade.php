<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{url('/export')}}">Export</a>
    <table>
        <thead>
            <tr>
                <td>No.</td>
                <td>Nama Buku</td>
                <td>Jenis Buku</td>
                <td>Tahun Terbit</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($rakbuku as $data)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$data->buku->judul}}</td>
                    <td>{{$data->jenisbuku->jenis}}</td>
                    <td>{{$data->buku->tahun_terbit}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
