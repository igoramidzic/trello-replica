// Disable gulp notifications
process.env.DISABLE_NOTIFIER = true

var elixir = require('laravel-elixir')

// Compile sass into css
elixir(function (mix) {
  mix.sass([
    'main.sass'
  ], 'public/css/all.css') // Output path
})

// Compile javascript
elixir(function (mix) {
  mix.scripts([
    'main.js'
  ])
})
