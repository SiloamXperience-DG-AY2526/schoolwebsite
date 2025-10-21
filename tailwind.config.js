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
        eucalyptus: {
          70: '#7EDDC3',
          80: '#5AD3B3',
          90: '#36C9A2',
          100: '#2CA585',
          110: '#207860',
          120: '#195D4B',
        },
        elm: {
          60: '#C2F0FD',
          70: '#7EC7DD',
          80: '#5AB7D3',
          90: '#38A7C9',
          100: '#2C89A5',
          110: '#206378',
          120: '#194D5D',
        },
        neutral: {
          0: '#FFFFFF',
          10: '#F0F0F2',
          20: '#E0E0E4',
          40: '#C1C1C9',
          80: '#747480',
          100: '#666679',
          120: '#515160',
          200: '#333333',
        },
      },
      fontSize: {
        'header-xxxl': ['64px', { lineHeight: 'normal', fontWeight: '700' }],
        'header-xxl': ['48px', { lineHeight: 'normal', fontWeight: '700' }],
        'header-xl': ['40px', { lineHeight: 'normal', fontWeight: '700' }],
        'header-lg': ['32px', { lineHeight: 'normal', fontWeight: '700' }],
        'header-normal': ['24px', { lineHeight: 'normal', fontWeight: '700' }],
        'header-sm': ['20px', { lineHeight: 'normal', fontWeight: '700' }],
        'header-xsm': ['20px', { lineHeight: 'normal', fontWeight: '400' }],
        'paragraph-lg': ['20px', { lineHeight: 'normal', fontWeight: '500' }],
        'paragraph-normal': ['16px', { lineHeight: 'normal', fontWeight: '500' }],
        'paragraph-sm': ['14px', { lineHeight: 'normal', fontWeight: '500' }],
        'paragraph-xsm': ['12px', { lineHeight: 'normal', fontWeight: '500' }],
        'button-lg': ['20px', { lineHeight: 'normal', fontWeight: '600' }],
        'button-sm': ['16px', { lineHeight: 'normal', fontWeight: '600' }],
      },
    },
  },
  plugins: [],
};
