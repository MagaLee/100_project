<?php 

	/*$insImg = [ 'images/cat_01.png', 'images/cat_02.png' , 'images/cat_03.png'];

	$mentionBox = [
		[
			'author'=>['profImg'=>'images/profile.jpg','name'=>'cka720'],
			'mainImg'=>'images/cat_01.png',
			'numberLikes'=>'1,283 likes',
			'commentBox'=>[
				['name'=>'cka720', 'comment'=>'얘는 진짜 클수록 멋있음...'],
				['name'=>'haru_bro', 'comment'=>'왠지 고급진 시나모니~~~'],
				['name'=>'tkgood2014', 'comment'=>'그래봐야 우리 생강이못따라와요!'],
				['name'=>'peniel0708', 'comment'=>'귀티가...... 와.........'],
				['name'=>'jhsoonie', 'comment'=>'테리우스 느낌~']
			],
			'time'=>'8 HOURS AGO'
		],
		[
			'author'=>['profImg'=>'images/profile.jpg','name'=>'cka720'],
			'mainImg'=>'images/cat_02.png',
			'numberLikes'=>'1,283 likes',
			'commentBox'=>[
				['name'=>'cka720', 'comment'=>'얘는 진짜 클수록 멋있음...'],
				['name'=>'haru_bro', 'comment'=>'왠지 고급진 시나모니~~~'],
				['name'=>'tkgood2014', 'comment'=>'그래봐야 우리 생강이못따라와요!'],
				['name'=>'peniel0708', 'comment'=>'귀티가...... 와.........'],
				['name'=>'jhsoonie', 'comment'=>'테리우스 느낌~']
			],
			'time'=>'8 HOURS AGO'
		],
		[
			'author'=>['profImg'=>'images/profile.jpg','name'=>'cka720'],
			'mainImg'=>'images/cat_03.png',
			'numberLikes'=>'1,283 likes',
			'commentBox'=>[
				['name'=>'cka720', 'comment'=>'얘는 진짜 클수록 멋있음...'],
				['name'=>'haru_bro', 'comment'=>'왠지 고급진 시나모니~~~'],
				['name'=>'tkgood2014', 'comment'=>'그래봐야 우리 생강이못따라와요!'],
				['name'=>'peniel0708', 'comment'=>'귀티가...... 와.........'],
				['name'=>'jhsoonie', 'comment'=>'테리우스 느낌~']
			],
			'time'=>'8 HOURS AGO'
		]
	]*/

	/*function get_mentions(){
		 return [ 'images/cat_01.png', 'images/cat_02.png' , 'images/cat_03.png'];

	}

	$insImg = get_mentions();*/


	function get_mentions(){
		return [
			[
				'author'=>['profImg'=>'images/profile.jpg','name'=>'cka720'],
				'mainImg'=>'images/cat_01.png',
				'numberLikes'=>'1,283 likes',
				'commentBox'=>[
					['name'=>'cka720', 'comment'=>'얘는 진짜 클수록 멋있음...'],
					['name'=>'haru_bro', 'comment'=>'왠지 고급진 시나모니~~~'],
					['name'=>'tkgood2014', 'comment'=>'그래봐야 우리 생강이못따라와요!'],
					['name'=>'peniel0708', 'comment'=>'귀티가...... 와.........'],
					['name'=>'jhsoonie', 'comment'=>'테리우스 느낌~']
				],
				'time'=>'8 HOURS AGO'
			],
			[
				'author'=>['profImg'=>'images/profile.jpg','name'=>'cka720'],
				'mainImg'=>'images/cat_02.png',
				'numberLikes'=>'1,283 likes',
				'commentBox'=>[
					['name'=>'cka720', 'comment'=>'얘는 진짜 클수록 멋있음...'],
					['name'=>'haru_bro', 'comment'=>'왠지 고급진 시나모니~~~'],
					['name'=>'tkgood2014', 'comment'=>'그래봐야 우리 생강이못따라와요!'],
					['name'=>'peniel0708', 'comment'=>'귀티가...... 와.........'],
					['name'=>'jhsoonie', 'comment'=>'테리우스 느낌~']
				],
				'time'=>'8 HOURS AGO'
			],
			[
				'author'=>['profImg'=>'images/profile.jpg','name'=>'cka720'],
				'mainImg'=>'images/cat_03.png',
				'numberLikes'=>'1,283 likes',
				'commentBox'=>[
					['name'=>'cka720', 'comment'=>'얘는 진짜 클수록 멋있음...'],
					['name'=>'haru_bro', 'comment'=>'왠지 고급진 시나모니~~~'],
					['name'=>'tkgood2014', 'comment'=>'그래봐야 우리 생강이못따라와요!'],
					['name'=>'peniel0708', 'comment'=>'귀티가...... 와.........'],
					['name'=>'jhsoonie', 'comment'=>'테리우스 느낌~']
				],
				'time'=>'8 HOURS AGO'
			]
		];
	}
	
	$insMenBox = get_mentions();
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title> Instagram </title>

	<!-- starts google font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- ends google -->

	<!-- staerts an external style sheet -->
	<link rel="stylesheet" href="css/02_main.css">
	<link rel="stylesheet" href="css/00_overlrap.css">
	<!-- ends an external style sheet -->

	<style>
		
	</style>

</head>

<body>
	<!-- starts a navigation -->
	<nav>
		<header>
			<div class="navWrapper">

				<!-- starts insta logos -->
				<div class="group_01">
					<img class="picLogo" src="images/sns_icons/instagram-glyph.svg" />
					<span class="borderRight"></span>
					<img class="nameLogo" src="images/sns_icons/instagram.svg" />
				</div>
				<!-- ends insta logos -->


				<!-- starts a search -->
				<input class="search" type="text" placeholder="Search" value />
				<!-- ends a serch -->


				<!-- starts insta icons -->
				<div class="group_02">
					<img class="icons" src="images/sns_icons/compass.svg" />
					<img class="icons" src="images/sns_icons/valentines-heart.svg" />
					<img class="icons" src="images/sns_icons/person.svg" />
				</div>
				<!-- ends insta icons -->

			</div>
		</header>
	</nav>
	<!-- ends a navigation -->



	<!-- starts after login pages -->
	<div class="wrap"> 
		<main class="contentWrapper">
			<section>

				<!-- starts an insta -->
				<!-- starts a php for looping a mentionbox -->
				<?php 

					for($i = 0; $i < count($insMenBox); $i++){ 

				?>
					<!-- <pre> --> 
						<?php /*print_r($insMenBox[$i]);*/ ?>
					<!-- </pre> -->
				<div class="picBox">

						
					<!-- starts a profile -->
					<div class="profile">
						<img class="proPic" src="<?php echo $insMenBox[$i]['author']['profImg'];?>" />
						<span class="name"> <?php echo $insMenBox[$i]['author']['name'];?> </span>
					</div>
					<!-- ends a profile -->


					<!-- starts a photo -->
					<img class="photo" src="<?php echo $insMenBox[$i]['mainImg'];?>" />
					<!-- ends a photo -->


					<!-- starts a comment box -->
					<div class="comtBox">
						<div class="comtIcons">
							<img class="comt_Icons redHeart" src="images/sns_icons/red-heart.svg" />
							<img class="comt_Icons comtBubble" src="images/sns_icons/comt-bubble.svg" />
						</div>
						<div class="textBox">
							<h1 class="likes"> <?php echo $insMenBox[$i]['numberLikes'];?> </h1>

							<p class="text_01">
								<strong> <?php echo $insMenBox[$i]['commentBox'][0]['name'];?> </strong> <?php echo $insMenBox[$i]['commentBox'][0]['comment'];?> <a class="more"> more </a>
							</p>
							
							<div class="text_02">Load more comments</div> 

							<div class="text_03">
								<?php 

									for($j = 0; $j < count($insMenBox[$i]['commentBox']); $j++){

								?>

								<p class="nickName"> <strong> <?php echo $insMenBox[$i]['commentBox'][$j]['name'];?> </strong> <?php echo $insMenBox[$i]['commentBox'][$j]['comment'];?> </p> 

								<?php 

									}

								?> 
								<div class="small">  <?php echo $insMenBox[$i]['time'];?> </div>
							</div> 
						</div>
					</div>
					<!-- ends a comment box -->


					<!-- starts a commect textarea -->
					<form class="textarea">
						<input class="textArea" type="text" placeholder="Add a comment..." value></input>
						<img class="ellipsis" src="images/sns_icons/ellipsis.svg">
					</form>
					<!-- ends a commect textarea -->


				</div>
				<?php 

					} 

				?>
				<!-- ends a php for looping a mentionbox -->
				<!-- ends an insta -->
				


			</section>
		</main>
	</div>
	<!-- ends after login pages-->
</body>

</html>