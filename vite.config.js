import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import { copyFileSync, mkdirSync, existsSync, readdirSync } from 'fs';
import { join, dirname } from 'path';
import { fileURLToPath } from 'url';

// Get __dirname equivalent in ES modules
const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

// Plugin untuk menyalin file blog ke dist
function copyBlogFiles() {
    return {
        name: 'copy-blog-files',
        writeBundle() {
            const blogDir = join(__dirname, 'blog');
            const distBlogDir = join(__dirname, 'dist', 'blog');

            // Buat directory blog di dist jika belum ada
            if (!existsSync(distBlogDir)) {
                mkdirSync(distBlogDir, { recursive: true });
            }

            // Copy semua file HTML dari blog ke dist/blog
            if (existsSync(blogDir)) {
                const files = readdirSync(blogDir);
                files.forEach(file => {
                    if (file.endsWith('.html')) {
                        copyFileSync(
                            join(blogDir, file),
                            join(distBlogDir, file)
                        );
                        console.log(`✓ Copied: ${file} to dist/blog/`);
                    }
                });
            }
        }
    };
}

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/js/app.js',
                'resources/css/output.css',
            ],
            refresh: true,
        }),
        copyBlogFiles(),
    ],
});
