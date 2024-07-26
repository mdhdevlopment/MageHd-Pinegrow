module.exports = {
  content: [
    './index.html',
    './src/**/*.vue',
    './src/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'dark-black': {
          DEFAULT: '#0E0E0E', // Use DEFAULT key
        },
        'dark-blue': '#3B65AF',
        'dark-white': '#F2F2F2',
        'white': '#fff',
        'primary': '#007bff',
      }
    },
    screens: {
      'sm': '767px', 
      'md': '991px',
      'lg': '1024px',
      'xl': '1280px',
    },
    fontFamily: {
      'sans': ['ui-sans-serif', 'system-ui'],
      'serif': ['ui-serif', 'Audiowide', 'Questrial'],
      'display': ['Audiowide'],
      'body': ['"Questrial"'],
    },
    extend: {
      spacing: {
        '8xl': '96rem',
        '9xl': '128rem',
      },
      borderRadius: {
        '4xl': '2rem',
      }
    },
  },
  plugins: [],
}
