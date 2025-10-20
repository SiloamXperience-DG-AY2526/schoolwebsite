/** @type {import('tailwindcss').Config} */
// tailwind.config.js
module.exports = {
  content: [
    "./*.{php,html}", // root-level theme files
    "./templates/**/*.{php,html}",
    "./parts/**/*.{php,html}",
    "./patterns/**/*.{php,html}",
    "./inc/**/*.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ["DM Sans", "ui-sans-serif", "system-ui", "sans-serif"],
      },
      colors: {
        "brand": "var(--wp--preset--color--brand)",
        "dark-green": "var(--wp--preset--color--dark-green)",
        "light-green": "var(--wp--preset--color--light-green)",
        "light-blue": "var(--wp--preset--color--light-blue)",
        "white": "var(--wp--preset--color--white)",
        accent: "#1C8A6A",
      },
    },
  },
  plugins: [],
};
