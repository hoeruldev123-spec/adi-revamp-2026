# PDR – Integrasi Form Builder dengan Custom Landing Page CI4

## 1. Konsep Utama

Form Builder dirancang sebagai **centralized form management system** yang dapat digunakan oleh berbagai landing page event.

Landing page setiap event **tidak dibuat menggunakan Form Builder**.

Landing page tetap dapat dikembangkan secara bebas oleh developer menggunakan desain, layout, animasi, dan struktur HTML/CSS/JS yang berbeda untuk setiap event.

Form Builder hanya bertanggung jawab terhadap:

* Konfigurasi form
* Rendering form
* Validasi form
* Submission
* Penyimpanan data
* Event identification
* Admin dashboard
* Reporting
* Export Excel

Dengan pendekatan ini, developer tidak perlu membuat sistem form dan database baru setiap kali membuat landing page event.

---

# 2. Arsitektur Sistem

Arsitektur yang disarankan:

```text
                    ┌─────────────────────┐
                    │    Admin Dashboard  │
                    │                     │
                    │ Create Event        │
                    │ Build Form          │
                    │ View Registrations  │
                    │ Export Excel        │
                    └──────────┬──────────┘
                               │
                               ▼
                    ┌─────────────────────┐
                    │     Form Builder    │
                    │                     │
                    │ Event Configuration │
                    │ Form Configuration  │
                    │ Validation          │
                    │ Submission Engine   │
                    └──────────┬──────────┘
                               │
                               ▼
                         ┌───────────┐
                         │   MySQL   │
                         └───────────┘
                               ▲
                               │
                               │
        ┌──────────────────────┴──────────────────────┐
        │                                             │
        ▼                                             ▼
┌─────────────────────┐                     ┌─────────────────────┐
│ Landing Page Event 1│                     │ Landing Page Event 2│
│                     │                     │                     │
│ Custom Development  │                     │ Custom Development  │
│ Custom Hero         │                     │ Custom Hero         │
│ Custom Design       │                     │ Custom Design       │
│                     │                     │                     │
│ Form Event ID: 001  │                     │ Form Event ID: 002  │
└─────────────────────┘                     └─────────────────────┘
```

---

# 3. Landing Page Tetap Custom

Setiap event dapat memiliki landing page yang berbeda.

Contoh:

### Event A

Landing page:

```text
/event/enterprise-ai
```

Design:

* Hero dengan background video
* Form berada di sebelah kanan hero
* CTA berbeda
* Layout khusus event

### Event B

Landing page:

```text
/event/data-platform
```

Design:

* Hero full width
* Form berada di section kedua
* CTA berbeda
* Layout berbeda

Kedua landing page tetap dapat menggunakan **Form Builder yang sama**.

---

# 4. Form Dipanggil oleh Landing Page

Developer dapat memanggil form berdasarkan **Event ID**.

Contoh:

```php
<?= renderEventForm('EVT-2026-DATAIKU-001'); ?>
```

atau:

```php
<?= $formBuilder->render('EVT-2026-DATAIKU-001'); ?>
```

Form Builder kemudian mengambil konfigurasi event dan field dari database dan menghasilkan HTML form secara otomatis.

---

# 5. Form Dapat Ditempatkan di Hero

Form tidak memiliki posisi/layout yang fixed.

Developer bebas menentukan lokasi form pada landing page.

Contoh:

```text
┌────────────────────────────────────────────────────┐
│                    HERO SECTION                    │
│                                                    │
│  Akselerasi Enterprise AI      ┌────────────────┐ │
│  dengan Dataiku                │ Nama Lengkap   │ │
│                                │ Email          │ │
│  Description                   │ Perusahaan     │ │
│                                │ Jabatan        │ │
│  [Learn More]                  │                │ │
│                                │ [ DAFTAR ]     │ │
│                                └────────────────┘ │
└────────────────────────────────────────────────────┘
```

Developer cukup menentukan container form:

```html
<div class="hero-form">
    <?= renderEventForm('EVT-2026-DATAIKU-001'); ?>
</div>
```

CSS dan styling dapat mengikuti desain landing page masing-masing.

---

# 6. Integrasi dengan CI4

Karena landing page menggunakan CodeIgniter 4, Form Builder harus menyediakan fungsi/helper yang dapat dipanggil dari view.

Contoh:

```php
<?= eventForm('EVT-2026-DATAIKU-001'); ?>
```

atau menggunakan service:

```php
$formBuilder = service('formBuilder');

echo $formBuilder->render('EVT-2026-DATAIKU-001');
```

Implementasi final dapat disesuaikan dengan struktur aplikasi CI4 yang digunakan.

---

# 7. Event ID Sebagai Identifier

Setiap form harus memiliki Event ID unik.

Contoh:

```text
EVT-2026-DATAIKU-001
EVT-2026-SNOWFLAKE-002
EVT-2026-AWS-003
```

Event ID menjadi penghubung antara:

```text
Landing Page
      ↓
Form
      ↓
Event
      ↓
Registration
      ↓
Database
      ↓
Admin Dashboard
```

Dengan demikian, meskipun landing page dibuat secara terpisah, sistem tetap mengetahui data tersebut berasal dari event mana.

---

# 8. Submission Form

Ketika user melakukan submit:

```text
User Submit
     ↓
Form Validation
     ↓
Form Builder Endpoint
     ↓
Identify Event ID
     ↓
Validate Fields
     ↓
Save Registration
     ↓
Save Registration Values
     ↓
Success Response
```

Form tidak perlu membuat endpoint submission sendiri untuk setiap landing page.

---

# 9. Dua Metode Integrasi

Sistem sebaiknya mendukung minimal dua metode integrasi.

## Method 1 – Native CI4 Integration

Untuk landing page yang berada di dalam aplikasi CI4 yang sama.

Contoh:

```php
<?= eventForm('EVT-2026-DATAIKU-001'); ?>
```

Keuntungan:

* Simple
* Cepat
* Tidak membutuhkan iframe
* Styling lebih mudah dikontrol
* Dapat menggunakan CSS landing page secara langsung

---

# 10. Method 2 – Embed Form

Jika landing page berada pada project berbeda, sistem dapat menyediakan metode embed.

Contoh:

```html
<div id="event-form"></div>

<script src="https://form.domain.com/embed.js"></script>

<script>
    EventForm.render({
        event: "EVT-2026-DATAIKU-001",
        target: "#event-form"
    });
</script>
```

Dengan demikian, landing page yang berbeda framework atau berbeda project tetap dapat menggunakan Form Builder.

---

# 11. Optional: iframe Integration

Sebagai alternatif paling sederhana, sistem dapat menyediakan iframe:

```html
<iframe
    src="https://form.domain.com/register/EVT-2026-DATAIKU-001"
    width="100%"
    frameborder="0">
</iframe>
```

Namun iframe sebaiknya menjadi **opsi tambahan**, bukan metode utama, karena styling dan responsive behavior lebih sulit dikontrol.

---

# 12. Rekomendasi Integrasi

Prioritas metode integrasi:

### Priority 1

**Native CI4 Helper / Service**

Untuk landing page yang berada dalam project CI4.

```php
<?= eventForm('EVT-2026-DATAIKU-001'); ?>
```

### Priority 2

**JavaScript Embed**

Untuk landing page dari project berbeda.

```javascript
EventForm.render({
    event: "EVT-2026-DATAIKU-001",
    target: "#event-form"
});
```

### Priority 3

**iframe**

Digunakan sebagai fallback.

---

# 13. Styling Form

Form Builder harus memisahkan antara:

### Form Logic

Dikelola oleh Form Builder:

* Field
* Validation
* Submission
* Event ID
* Database

### Form Presentation

Dapat dikontrol oleh landing page:

* Width
* Font
* Color
* Border
* Button
* Spacing
* Background
* Responsive layout

Dengan demikian, form dapat mengikuti desain masing-masing landing page.

---

# 14. Contoh Implementasi pada Hero

Landing page:

```html
<section class="hero">

    <div class="hero-content">

        <span class="badge">
            AI-POWERED. ENTERPRISE READY.
        </span>

        <h1>
            Akselerasi Kapabilitas
            Enterprise AI dengan Dataiku
        </h1>

        <p>
            Temukan bagaimana Enterprise AI dapat
            mempercepat transformasi bisnis.
        </p>

    </div>

    <div class="hero-form">

        <?= eventForm('EVT-2026-DATAIKU-001'); ?>

    </div>

</section>
```

Developer tetap bebas mendesain:

```css
.hero {
    display: grid;
    grid-template-columns: 1fr 400px;
}

.hero-form {
    /* Custom styling */
}
```

Form Builder tidak mengatur layout hero tersebut.

---

# 15. Keuntungan Arsitektur Ini

Dengan arsitektur ini, proses pembuatan event menjadi jauh lebih cepat.

Tanpa Form Builder:

```text
Event Baru
    ↓
Develop Landing Page
    ↓
Develop Form
    ↓
Develop Validation
    ↓
Develop Database
    ↓
Develop Submission
    ↓
Develop Admin Page
    ↓
Develop Export Excel
```

Dengan Form Builder:

```text
Event Baru
    ↓
Develop Landing Page
    ↓
Create Event di Admin
    ↓
Configure Form
    ↓
Panggil Event ID
    ↓
SELESAI
```

Developer hanya fokus pada **landing page dan user experience**, sedangkan sistem form dan data dikelola oleh Form Builder.

---

# 16. Contoh Workflow Event

Untuk event:

**Akselerasi Kapabilitas Enterprise AI dengan Dataiku**

Developer membuat landing page:

```text
https://domain.com/event/enterprise-ai-dataiku
```

Admin membuat event:

```text
Event ID:
EVT-2026-DATAIKU-001

Event Name:
Akselerasi Kapabilitas Enterprise AI dengan Dataiku
```

Admin membuat form:

```text
Nama Lengkap
Email
Nomor Telepon
Perusahaan
Jabatan
```

Developer kemudian memanggil:

```php
<?= eventForm('EVT-2026-DATAIKU-001'); ?>
```

Form otomatis muncul di landing page.

Ketika user submit:

```text
EVT-2026-DATAIKU-001
        ↓
Registration
        ↓
MySQL
        ↓
Admin Dashboard
        ↓
Export Excel
```

---

# 17. Prinsip Arsitektur

Sistem harus mengikuti prinsip:

> **Landing Page is Custom, Form is Reusable, Data is Centralized.**

Artinya:

**Landing Page**

Bebas dibuat berbeda untuk setiap event.

**Form**

Dikelola secara terpusat melalui Form Builder.

**Data**

Disimpan secara terpusat di MySQL dan dipisahkan menggunakan Event ID.

**Dashboard**

Digunakan untuk mengelola seluruh event dan registrasi.

---

# 18. Updated Acceptance Criteria

Selain acceptance criteria sebelumnya, sistem harus memenuhi:

1. Form dapat dipanggil dari halaman CI4 menggunakan Event ID.
2. Form dapat ditempatkan pada Hero Section.
3. Form dapat ditempatkan pada section manapun pada landing page.
4. Landing page tidak harus menggunakan template yang sama.
5. Setiap event dapat memiliki desain landing page yang berbeda.
6. Developer tidak perlu membuat form baru secara hardcoded.
7. Developer cukup memanggil Event ID untuk menampilkan form.
8. Form dapat digunakan oleh lebih dari satu landing page apabila diperlukan.
9. Submission otomatis terhubung dengan Event ID.
10. Data registrasi otomatis masuk ke database event terkait.
11. Admin dapat mengelola form tanpa melakukan perubahan kode landing page.
12. Sistem dapat dikembangkan untuk mendukung JavaScript Embed pada project berbeda.
13. Styling form dapat disesuaikan dengan desain landing page.
14. Perubahan field melalui Form Builder tidak membutuhkan development ulang landing page selama container/integrasi form tetap tersedia.

---

# 19. Target Akhir

Target akhir sistem adalah menciptakan **centralized Event Registration Form Platform** yang dapat digunakan berulang kali untuk seluruh kebutuhan event.

Setiap kali terdapat event baru:

```text
1. Developer membuat Landing Page
2. Admin membuat Event di Form Builder
3. Admin menentukan Field Form
4. Developer memasukkan Event ID ke Landing Page
5. Form otomatis muncul
6. Peserta melakukan registrasi
7. Data masuk ke MySQL
8. Admin melihat data di Dashboard
9. Admin Export Excel
```

Dengan model ini, **development landing page tetap fleksibel dan custom**, tetapi sistem registrasi, database, dashboard, dan reporting tidak perlu dibuat ulang untuk setiap event.
