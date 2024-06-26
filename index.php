<?php
declare(strict_types=1);

function separator(): void {
	echo <<<END
		<svg class="sep" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
			<defs>
				<linearGradient id="sep_grad" x1="0%" x2="100%" y1="0%" y2="0%">
					<stop offset="0%" stop-color="teal" />
					<stop offset="50%" stop-color="turquoise" />
					<stop offset="100%" stop-color="teal" />
				</linearGradient>
			</defs>
			<ellipse rx="50" ry="50" cx="50" cy="50" fill="url(#sep_grad)" />
		</svg> 
	END;
}
?>

<!DOCTYPE html>

<html lang="en-GB">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Darren Fielding</title>
		<link rel="stylesheet" href="styles.css">
		<!-- <link rel="icon" type="image/x-icon" href="/images/favicon.ico"> -->
	</head>

	<body>

		<div id="main">

			<div>
				<div id="head_anim">ANIMATION</div>

				<h1>Darren Fielding</h1>

				<a id="github_link" href="https://github.com/darrenf20" target="_blank">
					<svg id="github-icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
						<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
					</svg>
					&nbsp;Visit my GitHub
				</a>

				<h2>Software Developer</h2>
			</div>

			<?php separator(); ?>

			<h3>About</h3>
			<p>Darren has been programming for 8 years. Spent 4 years studying Computing Science at the University of Glasgow.</p>


			<?php separator(); ?>

		</div>

	</body>

</html>
