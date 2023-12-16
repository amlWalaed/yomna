import { appPlugin } from "./plugins/tw-plugins";
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./*.php", "./pages/*.php"],
    theme: {
        extend: {},
    },
    plugins: [require("@tailwindcss/forms"), appPlugin],
};
