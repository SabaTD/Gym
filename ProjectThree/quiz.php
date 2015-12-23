<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta chaser="UTF-8">
	<title>Form</title>
</head>
<body>

	<?php  
	/* თუ sucess ცვლადი არსებობს და იგი 1-ის ტოლია მაშინ დაიბეჭდება "შეკითხვა წარმატებით დაემატა"  მაგრამ ეს მაშინაც მოხდება თუ რომელიმე ველი არ შევავსეთ ან საერთოდ არაფერი არ ჩავწერეთ, ანუ შეგვეძლო უბრალოდ Button-ზე დაჭერითად გამოგვეტანა იგივე ტექსტი -_- */
	if (isset($_SESSION['success']) && $_SESSION['success'] == 1) : ?>  
	<p> შეკითხვა წარმატებით დაემატა</p> 
	<?php 
		$_SESSION['success'] = 0;  /*რეფრეშის შემდეგ "შეკითხვა წარმატებით დაემატა" გაქრება; */
		endif;
	?>	

	<form action="add.php" method="POST">
		<p><input type="text" name="title" placeholder="შეკითხვა"></p>
		<?php for ($i=1; $i<= 4 ;  $i++): ?>
			<p> 
				<input type="text" name="options[]" placeholder="სავარაუდო პასუხი <?=($i+1)?>">
				<input type="radio" name="correct_answer" value=" <?=$i?>">
			</p>
		<?php endfor; ?>

		<button type="submit">დამატება</button>

	</form>
</body>
</html>

