module.exports = function(variants) {
    return function({ addUtilities }) {
        addUtilities(
            {
                ".scale": {
                    transform: "scale(1.1)"
                }
            },
            variants
        );
    };
};
