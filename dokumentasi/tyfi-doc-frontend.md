# Dokumentasi Front End Website
Dokumentasi Front End berisi mengenai dokumentasi untuk website utama atau _Landing Page_ dari website utama.
<!-- dokumentasi v.0.01 -->
<!-- Indra Kusuma - @idindrakusuma -->

<!-- konten daftar isi -->
## Daftar Isi
- SEO Konten
- Header / Menu Atas / Logo
- Slideshow
- about
- speaker
- schedule
- tunggu apa lagi
- contact us
    - Merubah pesan feedback

### SEO Konten
silahkan tambahkan / ubah pada file `main.php` di
```
application/views/main.php
```

### Header / Menu Atas / Logo
Untuk merubah konten menu, silahkan ubah file `header.php` di
```
application/views/layouts/header.php
```

### Slideshow
Untuk merubah konten `slideshow` bisa diubah di
```
application/views/content/slideshow.php
```

### About / Tentang
untuk merubah gambar dan deksripsi(non-modal) di
```
application/views/content/about.php
```
untuk merubah deksripsi di modal, silahkan ubah di
```
application/views/content/modal/m_about.php
```

### Speaker
untuk merubah foto speaker, nama dan julukan speker
```
application/views/content/speaker.php
```
dan untuk merubah detail modal speaker bisa dirubah di
```
application/views/content/modal/m_speaker.php
```

### Schedule
untuk merubah kontenya, silahkan dirubah di file `rundown.php`
```
application/views/content/rundown.php
```

### Testimonial
untuk merubah konten testimonial, silahkan dirubah di `testimoni.php`
```
application/views/content/testimoni.php
```

### GALLERY EVENT
untuk merubah urutan foto dan daftar foto yang digunakan, silahkan ubah file `galeri.php`
```
application/views/content/galeri.php
```

### Tunggu Apalagi ?
untuk merubah link dan kalimat, silahkan ubah di `gabung.php`
```
application/views/content/gabung.php
```

### Contact Us
untuk merubah konten, silahkan ubah file `contact.php`
```
application/views/content/contact.php
```

#### Merubah Pesan Feedback
silahkan ubah pada pesan `$this->session->set_flashdata` pada function `addFeedback` pada file 
```
application/controller/Main.php
```