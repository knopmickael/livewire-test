module.exports = {
    purge: [
        './resources/views/welcome.blade.php',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                primary: '#115e91',
                secondary: '#60b3eb',
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
