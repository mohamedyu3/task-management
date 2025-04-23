export default {
    plugins: {
        '@tailwindcss/nesting': {},
        '@tailwindcss/postcss': {}, // 👈 use this instead of just `tailwindcss`
        autoprefixer: {},
    },
};
