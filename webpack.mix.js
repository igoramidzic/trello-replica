const { mix } = require('laravel-mix')

mix.disableNotifications()

mix.js('resources/assets/js/all.js', 'public/js')
   .sass('resources/assets/sass/main-content/boards/board-item-content.sass', 'public/css')
   .sass('resources/assets/sass/main-content/boards/create-new-board.sass', 'public/css')
   .sass('resources/assets/sass/main-content/navbars/index-navbar.sass', 'public/css')
   .sass('resources/assets/sass/main-content/pages/index-page.sass', 'public/css')
   .sass('resources/assets/sass/main-content/main-items-content.sass', 'public/css')
   .sass('resources/assets/sass/main-content/auth/main-login-register.sass', 'public/css')
   .sass('resources/assets/sass/main-content/navbars/main-navbar.sass', 'public/css')
   .sass('resources/assets/sass/main-content/main.sass', 'public/css')
   .sass('resources/assets/sass/main-content/users/user-item-content.sass', 'public/css')

mix.styles([
  'public/css/board-item-content.css',
  'public/css/create-new-board.css',
  'public/css/index-navbar.css',
  'public/css/index-page.css',
  'public/css/main-items-content.css',
  'public/css/main-login-register.css',
  'public/css/main-navbar.css',
  'public/css/main.css',
  'public/css/user-item-content.css'
], 'public/css/all.css')

mix.browserSync('localhost:8000')
