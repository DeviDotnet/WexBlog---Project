/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [],
  theme: {
    extend: {},
  },
  daisyui: {
    themes: ["light"],
  },
  darkMode: 'class',
  plugins: [require('daisyui')],
};
