import { defineConfig } from "@sugarcube-sh/cli";

export default defineConfig({
    content: [
        "resources/views/**/*.blade.php"
    ],
    components: "resources/css/components",
    cube: "resources/css/cube",
    variables: {
        permutations: [
            { input: { mode: "light" }, selector: ":root" },
            {
                input: { mode: "dark" },
                selector: ":root",
                atRule: "@media (prefers-color-scheme: dark)"
            }
        ]
    }
});
