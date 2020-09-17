module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],
    theme: {
        extend: {
            width: {
                '1/10': '10%',
                '2/10': '20%',
                '3/10': '30%',
                '4/10': '40%',
                '5/10': '50%',
                '6/10': '60%',
                '7/10': '70%',
                '8/10': '80%',
                '9/10': '90%',
            },
            textColor: {
                'primary': '#4D5567',
                'second': '#56628C',
                'third': '#9A9CA2',
                'purple': '#7E3E97',
                'grey': '#AFAFAF',
                'grey-1': '#B2B5BD',
                'yellow': '#FABD02',
                'green': '#18A75A;',
                'black': '#020000',
            },

            backgroundColor: {
                'yellow': '#FABD02',
                'primary': '#56628C',
                'second': '#E0CBF6',
                'grey': '#F6F6F6',
                'grey-1': '#F9F9F9',
                'green': '#18A75A;',
                'whitegreen': '#f3fbf6',
                'whitepink': '#f7f7f7',
                'input': '#f5f5f4',
                'darkgray': '#3B3B3A',
                'lightgray': '#AFAFAE',
                'border': '#cecece',
                'lightlightgray': '#b0b0af'

            },

            borderColor: {
                'grey': '#888888',
                'underline': '#cecece',
                'green': '#18A75A;',
                'lightergray': '#c3c3c3',
                'heavygray': '#e1e1e1',
            },
            spacing: {
                '27': '108px',
                '30': '120px',
                '35': '140px',
                '562': '562px',
                '105': '105px',
                'minus80': '-80px',
                '19': '19px',
                '13': '13px',
                '20px': '20px',
                '29': '29px',
                '70': '70px',
                '55': '55px'

            },
            fontSize: {
                '44': '44px',
                '15': '15px',
                'sm': '0.875rem',
                'base': '15px'
            },
            translate: {
                '3/10': '30%',
            },
            width: {
                '560': '560px',
                '608': '608px',
                '1004': '1004px',
                '495': '495px',
                '474': '474px',
                '600': '600px',
                '1232': '1232px'


            },
            height: {
                '739': '739px',
                '690': '670px',
                '1252': '1252px'
            },
            screens: {
                'xxl': '1400px'
            }
            // paddingX: {
            //     'px-140': '140px'
            // }
        },
    },
    variants: {},
    plugins: [
        require('@tailwindcss/ui'),
    ]
}