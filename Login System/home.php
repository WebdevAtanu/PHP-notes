<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<style>
			body{
				background: url("images/home.jpeg");
				background-size: 100%;
				background-attachment: fixed;
				background-clip:;
				}
			.contain{
				height:100vh;
				padding: 1rem;
				backdrop-filter: brightness(0.2);
				color: white;
				}
			.col-8{
				overflow-y: scroll;
				height: 65vh;
				}
			.col-8::-webkit-scrollbar {
				width: 10px;
				background-color: #F5F5F5;
				}
			.col-8::-webkit-scrollbar-thumb {
				background-color: #0046ff;
				background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent)
				}
			h4{
				color:aqua;
				}
		</style>
	</head>
	<body>
		<?php require"components/navbar.php"?>
		<div class="container-fluid contain">
			<h1 class="text-center">Welcome to Gamerz</h1>
			<div class="row">
				<div class="col-4">
					<nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
						<nav class="nav nav-pills flex-column">
							<a class="nav-link" href="#item-1">About Gamerz</a>
							<a class="nav-link" href="#item-2">Game Talk</a>
							<a class="nav-link" href="#item-3">Creator Zone</a>
							<a class="nav-link" href="#item-4">Gamer Gadget info</a>
							<a class="nav-link" href="#item-5">Forum Rules</a>
						</nav>
					</nav>
				</nav>
			</div>
			<div class="col-8">
				<div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
					<div id="item-1">
						<h4>About Gamerz</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, possimus. Perferendis adipisci ab, quae incidunt iusto placeat repellendus pariatur, tenetur voluptates necessitatibus. Tempore accusantium, est quam amet assumenda ad, maxime?
							Vero quasi eius enim aspernatur rerum itaque mollitia in, incidunt eaque necessitatibus, corporis cum temporibus repudiandae, quos ullam expedita unde. Accusantium minus in eos, dolorem minima labore ducimus odit quas!
						Eligendi similique ea officia! Facere, accusantium iusto, laudantium iure ducimus fugit aliquid, aperiam voluptatum quae quam omnis dignissimos tenetur, at consequuntur porro illo blanditiis modi. Ipsum consectetur nihil enim maxime.</p>
					</div>
					<div id="item-2">
						<h4>Game Talk</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, possimus. Perferendis adipisci ab, quae incidunt iusto placeat repellendus pariatur, tenetur voluptates necessitatibus. Tempore accusantium, est quam amet assumenda ad, maxime?
							Vero quasi eius enim aspernatur rerum itaque mollitia in, incidunt eaque necessitatibus, corporis cum temporibus repudiandae, quos ullam expedita unde. Accusantium minus in eos, dolorem minima labore ducimus odit quas!
						Eligendi similique ea officia! Facere, accusantium iusto, laudantium iure ducimus fugit aliquid, aperiam voluptatum quae quam omnis dignissimos tenetur, at consequuntur porro illo blanditiis modi. Ipsum consectetur nihil enim maxime.</p>
					</div>
					<div id="item-3">
						<h4>Creator Zone</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, possimus. Perferendis adipisci ab, quae incidunt iusto placeat repellendus pariatur, tenetur voluptates necessitatibus. Tempore accusantium, est quam amet assumenda ad, maxime?
							Vero quasi eius enim aspernatur rerum itaque mollitia in, incidunt eaque necessitatibus, corporis cum temporibus repudiandae, quos ullam expedita unde. Accusantium minus in eos, dolorem minima labore ducimus odit quas!
						Eligendi similique ea officia! Facere, accusantium iusto, laudantium iure ducimus fugit aliquid, aperiam voluptatum quae quam omnis dignissimos tenetur, at consequuntur porro illo blanditiis modi. Ipsum consectetur nihil enim maxime.</p>
					</div>
					<div id="item-4">
						<h4>Gamer Gadget info</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, possimus. Perferendis adipisci ab, quae incidunt iusto placeat repellendus pariatur, tenetur voluptates necessitatibus. Tempore accusantium, est quam amet assumenda ad, maxime?
							Vero quasi eius enim aspernatur rerum itaque mollitia in, incidunt eaque necessitatibus, corporis cum temporibus repudiandae, quos ullam expedita unde. Accusantium minus in eos, dolorem minima labore ducimus odit quas!
						Eligendi similique ea officia! Facere, accusantium iusto, laudantium iure ducimus fugit aliquid, aperiam voluptatum quae quam omnis dignissimos tenetur, at consequuntur porro illo blanditiis modi. Ipsum consectetur nihil enim maxime.</p>
					</div>
					<div id="item-5">
						<h4>Forum Rules</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, possimus. Perferendis adipisci ab, quae incidunt iusto placeat repellendus pariatur, tenetur voluptates necessitatibus. Tempore accusantium, est quam amet assumenda ad, maxime?
							Vero quasi eius enim aspernatur rerum itaque mollitia in, incidunt eaque necessitatibus, corporis cum temporibus repudiandae, quos ullam expedita unde. Accusantium minus in eos, dolorem minima labore ducimus odit quas!
						Eligendi similique ea officia! Facere, accusantium iusto, laudantium iure ducimus fugit aliquid, aperiam voluptatum quae quam omnis dignissimos tenetur, at consequuntur porro illo blanditiis modi. Ipsum consectetur nihil enim maxime.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>