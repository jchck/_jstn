# starter

a hexo starter stack for hanley wood's interactive team

## getting started

```
$ git clone https://github.com/hw-interactive/starter.git
$ cd starter
$ npm run setup
```

## commands

* `$ npm start` -> to open dev server
* `$ npm run setup` -> install dependencies from npm, bower, and open dev server
* `$ npm run build:assets` -> process all assets via gulp.js
* `$ npm run build:css` -> process css via gulp.js
* `$ npm run build:js` -> lint & concatinate js using gulp.js
* `$ npm run deploy` -> to deploy as configured in `./_config.yml`

## what's included

* [node][6]
* [npm][8]
* [bower][7]
* [hexo][2]
* [gulp][3]
* [postcss][9]
* [critical css][10]
* [tachyons][11]
* [jquery v1.10.2][8] (the same vesion in use on prod)

## static assets

otherwise known as css, js, svg, img, lol, etc...

### js processing pipeline

there are unique parts to js processing the first is handled by [gulp.js][3], the sencond is handled by [hexo][2].

gulp.js first lints all the javascript inside the `./source/_js/` directory using [jshint][4]/[gulp-jshint][5].

this is `$ gulp js-hint`.

gulp.js then concatenates all of our JS in the order defined in the `input.js` array found at the beginning of our gulpfile.

finally, gulp.js places all this at `./source/js/`

it's at this point that hexo takes over. hexo begins a watch task when we run `$ npm start` that task moves any js from `./source/js/` to the generated site root at `./public/js/`.

this means that [a] it's possible to process js w/o dev server running and [b] when dev server is running, you'll need to hit `$ npm run build:js` to process js.

#### adding 3rd party js to the mix

we can also add any scripts installed via bower or npm to the pipeline by adding paths to those files to the `input.js` array of our gulpfile. see comments in the gulpfile for clarity.

### css processing pipeline

css processing takes the very same approach as js processing with gulp handling the first half and hexo the second. it's worth noting that our task runner, gulp is acting as a wrapper for postcss.

to compile styles simply tap your fingers on the `$ npm run build:css` keys in that order. just like with our js, css processing must be triggered manually & can happen wothout the dev server running.

### critical css

critical is a node module that will extract fully processed css and, upon build, inject it into a `<styele>` block in the head of any page. critical css are the styles necassary to style html above the critical-path (read: above-the-fold) and those styles are generally inlined for preformance reasons.

this approach is handy when ceating custom interactives to be placed inside a raw html module in brightspot.

to turn critical on/off see `./themes/donuts/_config.yml`

### views & templates

find these inside the `./themes/donuts/layout` directory. at the root of this directory are all the [default hexo templates][1], layout wrapper, and a collection of partials for modularity.

[1]: https://hexo.io/docs/templates.html
[2]: https://hexo.io/
[3]: http://gulpjs.com/
[4]: http://jshint.com/
[5]: https://www.npmjs.com/package/gulp-jshint
[6]: https://nodejs.org
[7]: https://bower.io/
[8]: https://blog.jquery.com/2013/07/03/jquery-1-10-2-and-2-0-3-released/
[9]: http://postcss.org/
[10]: https://github.com/addyosmani/critical
[11]: http://tachyons.io/