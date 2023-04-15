<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<style>
		body {
			background-image: url('background.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 50px;
			background-color: #fff;
			opacity: 0.8;
			border-radius: 10px;
			box-shadow: 0px 0px 10px #000;
		}

		h1 {
			font-size: 36px;
			font-weight: bold;
			margin-bottom: 20px;
		}

		p {
			font-size: 18px;
			line-height: 1.5;
			margin-bottom: 30px;
		}

		ul {
			margin: 0;
			padding: 0;
			list-style: none;
		}

		li {
			margin-bottom: 10px;
		}

		a {
			color: #000;
			text-decoration: none;
		}

		a:hover {
			color: #f00;
		}
	</style>
</head>
<body>
	<div class="container">
		<header>
			<h1>My Website</h1>
			<nav>
				<ul>
					<li><a href="#about">About</a></li>
					<li><a href="#education">Education</a></li>
					<li><a href="#skills">Skills</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<section id="about">
				<h2>About Me</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra dolor enim, nec pellentesque lacus aliquam ut. Ut euismod mauris nisl, vel bibendum nulla finibus sit amet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu dui vestibulum, suscipit quam ac, sagittis leo. Sed laoreet quam a magna sagittis, vel vestibulum magna feugiat. Suspendisse quis feugiat elit, ut maximus libero.</p>
			</section>
			<section id="education">
				<h2>Education</h2>
				<ul>
					<li>Bachelor's Degree in Computer Science, XYZ University, 2016-2020</li>
					<li>Master's Degree in Machine Learning, ABC University, 2020-2022</li>
				</ul>
			</section>
			<section id="skills">
				<h2>Skills</h2>
				<ul>
					<li>Machine Learning</li>
					<li>Deep Learning</li>
					<li>Natural Language Processing</li>
					<li>Python</li>
					<li>Java</li>
					<li>HTML/CSS</li>
				</ul>
			</section>
			<section id="contact">
				<h2>Contact Me</h2>
				<p>Email: example@gmail.com</p>
				<p>Phone: 123-456-7890</p>
			</section>
		</main>
	</div
