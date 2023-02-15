/** @type {import('tailwindcss').Config} */
module.exports = {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
  content: [
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/tailwind.blade.php'
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
