# JasaHukum - Landing Page Kantor Hukum

Landing page untuk kantor hukum TRI SULASMONO, S.H & PARTNER yang dibangun dengan Laravel dan Vite.

## 🚀 Deployment ke Vercel

Project ini menggunakan static export yang di-deploy ke Vercel dengan konfigurasi khusus untuk file blog.

### Setup Lokal

1. Install dependencies:
```bash
npm install
```

2. Build untuk production:
```bash
npm run build
```

3. File hasil build akan ada di direktori `dist/` dan siap untuk deploy.

### Konfigurasi Khusus

Project ini memiliki custom plugin Vite di `vite.config.js` yang otomatis menyalin file HTML dari folder `blog/` ke `dist/blog/` saat proses build.

### Struktur File Blog

File blog HTML statis ditempatkan di:
```
blog/
  ├── cara-mendirikan-pt-yang-benar-sesuai-hukum-indonesia.html
  ├── hak-asuh-anak-pasca-perceraian.html
  └── memahami-hak-tersangka-dalam-proses-penyidikan-pidana.html
```

Setelah build, file-file ini akan otomatis di-copy ke:
```
dist/blog/
  ├── cara-mendirikan-pt-yang-benar-sesuai-hukum-indonesia.html
  ├── hak-asuh-anak-pasca-perceraian.html
  └── memahami-hak-tersangka-dalam-proses-penyidikan-pidana.html
```

### Konfigurasi Vercel

File `vercel.json` telah ditambahkan untuk routing file blog:
- Routes ke `/blog/*` akan di-serve sebagai static files
- Cache headers di-set untuk optimal performance

### Deploy ke Vercel

1. Push kode ke repository GitHub
2. Connect repository ke Vercel
3. Set **Output Directory** ke `dist`
4. Deploy!

### Troubleshooting

Jika mengalami error 404 pada halaman blog:
1. Pastikan sudah menjalankan `npm run build` terbaru
2. Check apakah file blog ada di `dist/blog/`
3. Verify `vercel.json` sudah ter-deploy
4. Clear cache Vercel dan redeploy

## 🛠️ Tech Stack

- **Framework**: Laravel 11
- **Build Tool**: Vite 6
- **CSS**: TailwindCSS 3
- **Deployment**: Vercel
- **Animation**: AOS (Animate On Scroll)

## 📝 Development

### Menambah Blog Baru

1. Buat file HTML baru di folder `blog/`
2. Pastikan nama file menggunakan format SEO-friendly (misal: `judul-artikel.html`)
3. Tambahkan link di `resources/views/beranda.blade.php`
4. Run `npm run build`
5. Commit dan push ke GitHub

### Modifikasi Styles

- Main styles: `resources/css/app.css`
- Custom styles: `resources/css/output.css`
- Tailwind config: `tailwind.config.js`

## 📞 Contact

- **Email**: lawfirmthree@gmail.com
- **WhatsApp**: +62 859-1069-53875
- **Alamat**: Dusun Krajan RT.001 RW.009 Desa Dadapan Kecamatan Kabat Kabupaten Banyuwangi Provinsi Jawa Timur Indonesia Kode Pos 68461

## 📄 License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
