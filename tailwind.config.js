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
                ThemaColor: "#CCCC99",
                TexasRose: "#ffad5b",
                ThemaColorComplementary: "#5badff",
                ThemaColorInversion: "#0052a4",
                ThemaColorHover: "#ffcea0",
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
