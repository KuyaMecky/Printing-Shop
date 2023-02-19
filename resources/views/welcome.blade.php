<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="description" content="Labaratory 4 kay maam kenny">
    <meta name="author" content="Michael">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />
		<title>Donut</title>
    <style>
      #loading {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
  width: 100vw;
  height: 100vh;
  background-color: rgba(192, 192, 192, 0.5);
}

#bgvideo {
  position: fixed;
  right: 0;
  bottom: 0;
  width: 100%; 
  min-height: 100%;
}


    </style>
	</head>
	<body>
		<label for="outerRadius">R:</label> <input type="range" min="0" max="100" value="15" id="outerRadius">
		<label for="innerRadius">r:</label> <input type="range" min="0" max="100" value="7" id="innerRadius">
		<label for="outerCoverage">Outer coverage:</label> <input type="range" min="0.02" max="2" value="2" step="0.02" id="outerCoverage">
		<label for="innerCoverage">Inner coverage:</label> <input type="range" min="0.02" max="2" value="2" step="0.02" id="innerCoverage">
		<pre id="output" style="font-size: 7px; font-weight: bolder;"></pre>
    <!---------------wallpaperzxc--------------------
    <div id="loading">
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src=assets/video/popcat.mp4 type=video/mp4>
      </video>
    </div>
  --->
		<script>
			const gradient = ['K','u','y','a', 'M', 'E', 'C', 'K', 'Y'];
			let R, r, size, zBuffer, maxAngle;

			function refreshSizes() {
				R = document.getElementById('outerRadius').valueAsNumber;
				r = document.getElementById('innerRadius').valueAsNumber;
				maxAngleOuter = document.getElementById('outerCoverage').valueAsNumber * Math.PI;
				maxAngleInner = document.getElementById('innerCoverage').valueAsNumber * Math.PI;
				size = 2 * (R + r) + 10;
				zBuffer = new Array(size);

				for (let y = 0; y < size; ++y) {
					const arr = new Array(size);

					for (let x = 0; x < size; ++x) {
						arr[x] = 0;
					}

					zBuffer[y] = arr;
				}
			}

			document.getElementById('outerRadius').onchange = 
			document.getElementById('innerRadius').onchange =
			document.getElementById('outerCoverage').onchange =
			document.getElementById('innerCoverage').onchange = refreshSizes;

			refreshSizes();

			function renderTorus(xyPlaneAngle = 0, projectionRotationAngle = 0) {
				const innerStep = maxAngleInner / size / 5;
				const outerStep = maxAngleOuter / size / 5;

				for (let inner = 0.0; inner <= maxAngleInner; inner += innerStep) {
					const radius = R + r * Math.cos(inner);
					const z = r * Math.sin(inner);

					for (let outer = 0.0; outer <= maxAngleOuter; outer += outerStep) {
						const x = radius * Math.cos(outer);
						const y = radius * Math.sin(outer);

						const x1 = x;
						const y1 = y * Math.cos(xyPlaneAngle) - z * Math.sin(xyPlaneAngle);
						const z1 = y * Math.sin(xyPlaneAngle) + z * Math.cos(xyPlaneAngle);

						const x2 = Math.round(x1 * Math.cos(projectionRotationAngle) - y1 * Math.sin(projectionRotationAngle)) + size / 2;
						const y2 = Math.round(x1 * Math.sin(projectionRotationAngle) + y1 * Math.cos(projectionRotationAngle)) + size / 2;
						const z2 = z1 + size;

						if (z2 > zBuffer[y2][x2]) {
							zBuffer[y2][x2] = z2;
						}
					}
				}

				let s = '';

				for (let y = 5; y < zBuffer.length - 5; ++y) {
					for (let x = 5; x < zBuffer[y].length - 5; ++x) {
						if (zBuffer[y][x] > 0) {
							let angleCoefficient = 2 * zBuffer[y][x] - zBuffer[y + 1][x] - zBuffer[y][x + 1];
							angleCoefficient = size * angleCoefficient / 12;
							angleCoefficient = Math.min(angleCoefficient, gradient.length - 1);
							angleCoefficient = Math.max(angleCoefficient, 0);
							angleCoefficient = Math.round(angleCoefficient);
							s += gradient[angleCoefficient];
							s += gradient[angleCoefficient];
							zBuffer[y][x] = 0;
						} else {
							s += '  ';
						}
					}

					s += '\n';
				}

				document.getElementById('output').innerText = s;
			}

			let increment1 = 0, increment2 = 0;
			let angle1 = 0, angle2 = 0;
			let counter = 1;

			setInterval(() => {
				if (counter % 10 === 0) {
					increment1 = 0.03 + Math.random() / 10;
					increment2 = (Math.random() - 0.5) / 10;
				}

				angle1 += increment1;
				angle2 += increment2;
				renderTorus(angle1, angle2);
				++counter;
			}, 20);
		</script>
	</body>
</html>

    </body>
</html>
