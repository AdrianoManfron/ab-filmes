/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php'],
  theme: {
    extend: {
      fontFamily: {
        'rammetto-one': ['Rammetto One', 'serif'],
        'rajdhani': ['Rajdhani', 'serif'],
        'nunito': ['Nunito Sans', 'serif'],
      },
      colors: {
        'purple-base': '#892CCD',
        'purple-light': '#A85FDD',
        'error-base': '#D04048',
        'error-light': '#F77980',
        'gray-100': '#0F0F1A',
        'gray-200': '#131320',
        'gray-300': '#1A1B2D',
        'gray-400': '#45455F',
        'gray-500': '#7A7B9F',
        'gray-600': '#B5B6C9',
        'gray-700': '#E4E5EC',
        'white': '#FFFFFF',
      },
      backgroundImage: {
        'login-register': "url('/public/images/Login.png')",
      },
      maxWidth: {
        '1192': '1192px',
      }
    },
  },
  plugins: [],
}