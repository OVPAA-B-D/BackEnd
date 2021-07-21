module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    minWidth:{
      '1':'22.5rem'
    },
    extend: {
      backgroundImage: theme => ({
        'default': "url('/img/img2.png')",
        
       }),
       boxShadow:{
        '3xl':'0px 4px 4px rgba(0, 0, 0, 0.25)',

       },
       zIndex:{
        '-1':'-1',
       },
      padding:{
        0.6:'0.188rem',
      },
      colors: {
        blue: {
          150: '#2D9CDB',
          250:'#4679FB'
        },
        yellow:{
          150:'#F37123'
        },
        red:{
          150:'#FB4646'
        },
        gray:{
          150:'#909090'
        },
        green:{
          150:"#27AE60",
        },
        indigo:{
          150:'#6C63FF',
        }
      },
     
      width:{
        '19':'14.188rem',
        '31':'63.688rem',
        '18':'2.27rem',
        '17':'5.688rem',
        '91':'22.5rem',
        '97':'31.375rem',
        '37': '9.688rem',
        '7.5':'1.828rem',
        '81': '20.875rem',
        '73':'19rem',
        '21':'22.313rem',
        '22':'21.938rem',
      },
      height:{
        '99':'36.313rem',
        '97':'39.125rem',
        '98':'87.5rem',
        '7.5': '1.646rem',
        '17': '3.125rem',
        '18':'3.188rem',
        '19':'17.625rem'
      },
      fontSize: {
        'tiny':'0.563rem'
      },
      fontFamily: {
        roboto: ["Roboto"],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
