# Learn Pug and Amp
Here test code 4 learning AMP and Pug.
<!-- TOC depthFrom:1 depthTo:6 withLinks:1 updateOnSave:1 orderedList:0 -->

- [Learn Pug and Amp](#learn-pug-and-amp)
	- [usefull links](#usefull-links)
	- [Include external file of styles](#include-external-file-of-styles)

<!-- /TOC -->

[links](#links)

## usefull links
<a name="links">

- [php Pug](https://github.com/pug-php/pug)
- [Laravel Pug](https://github.com/BKWLD/laravel-pug)
- [AMP with Pug](https://webdesign.tutsplus.com/tutorials/quick-tip-make-amps-inline-css-easier-with-jade-or-php--cms-26191)
- [AMP debug mode](https://webdesign.tutsplus.com/tutorials/how-to-make-a-basic-amp-page-from-scratch--cms-26158)

Also is gist [amp template](https://gist.github.com/TeeZ0NE/5e00c1924a1541947564ed5c96a46ca5)

## Include external file of styles

			style(amp-custom)
				include style.css

			style(amp-custom)
				<?php readfile( getcwd() . "/style.css"); ?>

**!**Do the same
