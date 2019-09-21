module.exports = function(variants) {
    return function({ addUtilities }) {
        addUtilities(
            {
                ".grid": {
                    display: "grid"
                },
                ".grid-1\\/3": {
                    gridTemplateColumns: "repeat(3, 1fr)"
                },
                ".grid-1\\/4": {
                    gridTemplateColumns: "repeat(4, 1fr)"
                },
                ".grid-gap-normal": {
                    gridGap: "30px"
                }
            },
            variants
        );
    };
};
