<style>

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	body {
		font: 14px/1 'Open Sans', sans-serif;
		color: #555;
		background: #e5e5e5;
	}

	.gallery {
		width: 1000px;
		margin: 0 auto;
		padding: 5px;
		background: #fff;
		box-shadow: 0 1px 1px rgba(0,0,0,.1);
	}


	.gallery > div {
		position: relative;
		float: left;
		padding: 5px;
	}

	.gallery > div > img {
		width: 300px;
		transition: .1s transform;
		transform: translateZ(0); /* hack */
	}

	.gallery > div:hover {
		z-index: 1;
	}

	.gallery > div:hover > img {
		transform: scale(1.8,1.8);
		transition: .3s transform;
	}

	.cf:before, .cf:after {
		display: table;
		content: "";
		line-height: 0;
	}

	.cf:after {
		clear: both;
	}

	h1 {
		margin: 40px 0;
		font-size: 24px;
		text-align: center;
	}

	@media only screen and (max-width: 600px) {
		.gallery {
			width: 300px;
			margin: 0 auto;
			padding: 5px;
			background: #fff;
			box-shadow: 0 1px 1px rgba(0,0,0,.1);
		}

		.gallery > div > img {
			width: 300px;
			transition: .1s transform;
			transform: translateZ(0); /* hack */
		}
	}
</style>