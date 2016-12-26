const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
  mix.styles([
      './resources/assets/bower/bootstrap/dist/css/bootstrap.css',
      './resources/assets/bower/fontawesome/css/font-awesome.min.css',
      './resources/assets/bower/simple-line-icons/css/simple-line-icons.css',
      './resources/assets/bower/style.css',
      './resources/assets/bower/datatables.net-bs/css/dataTables.bootstrap.css',
      './resources/assets/bower/datatables.net-dt/css/jquery.dataTables.css',
      './resources/assets/bower/ommaya.css'
      ])
      .scripts([
      './resources/assets/bower/jquery/dist/jquery.min.js',
      './resources/assets/bower/tether/dist/js/tether.min.js',
      './resources/assets/bower/bootstrap/dist/js/bootstrap.min.js',
      './resources/assets/bower/pace/pace.min.js',      
      './resources/assets/bower/datatables.net/js/jquery.dataTables.js',
      './resources/assets/bower/app.js'
      ])
      .copy('./resources/assets/bower/fontawesome/fonts','public/fonts')
      .copy('./resources/assets/bower/bootstrap/dist/fonts/','public/fonts')
      .copy('./resources/assets/bower/datatables.net-dt/images', 'public/images')
      .copy('./resources/assets/bower/simple-line-icons/fonts','public/fonts');

});