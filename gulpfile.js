var elixir = require('laravel-elixir');


elixir(function(mix) {

    /**
     * ###################################
     * ######## BACK END #################
     * ###################################
     */
    /* Fonts */
    mix.copy('public/plugins/chosen/*.png', 'public/css');
    mix.copy('public/plugins/font-awesome/fonts', 'public/fonts');

    /* Images */
    mix.copy('resources/assets/images', 'public/images');
    mix.copy('resources/assets/favicon.ico', 'public');
    mix.copy('public/plugins/material-design-lite/src/images', 'public/images');
    
    // Vendors
    mix.styles([
      'public/plugins/animsition/dist/css/animsition.min.css',
      'public/plugins/chosen/chosen.min.css',
      'public/plugins/font-awesome/css/font-awesome.min.css',
    ], 'public/css/vendor.css', './');

    mix.scripts([
      'public/plugins/jquery/dist/jquery.min.js',
      'public/plugins/material-design-lite/material.min.js',
      'public/plugins/animsition/dist/js/jquery.animsition.min.js',
      'public/plugins/Materialize/dist/js/materialize.min.js',
      'public/plugins/chosen/chosen.jquery.min.js',
      'public/plugins/tendina/dist/tendina.min.js',
    ],  'public/js/vendor.js', './');

    // Custom Styles
    mix.sass([
      'resources/assets/sass/admin/main.scss'
    ], 'public/css/admin-all.css', './');

    // Custom Scripts
    mix.scripts([
      // Init jquery plugins and such...
      'resources/assets/js/admin/init.js',

      // Other stuff here...
      'resources/assets/js/admin/main.js'
    ],  'public/js/admin-all.js', './');
      
});
