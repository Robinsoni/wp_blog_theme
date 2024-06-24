/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',                       // For root-level PHP files
    './**/*.php',                    // For PHP files in subdirectories
    './src/**/*.{css,html,js}',      // For CSS, HTML, and JS files in the src directory and its subdirectories
    './templates/**/*.php',          // For PHP files in a templates directory (if used)
    './components/**/*.{php,js}',    // For PHP and JS files in a components directory (if used)
    './includes/**/*.{php,js}',      // For PHP and JS files in an includes directory (if used)
  ],
  theme: {
    extend: {
      borderColor:{
        'light-gray-border': 'var(--light-gray-border)'
      },
      maxHeight: {
        'max-content': 'max-content',
      },
      colors: {
        'primary-color': 'var(--primary-color)',
        'secondary-color': 'var(--secondary-color)',
        'tertiary-color': 'var(--tertiary-color)',
      }
    },
  },
  plugins: [],
}