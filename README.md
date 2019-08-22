# WordPress Block Type Example

This is designed to teach the basics of WordPress Gutenberg Block Type Development. 

This was made for the WordCamp Las Vegas 2019 - "Plugin Development in a Block Editor World"

[Google Slides](https://docs.google.com/presentation/d/1sYoBowlrL7YQC-lKR5gUdRI-p2UlZknsyckP5MtnLyQ/edit?usp=sharing)

Developed and presented by [@OGProgrammer](https://twitter.com/ogprogrammer)

See more at the official site -> https://wordpress.org/gutenberg/

## Instructions

To install this, first install [docker](https://docker.io) & `docker-compose`

Run `docker-compose up -d` to bring up the wordpress container with the example plugin code.

To shut it all down , just run `docker-compose down` to shut it all down.

To jump into the terminal for the container, run ` docker-compose exec wordpress bash`

## Examples

The manual examples can be found in custom-wp-block-type. You'll find a few dynamic blocks and one static block example.

The other example uses create-guten-block, I ran `npx create-guten-block my-autogen-block` in the root of the project here to generate the autogen example.

## Debugging

Use normal `wp-config.php` settings and tail logs with `docker-compose logs -f`

## More resources

Here are other resources that helped out:

### Video
* [Good A-to-Z video on Block development](https://www.youtube.com/watch?v=Mv68Sa-iHyo&t=1570s)

### Tools
* [Babel in-browser HTML -> React JSX Transpile](https://babeljs.io/repl)
* [Create Guten Block NPM command](https://github.com/ahmadawais/create-guten-block)
** Run `npx create-guten-block my-autogen-block`

### Documentation
* [WP Creating Dynamic Blocks](https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/block-tutorial/creating-dynamic-blocks/)
* [WP Attributes / Working with Meta](https://wordpress.org/gutenberg/handbook/designers-developers/developers/block-api/block-attributes/)
* [WP Block Templates](https://wordpress.org/gutenberg/handbook/designers-developers/developers/block-api/block-templates/)

### Tutorial
* [FreeCodeCamp WP React Development](https://www.freecodecamp.org/news/wordpress-react-how-to-create-a-modern-web-app-using-wordpress-ef6cc6be0cd0/)

## Attribution

Some of the examples are copied/derived from the following:

* Color Block Example from [LearnWebCode/simple-block-boilerplate](https://github.com/LearnWebCode/simple-block-boilerplate)
* Static Block Example from [modularwp.com](https://modularwp.com/how-to-build-gutenberg-blocks/#static-block-example)
