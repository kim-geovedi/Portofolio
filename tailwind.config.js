/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        container:{
            center:true,
            padding:'16px',
        },
      extend: {
        animation: {
            'fade-in': 'fadeIn 1s ease-out forwards',
          },
          keyframes: {
            fadeIn: {
              '0%': { opacity: 0 },
              '100%': { opacity: 1 },
            },
          },
        colors: {
            'nav' : '#1e293b',
            'dark': '#0f172a',
            'primary' : '#8b5cf6',
            'secondary' : '#a78bfa',
            'tulisan': '#94a3b8',
            'paragraf' : '#6b7280',
        },
        screens:{
            '2xl' :'1320px',
        }
      },
    },
    plugins: [],
  }
