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
* `$ npm run deploy` -> to deploy as configured in `./_config.yml`

## dependencies

* [node][6]
* [hexo][2]
* [gulp][3]

## folder structure

### static assets

otherwise known as css, js, svg, img, lol, etc...

#### js processing pipeline

there are unique parts to js processing the first is handled by [gulp.js][3], the sencond is handled by [hexo][2].

gulp.js first lints all the javascript inside the `./source/_js/` directory using [jshint][4]/[gulp-jshint][5].

this is `$ gulp js-hint`.

gulp.js then concatenates all of our JS in the order defined in the `input.js` array found at the beginning of our gulpfile.

finally, gulp.js places all this at `./source/js/`

it's at this point that hexo takes over. hexo begins a watch task when we run `$ npm start` that task moves any js from `./source/js/` to the generated site root at `./public/js/`.

### views & templates

find these inside the `./themes/donuts/layout` directory. at the root of this directory are all the [default hexo templates][1], layout wrapper, and a collection of partials for modularity.

[1]: https://hexo.io/docs/templates.html
[2]: https://hexo.io/
[3]: http://gulpjs.com/
[4]: http://jshint.com/
[5]: https://www.npmjs.com/package/gulp-jshint
[6]: https://nodejs.org