module.exports = {
    theme: {
        extend: {}
    },
    variants: {},
    plugins: [
        require("./plugins/css-grid")(["responsive"]),
        require("./plugins/scale")(["hover"])
    ]
};
