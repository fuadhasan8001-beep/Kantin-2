<?php
include "koneksi.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($conn,"SELECT * FROM menu WHERE id_menu = '$id'");
    
    if(!$query){
        die("Query Error : ".mysqli_error($conn));
    }
    
    $data = mysqli_fetch_assoc($query);
    
    if(!$data){
        echo "Menu tidak ditemukan";
        exit;
    }
} else {
    echo "ID menu tidak diberikan";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Detail Menu - <?php echo $data['nama_menu']; ?></title>
<style>
body{
font-family:Arial, sans-serif;
background:#f4f4f4;
margin:0;
padding:20px;
}

.header{
background:#ff5722;
color:white;
padding:15px;
text-align:center;
font-size:20px;
font-weight:bold;
margin-bottom:20px;
}

.detail-container{
background:white;
border-radius:8px;
overflow:hidden;
box-shadow:0 2px 6px rgba(0,0,0,0.2);
max-width:600px;
margin:0 auto;
padding:20px;
}

.detail-img{
width:100%;
height:300px;
object-fit:cover;
border-radius:8px;
margin-bottom:20px;
}

.nama{
font-weight:bold;
font-size:24px;
margin-bottom:10px;
}

.harga{
color:#ff5722;
font-size:20px;
font-weight:bold;
margin-bottom:15px;
}

.deskripsi{
line-height:1.6;
margin-bottom:20px;
}

.back-btn{
background:#ff5722;
border:none;
color:white;
padding:10px 20px;
text-decoration:none;
border-radius:4px;
display:inline-block;
}

.back-btn:hover{
background:#e64a19;
}
</style>
</head>
<body>

<div class="header">
Detail Menu
</div>

<div class="detail-container">
<img src="<?php echo $data['foto']; ?>" alt="<?php echo $data['nama_menu']; ?>" class="detail-img">

<div class="nama">
<?php echo $data['nama_menu']; ?>
</div>

<div class="harga">
Rp <?php echo number_format($data['harga'],0,",","."); ?>
</div>

<div class="deskripsi">
<?php echo $data['deskripsi']; ?>
</div>

<a href="index.php" class="back-btn">Kembali ke Menu</a>
</div>

</body>
</html>