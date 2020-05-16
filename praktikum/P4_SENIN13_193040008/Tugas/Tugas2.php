<?php 
$buku = [
    [
        "photo" => "ring.jpg",
        "judul buku" => "The Lord of the Rings",
        "penulis" => "J. R. R. Tolkien",
        "genre" => "Fantasy",
        "harga" => "Rp. 500.000"
    ],
    [
        "photo" => "got.jfif",
        "judul buku" => "A Game of Thrones",
        "penulis" => "George R.R. Martin",
        "genre" => "fanstasy,kingdom,",
        "harga" => "Rp.350.000"
    ],
    [
        "photo" => "hobit.jpg",
        "judul buku" => "The Hobbit",
        "penulis" => "J. R. R. Tolkien",
        "genre" => "fantasy",
        "harga" => "Rp.100.000"
    ],
    [
        "photo" => "it.jpg",
        "judul buku" => "It",
        "penulis" => "Stephen King",
        "genre" => "horor",
        "harga" => "Rp.280.000"
    ],
    [
        "photo" => "doctor.jpg",
        "judul buku" => "Doctor Sleep",
        "penulis" => "Stephen King",
        "genre" => "horor",
        "harga" => "Rp.700.000"
    
    ],
    [
        "photo" => "dilan.jpg",
        "judul buku" => "Dilan Dia Adalah Dilanku Tahun 1990 ",
        "penulis" => " Pidi Baiq",
        "genre" => "Romance",
        "harga" => "Rp.50.000"
    ],
    [
        "photo" => "jambu.jfif",
        "judul buku" => "Marmut Merah Jambu",
        "penulis" => "Raditya Dika",
        "genre" => "Comedy",
        "harga" => "Rp.200.000"
    ],
];
?>

<html>
    <head>
        <title>Tugas2_19304008</title>
    </head>
    <style>
        body {
            background-color: aqua;
        }
        table{
            background-color: darkgray;
            border : 1px solid black;
            text-align : center;
            font-size : 30px;
        }
    
        td{
            padding : 20px;
            
        }
        h3{
            text-align : center;
            font-size : 50px;
            color: white;
        }
        h5 a{
            text-decoration: none;
            color: white;
            font-size: 50px;
        }
    </style>
    <body>
        <h3>Buku</h3>
        <table border="1px">
            <tr>
                <th>Gambar</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Genre</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($buku as $b) { ?>
            <tr>
                <td><img src="../img/<?= $b['photo']; ?>"></td>
                <td><?= $b["judul buku"]; ?></td>
                <td><?= $b["penulis"]; ?></td>
                <td><?= $b["genre"]; ?></td>
                <td><?= $b["harga"]; ?></td>
            </tr>
            <?php } ?>
        </table>
		
		<h5 align="center"><a href="../../index.php">__Back__</a></h5>
    </body>
</html>
