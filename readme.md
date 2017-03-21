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

## folder structure

### static assets

find these inside the `./source` directory along with the markdown files for all pages &amp; posts. working directories are prefaced `_underscore`, assets are processed and moved to their cooresponding non-prefaced destination directory via gulp tasks.

all non-prefaced directories inside of `./source` are moved to the generated site root upon `$ hexo generate` and/or `$ npm run deploy`.

### views & templates

find these inside the `./themes/donuts/layout` directory. at the root of this directory are all the [default hexo templates][1], layout wrapper, and a collection of partials for modularity.

[1]: https://hexo.io/docs/templates.html