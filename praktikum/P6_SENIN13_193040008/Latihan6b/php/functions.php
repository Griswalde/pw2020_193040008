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
  $result = mysqli_query($conn, "$sql");

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
