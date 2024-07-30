export default {
  darkMode: 'class',
  presets: [
    require("./vendor/wireui/wireui/tailwind.config.js")
  ],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/wireui/wireui/src/*.php",
    "./vendor/wireui/wireui/ts/**/*.ts",
    "./vendor/wireui/wireui/src/WireUi/**/*.php",
    "./vendor/wireui/wireui/src/Components/**/*.php"
  ],
  theme: {
    extend: {
      colors: {
        "main": "#f6f8fb",
        "dark-main": "#162131",
        "dark-btn-primary": '#162131', // Nombre personalizado para el color
        "dark-text-primary": '#94a3b8', // Nombre personalizado para el color
        "dark-hover-btn-primary": '#232f3f', // Nombre personalizado para el color
        "dark-hover-text-primary": '#cbd5e1', // Nombre personalizado para el color
      },
    },
  },
}