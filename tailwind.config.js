/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './template-parts/**/*.php',
    './index.php'
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
