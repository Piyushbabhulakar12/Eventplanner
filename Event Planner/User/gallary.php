<?php

session_start();



if ($_SESSION['email'] == true) 
{
	 $_SESSION['email'];
}
else
{
	header("location:logout.php");
}


?>



<!DOCTYPE html>
<html>
<head>
	
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<title>All Venues</title>
</head>
<body>


<?php include 'header.php'; ?>













<div class="container-fluid mt-4">
	<div class="row">
		<div class="col-xl-2 col-md-4 col-sm-6 col-sm-6 col-6 mt-3">
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1425421598808-4a22ce59cc97?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
			<img src="https://images.unsplash.com/photo-1425421598808-4a22ce59cc97?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1532592623542-1666cfeb61dc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80">
			<img src="https://images.unsplash.com/photo-1532592623542-1666cfeb61dc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1488036106564-87ecb155bb15?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=375&q=80">
			<img src="https://images.unsplash.com/photo-1488036106564-87ecb155bb15?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=375&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1576424298745-7467a0aa532b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80">
			<img src="https://images.unsplash.com/photo-1576424298745-7467a0aa532b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" style="width: 100%; border-radius: 15px;"></a>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-6 col-6 mt-3">
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1530023367847-a683933f4172?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80">
			<img src="https://images.unsplash.com/photo-1530023367847-a683933f4172?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
			<img src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1507878866276-a947ef722fee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=751&q=80">
			<img src="https://images.unsplash.com/photo-1507878866276-a947ef722fee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=751&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1523302750488-e28820e5ee90?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80">
			<img src="https://images.unsplash.com/photo-1523302750488-e28820e5ee90?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1598520060839-68396450ef03?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=358&q=80">
			<img src="https://images.unsplash.com/photo-1598520060839-68396450ef03?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=358&q=80" style="width: 100%; border-radius: 15px;"></a>

		</div>
		<div class="col-xl-2 col-md-4 col-sm-6 col-6 mt-3">
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1532592623542-1666cfeb61dc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80">
			<img src="https://images.unsplash.com/photo-1532592623542-1666cfeb61dc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1573055592760-a1427683e07e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=333&q=80">
			<img src="https://images.unsplash.com/photo-1573055592760-a1427683e07e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=333&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80">
			<img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
			<img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/flagged/photo-1563551509-8db9076668cc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80">
			<img src="https://images.unsplash.com/flagged/photo-1563551509-8db9076668cc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80" style="width: 100%; border-radius: 15px;"></a>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-6 col-6 mt-3">
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1513258728326-30cde8cf1071?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=394&q=80">
			<img src="https://images.unsplash.com/photo-1513258728326-30cde8cf1071?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=394&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1564346793883-ca7b6f9044d6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=401&q=80">
			<img src="https://images.unsplash.com/photo-1564346793883-ca7b6f9044d6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=401&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=667&q=80">
			<img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=667&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=667&q=80">
			<img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=667&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1564736676781-d0f57b29f67a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
			<img src="https://images.unsplash.com/photo-1564736676781-d0f57b29f67a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" style="width: 100%; border-radius: 15px;"></a>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-6 col-6 mt-3">
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1502208327471-d5dde4d78995?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80">
			<img src="https://images.unsplash.com/photo-1502208327471-d5dde4d78995?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1563545436912-50a3fab849f9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=349&q=80">
			<img src="https://images.unsplash.com/photo-1563545436912-50a3fab849f9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=349&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1563629986-97c92e385f66?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=350&q=80">
			<img src="https://images.unsplash.com/photo-1563629986-97c92e385f66?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=350&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1520600661691-801f48869ee4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80">
			<img src="https://images.unsplash.com/photo-1520600661691-801f48869ee4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href=https://images.unsplash.com/photo-1535276811207-1bcae679870e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80">
			<img src="https://images.unsplash.com/photo-1535276811207-1bcae679870e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" style="width: 100%; border-radius: 15px;"></a>
		</div>
		<div class="col-xl-2 col-md-4 col-sm-6 col-6 mt-3">
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1533219057257-4bb9ed5d2cc6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80">
			<img src="https://images.unsplash.com/photo-1533219057257-4bb9ed5d2cc6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1468359601543-843bfaef291a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=753&q=80">
			<img src="https://images.unsplash.com/photo-1468359601543-843bfaef291a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=753&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1528916138893-06acfc566dea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=281&q=80">
			<img src="https://images.unsplash.com/photo-1528916138893-06acfc566dea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=281&q=80" style="width: 100%; border-radius: 15px;"></a>
			<br><br>
			<a data-fancybox="gallery" href="https://images.unsplash.com/photo-1520033222127-8f6d08b425f6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=932&q=80">
			<img src="https://images.unsplash.com/photo-1520033222127-8f6d08b425f6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=932&q=80" style="width: 100%; border-radius: 15px;"></a>
		</div>
	</div>
</div>







</body>
</html>