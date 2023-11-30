<?php
    require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Три поросёнка</title>

	<link rel="stylesheet" href="css/main.css">

</head>
<body>
	<?php
        $characters = mysqli_query($connect, "SELECT * FROM `Characters`");
        $characters = mysqli_fetch_all($characters); 

        $houses = mysqli_query($connect, "SELECT * FROM `Houses`");
        $houses = mysqli_fetch_all($houses);

        $actions = mysqli_query($connect, "SELECT * FROM `Actions`");
        $actions = mysqli_fetch_all($actions);

        $characteristic = mysqli_query($connect, "SELECT * FROM `Characteristic`");
        $characteristic = mysqli_fetch_all($characteristic);

        $abouthouse = mysqli_query($connect, "SELECT * FROM `About_house`");
        $abouthouse = mysqli_fetch_all($abouthouse);
    ?>

	<div class="wrapper">
		<div class="content">

			<header class="hero-section">
				<img data-speed=".6" class="hero" src="img/pigs.png" alt="Alt" >
				<div class="container">
					<div data-speed=".75" class="menu-header">
						<a href="redactor.php"><h1 class="menu">Редактор</h1></a>
					</div>

					<div data-speed=".75" class="main-header">
						<h1 class="main-title">Три поросёнка</h1>
					</div>
				</div>
			</header>
		
			<div class="portfolio">
				<div class="container">
					<main class="gallery">

						<div data-speed="1.1" class="gallery__right">
		
							<div class="text-block gallery__item">
								<h2 class="text-block__h"><?= $actions[3][1]?></h2>
								<p class="text-block__p">Три брата. Все одинакового роста, кругленькие, розовые, с одинаковыми веселыми хвостиками. Даже имена у них были похожи. Звали поросят: <?= $characters[0][1]?>, <?= $characters[2][1]?> и <?= $characters[1][1]?>. Все лето поросята кувыркались в зеленой траве, грелись на солнышке, нежились в лужах. Но вот наступила осень.</p>
							</div>
		
							<img class="gallery__item" src="<?= $characters[1][2]?>" alt="Alt">
		
						</div>
						
	
						<div data-speed=".9" class="gallery__left">
		

							<img class="gallery__item" src="<?= $characters[0][2]?>" alt="Alt">
		
							<div class="text-block gallery__item">
								<h2 class="text-block__h">- Пора нам подумать о зиме,</h2>
								<p class="text-block__p">- сказал как-то <?= $characters[1][1]?> своим братьям, проснувшись рано утром. - Я весь дрожу от холода. Давайте построим дом и будем зимовать вместе под одной теплой крышей.

									Но его братья не хотели браться за работу.
									
									- Успеется! До зимы еще далеко. Мы еще погуляем, - сказал <?= $characters[0][1]?> и перекувырнулся через голову.
									
									- Когда нужно будет, я сам построю себе дом, - сказал <?= $characters[2][1]?> и лег в лужу.
									
									- Я тоже, - добавил <?= $characters[0][1]?>.
									
									- Ну, как хотите. Тогда я буду один строить себе дом, - сказал <?= $characters[1][1]?>.
									
									<?= $characters[0][1]?> и <?= $characters[2][1]?> не торопились. <?= $actions[4][1]?></p>
							</div>


						</div>


					</main>
				</div>
			</div>

		</div>
	</div>

	<script src="libs/gsap/gsap.min.js" defer></script>
	<script src="libs/gsap/ScrollTrigger.min.js" defer></script>
	<script src="libs/gsap/ScrollSmoother.min.js" defer></script>
	<script src="js/app.js" defer></script>
</body>
</html>