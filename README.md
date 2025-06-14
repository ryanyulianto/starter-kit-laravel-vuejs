# Starter Kit Laravel 12 & Vue 3

Ini adalah starter kit komprehensif yang dirancang untuk mempercepat pengembangan aplikasi web menggunakan Laravel 12 sebagai backend dan Vue 3 dengan Inertia.js sebagai frontend. Proyek ini mengintegrasikan alat-alat modern seperti Vite untuk bundling aset, Tailwind CSS 4 untuk styling, dan TypeScript untuk pengembangan yang lebih terstruktur dan aman.

## Fitur Utama:

-   **Laravel 12**: Framework PHP yang kuat dan elegan untuk pengembangan backend.
-   **Vue 3**: Framework JavaScript progresif untuk membangun antarmuka pengguna yang interaktif.
-   **Inertia.js**: Menjembatani Laravel dan Vue, memungkinkan Anda membangun aplikasi SPA tanpa API.
-   **Vite**: Bundler aset generasi berikutnya yang cepat untuk pengembangan frontend.
-   **Tailwind CSS 4**: Framework CSS utility-first untuk desain yang cepat dan responsif.
-   **TypeScript**: Menambahkan tipe statis ke JavaScript untuk kode yang lebih andal dan mudah dipelihara.
-   **ESLint & Prettier**: Untuk menjaga konsistensi kode dan kualitas.
-   **Lucide Vue Next**: Koleksi ikon yang dapat disesuaikan.
-   **Reka UI**: Komponen UI yang dapat digunakan kembali.

## Instalasi dan Penggunaan:

1.  **Clone repositori:**
    ```bash
    git clone <URL_REPOSITORI_ANDA>
    cd starter-kit-laravel-12-vue
    ```

2.  **Instal dependensi PHP:**
    ```bash
    composer install
    ```

3.  **Instal dependensi JavaScript:**
    ```bash
    npm install
    ```

4.  **Konfigurasi Environment:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    Edit file `.env` dan sesuaikan konfigurasi database Anda.

5.  **Jalankan Migrasi Database dan Seeder:**
    ```bash
    php artisan migrate --seed
    ```

6.  **Jalankan Server Pengembangan:**
    ```bash
    npm run dev
    ```

7.  **Akses Aplikasi:**
    Buka browser Anda dan kunjungi `http://localhost:8000` (atau port yang dikonfigurasi di `.env`).

## Skrip yang Tersedia:

-   `npm run dev`: Menjalankan server pengembangan Vite.
-   `npm run build`: Membangun aset produksi.
-   `npm run build:ssr`: Membangun aset produksi untuk Server-Side Rendering (SSR).
-   `npm run format`: Memformat kode menggunakan Prettier.
-   `npm run format:check`: Memeriksa format kode dengan Prettier.
-   `npm run lint`: Menjalankan ESLint untuk memeriksa masalah kode.