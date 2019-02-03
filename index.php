<?php require_once('admin/scripts/read.php');
if(isset($_GET['filter'])){
    $tbl = 'tbl_movies';
    $tbl_2 = 'tbl_genre';
    $tbl_3 = 'tbl_mov_genre';
    $col = 'movies_id';
    $col2 = 'genre_id';
    $col3 = 'genre_name';
    $filter = $_GET['filter'];
    $results = filterResults($tbl,$tbl_2, $tbl_3, $col, $col2, $col3, $filter);
}else{
    $results = getAll('tbl_movies');
} ?>


<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
    <title>Movie Review</title>
</head>
<body>
<?php include('templates/header.html'); ?>

<h1>This is the movie site</h1>

<a href="/admin/admin_login.php"> Login</a>
<div>
    <?php 
while($row = $results->fetch(PDO::FETCH_ASSOC)):?>


   <li><?php echo $row['movies_title'];?></li>
   <p><?php echo $row['movies_year'];?></p>
<img src="images/<?php echo $row['movies_cover'];?>"
alt="<?php echo $row['movies_title'];?>">
<p> <?php echo $row['movies_storyline'];?></p> 
<a href="details.php?id=<?php echo $row['movies_id'];?>">READ MORE</a>
<?php endwhile;?>
</div>

 <?php include('templates/footer.html');?>
</body>
</html>