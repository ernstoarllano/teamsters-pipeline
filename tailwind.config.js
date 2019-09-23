module.exports = {
    theme: {
        extend: {}
    },
    variants: {
        borderWidth: ["last"]
    },
    plugins: [
        require("./plugins/css-grid")(["responsive"]),
        require("./plugins/scale")(["hover"]),
        require("./plugins/transition")([])
    ]
};
