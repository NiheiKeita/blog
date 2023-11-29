/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                // ThemaColor: "#CCCC99",3469EF
                ThemaColor: "#3679FF",
                Linen: "#FBECEC",
                ThemaColorComplementary: "#5badff",
                ThemaColorInversion: "#0052a4",
                // ThemaColorHover: "#ffcea0",
                ThemaColorHover: "#2669DF",
                BoardBG: "#006633",
                BoardBorder: "#b2771f",
            },
            fontFamily: {
                body: [
                    "Hiragino Sans",
                    "ヒラギノ角ゴシック",
                    "メイリオ",
                    "Meiryo",
                    "MS Ｐゴシック",
                    "MS PGothic",
                    "sans-serif",
                    "YuGothic",
                    "Yu Gothic",
                ],
            },
        },
    },
    plugins: [],
};
