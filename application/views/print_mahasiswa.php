<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #table{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse : caollapse;
            widht : 100%; 
        }

        #table td, #table th{
            border : 1px solid #ddd;
            padding : 8px;
        } 

        #table tr:nth-child(even){background-color : #f2f2f2;}

        #table tr:hover {background-color : #ddd;}

        #table th{
            padding-top : 10px;
            padding-bottom : 10px;
            text-align : left;
            background : #4caf50;
            color : white;
        }
    </style>
</head>

<body>
    <table id="table">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Tanggal Lahir</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Foto</th>
        </tr>
        <?php
        $no =1;
        foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $mhs->nama ?></td>
            <td><?php echo $mhs->nim ?></td>
            <td><?php echo $mhs->tgl_lahir ?></td>
            <td><?php echo $mhs->jurusan ?></td>
            <td><?php echo $mhs->alamat ?></td>
            <td><?php echo $mhs->email ?></td>
            <td><?php echo $mhs->no_telp ?></td>
            <td><?php echo $mhs->foto ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
    window.print();
    </script>
</body>

</html>