// Disable gulp notifications
process.env.DISABLE_NOTIFIER = true

var elixir = require('laravel-elixir')

// Compile sass into css
elixir(function (mix) {
  mix.sass([
    'main-content/main.sass',
    'main-content/main-navbar.sass',
    'main-content/main-items-content.sass',
    'main-content/todo-navbar.sass',
    'main-content/user-item-content.sass'
  ], 'public/css/all.css') // Output path
})

// Compile javascript
elixir(function (mix) {
  mix.scripts([
    'main.js'
  ])
})
