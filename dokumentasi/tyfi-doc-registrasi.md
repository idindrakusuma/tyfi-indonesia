# Dokumentasi Registrasi 
<!-- Indra Kusuma - versi 0.1 -->
Berisi mengenai konten utama Regsitrasi

## Daftar Isi
- SEO Konten & Footer & Background
- Lokasi Asset Registasi
- Persyaratan
- Isi Formulir Biodata
- Organisasi
- Validation

### SEO Konten & Footer
untuk mengubah konten SEO silahkan ubah file `main_reg.php` di 
```
application/views/registrasi/main_reg.php
```
dan untuk konten SEOnya berupa baris kode 
```
<meta name="keyword" content="isi dan sesuaikan">
<meta name="description" content="isi dengan deksripsi singkat ">
<meta property="og:url" content="<?=base_url();?>" />
<meta property="og:image" content="ubah dengan link gambar" />
<meta name="author" content="sesuaikan authornya">
```
selain kode diatas, pada file `main_reg.php`, Anda juga bisa merubah deksripsi footer dan background registrasi :)

### Lokasi Asset Registasi
silahkan akses di
```
assets/registrasi
```

### Persyaratan
silahkan akses di 
```
application/views/registrasi/konten/syarat.php
```

### Isi Formulir Biodata
silahkan akses di 
```
application/views/registrasi/konten/biodata.php
```

### Isi Organisasi
silahkan akses di 
```
application/views/registrasi/konten/gereja.php
```

### JS Validation
silahkan akses di 
```
assets/registrasi/js/paper-bootstrap-wizard.js
```