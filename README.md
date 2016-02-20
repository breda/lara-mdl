# Laravel 5.1 With MDL Admin Dashboard
---------------------------------------------------------------

This is a simple Laravel 5.1 application skeleton, with [MDL](http://www.getmdl.io/templates/dashboard/) (Material Design Lite) admin dashboard, and the awesome [MaterializeCSS](http://materializecss.com/) framework (Essentially, MDL is the template, and MaterializeCSS is the framework to use to build up your components)

## Getting Started...
Simply running, 
```bash
$ composer install
$ [sudo] npm install
$ bower install
$ gulp watch
```

Will get you up and running.
## RTL Support
If you want an RTL version of the admin dashboard, two dead simple steps to take:

1. Add `dir="rtl"` attribute to your `<html>` tag.

2.Goto  `resources/assets/sass/admin/main.scss` Sass file  and make sure this line in not commented out.

```
@import "to-rtl";
```
**Note:** Just make sure it's the last one included.

Enjoy :)

