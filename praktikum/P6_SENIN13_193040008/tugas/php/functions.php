<?php
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
  mysqli_select_db($conn, "pw_193040008") or die("Database salah!");

  return $conn;
}

function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $sql);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $gambar = htmlspecialchars($data['gambar']);
  $judul_buku = htmlspecialchars($data['judul_buku']);
  $genre = htmlspecialchars($data['genre']);
  $harga = htmlspecialchars($data['harga']);

  $query = "INSERT INTO buku
  VALUES  
  ('$id', '$gambar', '$judul_buku', '$genre', '$harga')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $gambar = htmlspecialchars($data['gambar']);
  $judul_buku = htmlspecialchars($data['judul_buku']);
  $genre = htmlspecialchars($data['genre']);
  $harga = htmlspecialchars($data['harga']);

  $query = "UPDATE buku SET
                id = '$id',
                gambar = '$gambar',
                judul_buku = '$judul_buku',
                genre = '$genre',
                harga = '$harga'
                WHERE id = '$id'
                ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
