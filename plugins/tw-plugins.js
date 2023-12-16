import plugin from "tailwindcss/plugin";

export const appPlugin = plugin(function ({ addComponents, addUtilities }) {
    addComponents({
        ".text-error": {
            "@apply text-xs font-medium capitalize text-red-500": {},
        },
    });
});
