/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./Modules/**/*.blade.php",
  ],

  theme: {
    extend: {
      colors: {
        primary: "#443c3e",
        "safety-orange": "#ff6700",
        "secondry": "#ff6700",
      },
      fontFamily: {
        display: ["Kaushan Script", "cursive"],
        title: ["Afacad", "sans-serif"],
        base: ["Figtree", "sans-serif"],
      },
    },
  },

  plugins: [
    require("@tailwindcss/typography"),
  ],
}
