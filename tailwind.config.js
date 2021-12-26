const colors = require("tailwindcss/colors");
module.exports = {
    corePlugins: {
        position: false,
    },
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        zIndex: {
            '-10': '-10',
            '0': 0,
            '10': 10,
            '20': 20,
            '30': 30,
            '40': 40,
            '50': 50,
            '25': 25,
            '50': 50,
            '75': 75,
            '100': 100,
            'auto': 'auto',
        },
        scale: {
            '0': '0',
            '25': '.25',
            '50': '.5',
            '75': '.75',
            '90': '.9',
            '95': '.95',
            '100': '1',
            '105': '1.05',
            '110': '1.1',
            '125': '1.25',
            '150': '1.5',
            '200': '2',
        },
        colors: {
            gray: colors.coolGray,
            blue: colors.sky,
            red: colors.rose,
            pink: colors.fuchsia,
            orange: {
                default: "#ff3514",
            },
            white: "#FFFFFF",
            blue: { default: "#06163A", primary: "#007bff", costemer: "#202b5d", special: "#b0b8c6", lc: "#62718d" }
        },
        fontFamily: {
            sans: ["NunitoSans-Bold", "sans-serif"],
            serif: ["Merriweather", "serif"],
            mono: ["ui-monospace", "SFMono-Regular"],
            display: ["Oswald"],
            body: ["Open Sans", ],
            Cabin: ["Cabin", "sans-serif"],
        },
        extend: {
            spacing: {
                128: "32rem",
                144: "36rem",
            },
            borderRadius: {
                "4xl": "2rem",
            },
        },
        fontSize: {
            xs: ".75rem",
            sm: ".875rem",
            tiny: ".875rem",
            base: "1rem",
            lg: "1.125rem",
            xl: "1.25rem",
            "2xl": "1.5rem",
            "3xl": "1.875rem",
            "4xl": "2.25rem",
            "5xl": "3rem",
            "6xl": "4rem",
            "7xl": "5rem",
            sp: ['26px', '30px'],
        },
        container: {
            center: true,
            padding: '2rem',
        },
        marginbottom: {
            marginbottom: 60,

        },
        paddingTop: {
            paddingTop: '0 rem',
            paddingRight: '15px',
            paddingBottom: '0px',
            paddingLeft: '15px',
        },
        paddingBox: {
            paddingTop: '24px',
            paddingRight: '30px',
            paddingLeft: '30px',
            paddingBottom: '40',

        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
};