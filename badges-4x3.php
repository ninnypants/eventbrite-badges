<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6">
<![endif]-->
<!--[if IE 7]>
<html id="ie7">
<![endif]-->
<!--[if IE 8]>
<html id="ie8">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html>
<!--<![endif]-->
<head>
	<title></title>
<style type="text/css">
	/* http://meyerweb.com/eric/tools/css/reset/
	   v2.0 | 20110126
	   License: none (public domain)
	*/

	html, body, div, span, applet, object, iframe,
	h1, h2, h3, h4, h5, h6, p, blockquote, pre,
	a, abbr, acronym, address, big, cite, code,
	del, dfn, em, img, ins, kbd, q, s, samp,
	small, strike, strong, sub, sup, tt, var,
	b, u, i, center,
	dl, dt, dd, ol, ul, li,
	fieldset, form, label, legend,
	table, caption, tbody, tfoot, thead, tr, th, td,
	article, aside, canvas, details, embed,
	figure, figcaption, footer, header, hgroup,
	menu, nav, output, ruby, section, summary,
	time, mark, audio, video {
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline;
	}

	/* HTML5 display-role reset for older browsers */
	article, aside, details, figcaption, figure,
	footer, header, hgroup, menu, nav, section {
		display: block;
	}

	body {
		line-height: 1;
	}

	ol, ul {
		list-style: none;
	}

	blockquote, q {
		quotes: none;
	}

	blockquote:before, blockquote:after,
	q:before, q:after {
		content: '';
		content: none;
	}

	table {
		border-collapse: collapse;
		border-spacing: 0;
		width: 21.59cm;
		height: 27.94cm;
	}

	td {
		overflow: hidden;
	}

	.side-rule {
		width: 0.6349996571001851cm;
	}

	.top-rule {
		width: 10.159994513602962cm;
		height: 2.5399986284007405cm;
	}

	.badge {
		width: 10.159994513602962cm;
		height: 7.619995885202221cm;
	}
</style>
</head>
<body>
<table>
	<tr><td class="side-rule"></td><td class="top-rule"></td><td class="top-rule"></td><td class="side-rule"></td></tr>
	<?php
	global $badges;
	echo $badges;
	?>
	<tr><td class="side-rule"></td><td class="top-rule"></td><td class="top-rule"></td><td class="side-rule"></td></tr>
</table>
</body>
</html>