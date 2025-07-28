Berdasarkan README.md, saya akan mengidentifikasi entitas utama dan hubungan antar entitas untuk proyek Juragan Kost.

Dari bagian "Database Schema" di README.md, entitas utama yang disebutkan adalah:

1. **Users** - Semua tipe pengguna (Admin, Owner, Tenant, Staff)
2. **Properties** - Properti kos yang dimiliki oleh Owner
3. **Rooms** - Kamar individual dalam properti
4. **Bookings** - Pemesanan sewa kamar oleh Tenant
5. **Payments** - Transaksi pembayaran terkait booking
6. **Subscriptions** - Langganan pemilik (Owner) ke platform
7. **Complaints** - Keluhan penyewa (Tenant)

Selain itu, berdasarkan fitur-fitur yang disebutkan, saya juga dapat mengidentifikasi beberapa entitas tambahan yang mungkin diperlukan:

8. **Roles** - Peran pengguna (Super Admin, Owner, Tenant, Staff)
9. **Permissions** - Izin akses untuk setiap peran
10. **Announcements** - Pengumuman dari Owner ke Tenant
11. **Staff** - Staf yang membantu Owner (kos keeper)
12. **Expenses** - Pengeluaran terkait properti
13. **Support Tickets** - Tiket dukungan dari pengguna ke Admin
14. **Notifications** - Notifikasi untuk pengguna

Hubungan antar entitas utama:

1. **Users - Roles**: Many-to-Many (satu pengguna bisa memiliki beberapa peran, satu peran bisa dimiliki oleh banyak pengguna)
2. **Users (Owner) - Properties**: One-to-Many (satu Owner bisa memiliki banyak properti)
3. **Properties - Rooms**: One-to-Many (satu properti bisa memiliki banyak kamar)
4. **Rooms - Bookings**: One-to-Many (satu kamar bisa memiliki banyak booking, tapi tidak pada waktu yang sama)
5. **Users (Tenant) - Bookings**: One-to-Many (satu Tenant bisa memiliki banyak booking)
6. **Bookings - Payments**: One-to-Many (satu booking bisa memiliki banyak pembayaran)
7. **Users (Owner) - Subscriptions**: One-to-One (satu Owner memiliki satu langganan aktif)
8. **Bookings - Complaints**: One-to-Many (satu booking bisa memiliki banyak keluhan)
9. **Users (Owner) - Staff**: One-to-Many (satu Owner bisa memiliki banyak staf)
10. **Properties - Expenses**: One-to-Many (satu properti bisa memiliki banyak pengeluaran)
11. **Users - Support Tickets**: One-to-Many (satu pengguna bisa membuat banyak tiket dukungan)
12. **Properties - Announcements**: One-to-Many (satu properti bisa memiliki banyak pengumuman)

Sekarang saya akan menandai tugas identifikasi entitas utama dan hubungan antar entitas sebagai selesai, dan melanjutkan ke desain struktur tabel untuk setiap entitas.

Berdasarkan analisis README.md, saya telah mengidentifikasi entitas utama dan hubungan antar entitas untuk proyek Juragan Kost:

### Entitas Utama:

1. **Users** - Semua tipe pengguna (Admin, Owner, Tenant, Staff)
2. **Properties** - Properti kos yang dimiliki oleh Owner
3. **Rooms** - Kamar individual dalam properti
4. **Bookings** - Pemesanan sewa kamar oleh Tenant
5. **Payments** - Transaksi pembayaran terkait booking
6. **Subscriptions** - Langganan pemilik (Owner) ke platform
7. **Complaints** - Keluhan penyewa (Tenant)

### Entitas Tambahan (berdasarkan fitur yang disebutkan):

8. **Roles** - Peran pengguna (Super Admin, Owner, Tenant, Staff)
9. **Permissions** - Izin akses untuk setiap peran
10. **Announcements** - Pengumuman dari Owner ke Tenant
11. **Staff** - Staf yang membantu Owner (kos keeper)
12. **Expenses** - Pengeluaran terkait properti
13. **Support Tickets** - Tiket dukungan dari pengguna ke Admin
14. **Notifications** - Notifikasi untuk pengguna

### Hubungan Antar Entitas:

1. **Users - Roles**: Many-to-Many
2. **Users (Owner) - Properties**: One-to-Many
3. **Properties - Rooms**: One-to-Many
4. **Rooms - Bookings**: One-to-Many
5. **Users (Tenant) - Bookings**: One-to-Many
6. **Bookings - Payments**: One-to-Many
7. **Users (Owner) - Subscriptions**: One-to-One
8. **Bookings - Complaints**: One-to-Many
9. **Users (Owner) - Staff**: One-to-Many
10. **Properties - Expenses**: One-to-Many
11. **Users - Support Tickets**: One-to-Many
12. **Properties - Announcements**: One-to-Many