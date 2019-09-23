module.exports = function(variants) {
    return function({ addUtilities }) {
        addUtilities(
            {
                ".transition": {
                    transition: "transform 0.25s ease-in-out"
                }
            },
            variants
        );
    };
};
