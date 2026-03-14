<?php
include "koneksi.php";

$query = mysqli_query($conn,"SELECT * FROM menu");

if(!$query){
    die("Query Error : ".mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Kantin Online</title>

<style>

body{
font-family:Arial, sans-serif;
background:#f4f4f4;
margin:0;
}

.header{
background:#ff5722;
color:white;
padding:15px;
text-align:center;
font-size:20px;
font-weight:bold;
}

.container{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:15px;
padding:20px;
}

.card{
background:white;
border-radius:8px;
overflow:hidden;
box-shadow:0 2px 6px rgba(0,0,0,0.2);
transition:0.2s;
}

.card:hover{
transform:scale(1.03);
}

.card img{
width:100%;
height:150px;
object-fit:cover;
}

.card-body{
padding:10px;
text-align:center;
}

.nama{
font-weight:bold;
font-size:16px;
}

.harga{
color:#ff5722;
margin-top:5px;
font-weight:bold;
}

button{
background:#ff5722;
border:none;
color:white;
padding:7px 12px;
margin-top:10px;
cursor:pointer;
border-radius:4px;
}

button:hover{
background:#e64a19;
}

.kosong{
text-align:center;
grid-column:1/-1;
font-size:18px;
color:#777;
}

</style>

</head>

<body>

<div class="header">
Kantin Online
</div>

<div class="container">

<?php 
if(mysqli_num_rows($query) > 0){

while($data=mysqli_fetch_assoc($query)){ 
?>

<div class="card">

<img src="upload/<?php echo $data['foto']; ?>" alt="<?php echo $data['nama_menu']; ?>">

<div class="card-body">

<div class="nama">
<?php echo $data['nama_menu']; ?>
</div>

<div class="harga">
Rp <?php echo number_format($data['harga'],0,",","."); ?>
</div>

<a href="detail.php?id=<?php echo $data['id_menu']; ?>">
<button>Lihat Detail</button>
</a>

</div>

</div>

<?php 
}

}else{
?>

<div class="kosong">
Menu belum tersedia
</div>

<?php } ?>

</div>

</body>
</html>