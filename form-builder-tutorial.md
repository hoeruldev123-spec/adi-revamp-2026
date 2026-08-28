# Tutorial: Mengintegrasikan Form Builder ke Landing Page Event Baru

Tutorial ini menjelaskan cara menampilkan form registrasi dari **Form Builder** ke landing page event yang Anda buat secara manual. Sesuai prinsip arsitektur:

> **Landing Page is Custom, Form is Reusable, Data is Centralized.**

Anda bebas mendesain landing page (hero, layout, animasi, CSS) sesuka hati. Untuk bagian form, cukup panggil **Event ID** — Form Builder yang akan merender, memvalidasi, menyimpan, dan menampilkan datanya di admin dashboard.

---

## 1. Alur Kerja Singkat

```text
1. Admin buat Event di Admin Dashboard      → dapat Event ID (mis. EVT-2026-DATAIKU-001)
2. Admin susun Form (tambah field)          → form otomatis terikat ke Event ID
3. Developer panggil Event ID di landing page → form muncul tanpa coding form
4. User submit                              → data masuk ke database per Event ID
5. Admin lihat & Export Excel di Dashboard
```

---

## 2. Persiapan di Sisi Admin (untuk Admin)

1. Login ke `/admin/login`.
2. Buka menu **Events → Create Event**.
   - Isi **Event Code** dengan format `EVT-TAHUN-PREFIX-001`, contoh:
     ```
     EVT-2026-DATAIKU-001
     ```
   - Isi nama event, lokasi, tanggal, status `active`.
3. Buka **Forms → Create Form**, pilih event yang baru dibuat, lalu **Simpan & Tambah Field**.
4. Tambahkan field (Nama Lengkap, Email, dll) lewat tombol **Add Field**.
   - `Label` = teks yang dilihat user.
   - `Field Name` = nama mesin (auto dari label, mis. `nama_lengkap`).
   - `Type` = text / email / tel / number / date / textarea / dropdown / radio / checkbox / hidden.
   - Centang **Wajib diisi** bila perlu.
5. Selesai. Event ID sudah siap dipanggil di landing page.

> Event ID inilah "kabel penghubung" antara landing page → form → event → database → dashboard.

---

## 3. Metode 1 — Native CI4 (Priority 1, Rekomendasi)

Gunakan metode ini bila landing page berada **di dalam project CI4 yang sama**.

### 3.1 Via Helper

Di dalam view landing page Anda:

```php
<section class="hero">
    <div class="hero-content">
        <h1>Akselerasi Kapabilitas Enterprise AI dengan Dataiku</h1>
        <p>Temukan bagaimana Enterprise AI mempercepat transformasi bisnis.</p>
    </div>

    <div class="hero-form">
        <?= eventForm('EVT-2026-DATAIKU-001') ?>
    </div>
</section>
```

### 3.2 Via Service

```php
<?php
$formBuilder = service('formBuilder');
echo $formBuilder->render('EVT-2026-DATAIKU-001');
```

Form akan langsung dirender sebagai `<form>` lengkap (field, validasi, CSRF, tombol submit). Submit otomatis dikirim ke `/form/submit` dan diikat ke Event ID tersebut.

---

## 4. Metode 2 — JavaScript Embed (Priority 2)

Gunakan bila landing page berada di **project / framework berbeda** (React, Next.js, WordPress, dst).

### 4.1 Sisipkan container + script

```html
<div id="event-form"></div>

<script src="https://form.domain.com/assets/js/form-builder-embed.js"></script>
<script>
    EventForm.render({
        event:  "EVT-2026-DATAIKU-001",
        target: "#event-form"
    });
</script>
```

Script akan mengambil konfigurasi form dari endpoint `GET /api/forms/{event}`, lalu membangun form di dalam `#event-form`. Saat submit, respons JSON ditangani otomatis dan menampilkan pesan sukses di tempat.

### 4.2 Bila butuh base URL berbeda

```javascript
EventForm.render({
    event:   "EVT-2026-DATAIKU-001",
    target:  "#event-form",
    baseUrl: "https://form.domain.com/"
});
```

---

## 5. Metode 3 — iframe (Priority 3, Fallback)

Paling sederhana, cocok sebagai cadangan bila metode lain tidak memungkinkan.

```html
<iframe
    src="https://form.domain.com/register/EVT-2026-DATAIKU-001"
    width="100%"
    height="640"
    frameborder="0"
    style="border:0;">
</iframe>
```

> Catatan: styling & responsive lebih sulit dikontrol pada iframe, jadi jadikan opsi tambahan bukan utama.

---

## 6. Contoh Landing Page Lengkap (Hero + Form)

```php
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero">
    <div class="hero-content">
        <span class="badge">AI-POWERED. ENTERPRISE READY.</span>
        <h1>Akselerasi Kapabilitas Enterprise AI dengan Dataiku</h1>
        <p>Temukan bagaimana Enterprise AI dapat mempercepat transformasi bisnis.</p>
    </div>

    <!-- Form Builder dipanggil di sini -->
    <div class="hero-form">
        <?= eventForm('EVT-2026-DATAIKU-001') ?>
    </div>
</section>
<?= $this->endSection() ?>
```

CSS landing page mengatur posisi bebas:

```css
.hero {
    display: grid;
    grid-template-columns: 1fr 400px;
}
.hero-form {
    /* Custom styling milik Anda */
}
```

Form Builder **hanya mengurus logic** (field, validasi, submit, event ID, database). **Presentation** (lebar, font, warna, tombol, spacing) sepenuhnya milik landing page Anda karena form menggunakan class Bootstrap standar (`form-control`, `btn`, `mb-3`) yang bisa di-override via CSS.

---

## 7. Kustomisasi Styling

Form dirender dengan markup Bootstrap 5 standar, sehingga Anda bisa:

- Meng-override class via CSS landing page (`.fb-form-form`, `.fb-field`, `.fb-submit`, `.fb-label`).
- Menyelaraskan warna tombol submit dengan tema event.
- Mengatur lebar container `.hero-form`.

Contoh:

```css
.hero-form .fb-submit {
    background-color: #6d28d9;
    border: none;
    border-radius: 999px;
}
.hero-form .fb-label {
    font-weight: 600;
}
```

---

## 8. Setelah User Submit

```text
User Submit
   ↓ Form Validation (otomatis dari konfigurasi field)
   ↓ Form Builder Endpoint (/form/submit)
   ↓ Identify Event ID
   ↓ Save Registration + Registration Values
   ↓ Success Response / Redirect ?success=1
```

- Data otomatis terikat ke **Event ID** (tidak perlu endpoint submit manual di landing page).
- Bila menggunakan native/iframe, user diarahkan balik ke halaman dengan `?success=1` dan menampilkan pesan sukses dari konfigurasi form.
- Bila menggunakan JS embed, pesan sukses tampil langsung di dalam container.

---

## 9. Melihat & Mengekspor Data (Admin)

1. Buka **Registrations** di admin.
2. Filter berdasarkan event, lalu klik **Export Excel** untuk mengunduh CSV (UTF-8, langsung terbuka di Excel) berisi seluruh field form sebagai kolom.
3. Klik baris registrasi untuk melihat detail per-field.

---

## 10. Tips & Aturan Emas

- **Jangan hardcode form.** Cukup panggil Event ID. Menambah/mengubah field cukup di admin — landing page tidak perlu diubah selama container pemanggil tetap ada.
- Satu Event ID = satu form (otomatis terikat).
- Bila event belum dibuat / tidak aktif, `eventForm()` mengembalikan string kosong (tidak memecah halaman).
- Untuk project berbeda, selalu utamakan **JS Embed**而非 iframe.
- Event ID bersifat unik dan menjadi identitas seluruh alur data.

---

## 11. Ringkasan Pemanggilan

| Kebutuhan | Cara |
|-----------|------|
| Landing page di CI4 sama | `<?= eventForm('EVT-...') ?>` |
| Landing page di CI4 sama (service) | `service('formBuilder')->render('EVT-...')` |
| Landing page project beda | `EventForm.render({ event, target })` + `embed.js` |
| Fallback cepat | `<iframe src="/register/EVT-...">` |
| Ambil config (JSON) | `GET /api/forms/{event}` |
| Endpoint submit | `POST /form/submit` |

Dengan pola ini, setiap event baru hanya butuh: **buat landing page → buat event di admin → panggil Event ID → selesai.**
