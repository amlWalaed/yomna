import { appPlugin } from "./plugins/tw-plugins";
import animated from "tailwindcss-animated";
import { iconsPlugin, getIconCollections } from "@egoist/tailwindcss-icons";
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./*.php", "./pages/*.php"],
    theme: {
        extend: {},
    },
    plugins: [
        require("@tailwindcss/forms"),
        animated,
        iconsPlugin({
            collections: getIconCollections(["heroicons"]),
        }),
        appPlugin,
    ],
};
