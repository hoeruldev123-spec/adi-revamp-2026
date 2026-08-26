# PDR – Admin Foundation, Authentication, RBAC & Admin Dashboard

## 1. Project Overview

Dokumen ini merupakan Product/Project Design Requirement (PDR) untuk pengembangan **Admin Foundation** pada existing application berbasis **CodeIgniter 4 (CI4)**.

Fitur ini menjadi fondasi sebelum pengembangan **Multi-Event Form Builder**.

Saat ini project telah memiliki branch:

```text
main
staging
```

`main` digunakan sebagai production, sedangkan `staging` digunakan untuk testing dan review.

Pengembangan fitur ini akan dibuat pada feature branch baru yang berasal dari `staging` terbaru.

```text
staging
    │
    └── feature/admin-foundation
```

Fitur yang dikembangkan meliputi:

1. Authentication
2. User Management
3. Role-Based Access Control (RBAC)
4. Admin Layout
5. Admin Dashboard
6. Permission Management

Fondasi ini nantinya akan digunakan oleh modul berikutnya, terutama:

* Event Management
* Form Builder
* Registration Management
* Registration Reporting
* Excel Export

---

# 2. Tujuan

Pengembangan Admin Foundation bertujuan untuk menyediakan sistem administrasi yang aman dan terstruktur sehingga seluruh fitur backend dapat dikelola melalui satu dashboard.

Tujuan utama:

* Menyediakan login admin.
* Membatasi akses halaman admin.
* Mengelola user admin.
* Menentukan role setiap user.
* Menentukan permission berdasarkan role.
* Menyediakan dashboard admin.
* Menjadi fondasi untuk modul Event dan Form Builder.
* Memastikan fitur baru dapat menggunakan sistem authorization yang sama.

---

# 3. Scope

## In Scope

### Authentication

* Login
* Logout
* Session management
* Password hashing
* Protected admin routes
* Login validation

### User Management

* List user
* Create user
* Edit user
* Activate/deactivate user
* Reset password

### RBAC

* Role management
* Permission management
* Assign role to user
* Assign permission to role
* Authorization middleware/filter

### Admin Dashboard

* Dashboard layout
* Sidebar
* Header
* Navigation
* Dashboard statistics
* Recent activity/event information

---

# 4. Out of Scope

Fitur berikut belum menjadi bagian dari tahap ini:

* Event Management
* Form Builder
* Registration Management
* Excel Export
* Email notification
* WhatsApp notification
* Event check-in
* Certificate generation

Fitur-fitur tersebut akan dikembangkan pada tahap berikutnya.

---

# 5. Git Development Strategy

Development dilakukan berdasarkan `staging` terbaru.

Branch:

```text
feature/admin-foundation
```

Flow:

```text
main
  │
  └── staging
        │
        └── feature/admin-foundation
```

Setelah development selesai:

```text
feature/admin-foundation
          │
          ▼
       staging
          │
       Testing
          │
        Review
          │
          ▼
         main
          │
          ▼
     Production
```

Branch `main` tidak digunakan secara langsung untuk development fitur.

---

# 6. Existing Project Compatibility

Fitur harus dikembangkan dengan mempertimbangkan bahwa aplikasi sudah berjalan.

Developer wajib melakukan audit terhadap existing project sebelum implementasi.

Hal yang harus diperiksa:

* Versi CodeIgniter 4
* Struktur folder
* Existing controller
* Existing model
* Existing migration
* Existing database
* Existing authentication
* Existing session
* Existing routes
* Existing helper
* Existing filter/middleware
* Existing CSS/JS
* Existing admin components jika ada

## Prinsip

> **Extend existing architecture, do not unnecessarily rebuild existing functionality.**

Jika existing project sudah memiliki authentication atau user table, fitur tersebut harus dievaluasi terlebih dahulu sebelum membuat struktur baru.

---

# 7. Authentication

Sistem membutuhkan authentication untuk mengakses area admin.

## Login

Admin mengakses:

```text
/admin/login
```

Form:

* Email/Username
* Password
* Remember Me (optional)
* Login button

Flow:

```text
User
 ↓
Login
 ↓
Validate Credentials
 ↓
Check User Status
 ↓
Create Session
 ↓
Check Role
 ↓
Admin Dashboard
```

Jika gagal:

```text
Login
 ↓
Invalid Credentials
 ↓
Error Message
```

---

# 8. User Status

User memiliki status minimal:

```text
Active
Inactive
```

User `Inactive` tidak dapat melakukan login.

Contoh:

```text
User A → Active → Can Login
User B → Inactive → Cannot Login
```

---

# 9. Password Security

Password tidak boleh disimpan dalam bentuk plaintext.

Password harus menggunakan password hashing yang aman dan mengikuti mekanisme yang direkomendasikan CodeIgniter 4/PHP.

Password harus diverifikasi menggunakan password verification mechanism, bukan membandingkan plaintext secara langsung.

---

# 10. Session Management

Setelah login berhasil, sistem membuat session.

Session minimal menyimpan:

```text
user_id
role_id / roles
authenticated = true
```

Session harus dihancurkan ketika user melakukan logout.

---

# 11. Protected Admin Routes

Seluruh halaman admin harus dilindungi authentication.

Contoh:

```text
/admin
/admin/dashboard
/admin/users
/admin/roles
/admin/permissions
```

User yang belum login:

```text
/admin/dashboard
        ↓
/admin/login
```

---

# 12. RBAC

Sistem menggunakan konsep:

> **Role-Based Access Control**

User tidak diberikan permission satu per satu secara langsung.

Struktur:

```text
User
  ↓
Role
  ↓
Permissions
```

Contoh:

```text
Amanda
  ↓
Marketing Admin
  ↓
View Events
Create Events
View Registrations
Export Registrations
```

---

# 13. Default Roles

Minimal sistem menyediakan:

## Super Admin

Memiliki seluruh permission.

```text
Super Admin
├── User Management
├── Role Management
├── Permission Management
├── Event Management
├── Form Management
└── Registration Management
```

## Admin

Memiliki akses operasional tetapi tidak dapat mengelola sistem RBAC.

Contoh:

```text
Admin
├── View Dashboard
├── Manage Events
├── Manage Forms
├── View Registrations
└── Export Data
```

## Event Admin

Memiliki akses yang berkaitan dengan event yang diberikan kepadanya.

```text
Event Admin
├── View Assigned Event
├── Manage Form
├── View Registration
└── Export Registration
```

Role dapat dikembangkan kemudian sesuai kebutuhan bisnis.

---

# 14. Permission

Permission dibuat granular agar dapat digunakan oleh modul-modul berikutnya.

Contoh:

```text
dashboard.view

users.view
users.create
users.edit
users.delete

roles.view
roles.create
roles.edit
roles.delete

permissions.view

events.view
events.create
events.edit
events.delete

forms.view
forms.create
forms.edit
forms.delete

registrations.view
registrations.export
registrations.delete
```

Dengan struktur ini, Form Builder nantinya dapat langsung menggunakan permission yang sama.

---

# 15. Database RBAC

Struktur database minimal:

```text
users
roles
permissions
user_roles
role_permissions
```

## users

```text
id
name
email
password
status
created_at
updated_at
```

## roles

```text
id
name
slug
description
created_at
updated_at
```

## permissions

```text
id
name
slug
description
created_at
updated_at
```

## user_roles

```text
id
user_id
role_id
```

## role_permissions

```text
id
role_id
permission_id
```

---

# 16. Relational Structure

```text
users
  │
  │
  ▼
user_roles
  │
  ▼
roles
  │
  ▼
role_permissions
  │
  ▼
permissions
```

Satu user dapat memiliki lebih dari satu role jika kebutuhan sistem nantinya mengharuskan.

Satu role dapat memiliki banyak permission.

---

# 17. Authorization

Authentication menjawab:

> Apakah user sudah login?

Authorization menjawab:

> Apakah user boleh melakukan tindakan tersebut?

Contoh:

User berhasil login tetapi tidak memiliki:

```text
users.delete
```

maka user tidak dapat menghapus user.

Authorization harus diterapkan pada level:

* Route
* Controller/action
* UI/menu jika diperlukan

UI hiding tidak boleh menjadi satu-satunya mekanisme security.

---

# 18. Admin Layout

Sistem menyediakan layout standar untuk seluruh halaman admin.

Struktur:

```text
┌─────────────────────────────────────────────┐
│ Header                                      │
├──────────────┬──────────────────────────────┤
│              │                              │
│ Sidebar      │ Content                      │
│              │                              │
│ Dashboard    │                              │
│ Events       │                              │
│ Forms        │                              │
│ Registrations│                              │
│ Users        │                              │
│ Roles        │                              │
│ Settings     │                              │
│              │                              │
└──────────────┴──────────────────────────────┘
```

Menu yang belum tersedia tetap dapat ditampilkan sebagai placeholder atau disembunyikan berdasarkan permission.

---

# 19. Sidebar Navigation

Sidebar minimal:

```text
Dashboard

EVENT MANAGEMENT
- Events
- Forms
- Registrations

USER MANAGEMENT
- Users
- Roles
- Permissions

System
- Settings
- Logout
```

Menu harus mengikuti permission user.

Contoh:

User tanpa permission:

```text
users.view
```

tidak melihat menu:

```text
Users
```

---

# 20. Admin Dashboard

Dashboard menampilkan informasi ringkas mengenai sistem.

Tahap pertama dapat menggunakan placeholder untuk data yang belum tersedia.

Contoh:

```text
┌─────────────────────────────────────────────┐
│ Dashboard                                   │
├──────────────┬──────────────┬───────────────┤
│ Total Events │ Registrants  │ Active Events │
│      -       │      -       │       -       │
└──────────────┴──────────────┴───────────────┘
```

Setelah modul Event dan Registration tersedia, statistik dapat dihubungkan dengan database.

---

# 21. User Management

Admin yang memiliki permission dapat mengakses:

```text
/admin/users
```

Fitur:

* List users
* Search
* Pagination
* Create user
* Edit user
* Activate/deactivate user
* Assign role
* Reset password

Kolom:

```text
Name
Email
Role
Status
Created At
Action
```

---

# 22. Role Management

Admin dapat melihat dan mengelola role.

Contoh:

```text
Role             Users    Status
----------------------------------
Super Admin        1      Active
Admin              3      Active
Event Admin        5      Active
```

Fitur:

* Create role
* Edit role
* Delete role
* Assign permission

---

# 23. Permission Management

Permission dapat dikelompokkan berdasarkan module.

Contoh:

```text
Dashboard
□ View Dashboard

Users
□ View Users
□ Create Users
□ Edit Users
□ Delete Users

Events
□ View Events
□ Create Events
□ Edit Events
□ Delete Events

Registrations
□ View Registrations
□ Export Registrations
```

---

# 24. Future Event-Level Authorization

Karena platform akan digunakan untuk banyak event, RBAC perlu dirancang agar dapat dikembangkan menjadi **event-level access control**.

Contoh:

```text
Event Admin A
    ↓
Event A
```

tidak dapat mengakses:

```text
Event B
```

Sedangkan:

```text
Super Admin
```

dapat mengakses seluruh event.

Fitur ini tidak wajib diimplementasikan pada tahap pertama jika Event Management belum tersedia, tetapi struktur harus memungkinkan pengembangan tersebut.

---

# 25. Integration dengan Modul Berikutnya

Admin Foundation harus menjadi foundation untuk modul:

```text
Admin Foundation
       │
       ├── Event Management
       │
       ├── Form Builder
       │
       ├── Registration
       │
       └── Reporting
```

Contoh permission yang nantinya digunakan Form Builder:

```text
forms.view
forms.create
forms.edit
forms.delete
```

Registration:

```text
registrations.view
registrations.export
registrations.delete
```

Event:

```text
events.view
events.create
events.edit
events.delete
```

---

# 26. Security Requirements

Minimal security requirements:

* Password hashing
* CSRF protection
* Server-side validation
* Input sanitization
* XSS protection
* SQL injection protection melalui Query Builder/Model CI4
* Session security
* Protected admin routes
* Authorization check
* Login rate limiting jika tersedia/diimplementasikan
* Secure logout

Permission check harus dilakukan di server-side.

---

# 27. Suggested CI4 Structure

Struktur harus menyesuaikan existing project.

Sebagai gambaran:

```text
app/
├── Controllers/
│   └── Admin/
│       ├── Dashboard.php
│       ├── Users.php
│       ├── Roles.php
│       └── Permissions.php
│
├── Models/
│   ├── UserModel.php
│   ├── RoleModel.php
│   └── PermissionModel.php
│
├── Filters/
│   ├── AuthFilter.php
│   └── PermissionFilter.php
│
├── Views/
│   └── admin/
│       ├── layouts/
│       ├── dashboard/
│       ├── users/
│       ├── roles/
│       └── permissions/
│
└── Database/
    └── Migrations/
```

**Catatan:** struktur final harus mengikuti struktur existing project setelah dilakukan audit.

---

# 28. Routing

Contoh routing:

```text
/admin/login

/admin
/admin/dashboard

/admin/users
/admin/users/create
/admin/users/edit/{id}

/admin/roles
/admin/roles/create
/admin/roles/edit/{id}

/admin/permissions
```

Route harus dilindungi authentication dan authorization sesuai kebutuhan.

---

# 29. Development Sequence

Pengembangan dilakukan secara bertahap:

### Phase 1 – Audit

* Audit existing CI4
* Audit database
* Audit authentication
* Audit routing
* Audit existing UI

### Phase 2 – Authentication

* User database
* Login
* Logout
* Session
* Protected routes

### Phase 3 – RBAC

* Roles
* Permissions
* User-role relation
* Role-permission relation
* Authorization filter

### Phase 4 – Admin Layout

* Admin template
* Sidebar
* Header
* Navigation
* Responsive layout

### Phase 5 – User Management

* User list
* Create
* Edit
* Status
* Role assignment

### Phase 6 – Role Management

* Role list
* Create
* Edit
* Permission assignment

### Phase 7 – Dashboard

* Dashboard statistics
* Navigation
* Recent activity placeholder

### Phase 8 – Testing

* Authentication testing
* Authorization testing
* Role testing
* Permission testing
* Security testing
* Regression testing

---

# 30. Testing Scenario

## Authentication

### Scenario 1

Valid email + password.

Expected:

```text
Login successful
→ Admin Dashboard
```

### Scenario 2

Invalid password.

Expected:

```text
Login failed
→ Error message
```

### Scenario 3

Inactive account.

Expected:

```text
Login rejected
```

---

# 31. RBAC Testing

### Super Admin

Expected:

```text
All modules accessible
```

### Admin

Expected:

```text
Operational modules accessible
RBAC management restricted
```

### Event Admin

Expected:

```text
Only permitted event functionality accessible
```

---

# 32. Acceptance Criteria

Fitur dianggap selesai apabila:

### Authentication

* [ ] Admin dapat login.
* [ ] Admin dapat logout.
* [ ] Password tersimpan secara aman.
* [ ] User inactive tidak dapat login.
* [ ] Halaman admin terlindungi authentication.
* [ ] Session berjalan dengan benar.

### RBAC

* [ ] User dapat memiliki role.
* [ ] Role dapat memiliki permission.
* [ ] Permission dapat digunakan untuk authorization.
* [ ] User tanpa permission tidak dapat mengakses resource.
* [ ] Permission diterapkan pada server-side.
* [ ] Super Admin memiliki full access.

### Admin Dashboard

* [ ] Dashboard dapat diakses oleh user yang berwenang.
* [ ] Sidebar tersedia.
* [ ] Header tersedia.
* [ ] Navigation mengikuti permission.
* [ ] Layout responsive.
* [ ] Struktur dashboard siap digunakan oleh modul Event dan Form Builder.

### User Management

* [ ] Admin dapat melihat user.
* [ ] Admin dapat membuat user.
* [ ] Admin dapat mengubah user.
* [ ] Admin dapat mengubah status user.
* [ ] Admin dapat memberikan role.

### Role Management

* [ ] Admin dapat melihat role.
* [ ] Admin dapat membuat role.
* [ ] Admin dapat mengubah role.
* [ ] Admin dapat memberikan permission.

---

# 33. Definition of Done

Admin Foundation dianggap selesai apabila:

1. Authentication telah berjalan.
2. Admin Dashboard dapat digunakan.
3. RBAC telah berjalan.
4. Authorization telah diterapkan pada route/action.
5. User Management telah tersedia.
6. Role Management telah tersedia.
7. Permission Management telah tersedia.
8. Tidak mengganggu fitur existing.
9. Database migration dapat dijalankan dengan aman.
10. Fitur telah diuji pada environment staging.
11. Tidak terdapat critical/high security issue.
12. Dokumentasi penggunaan tersedia.
13. Feature branch siap di-merge ke `staging`.

---

# 34. Next Development Phase

Setelah Admin Foundation masuk ke `staging` dan dinyatakan stabil, pengembangan dilanjutkan dengan:

```text
feature/admin-foundation
          ↓
       staging
          ↓
      QA / Review
          ↓
       Approved
          ↓
         main
```

Kemudian branch baru dibuat:

```text
staging
   │
   └── feature/form-builder
```

Tahap berikutnya akan mengimplementasikan:

```text
Event Management
       ↓
Form Builder
       ↓
Dynamic Form
       ↓
Registration
       ↓
Registration Dashboard
       ↓
Excel Export
```

Dengan demikian, **Admin Foundation menjadi fondasi bersama** untuk seluruh modul administrasi dan event registration pada project.
