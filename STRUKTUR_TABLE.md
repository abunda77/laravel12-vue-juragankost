Sekarang saya akan mendesain struktur tabel untuk setiap entitas yang telah diidentifikasi. Saya akan menentukan kolom-kolom yang diperlukan untuk setiap tabel berdasarkan fitur-fitur yang disebutkan dalam README.md.

1. **Tabel users**:
   - id (primary key)
   - name
   - email
   - password
   - phone
   - role_id (foreign key ke tabel roles)
   - profile_photo_path
   - email_verified_at
   - remember_token
   - created_at
   - updated_at

2. **Tabel roles**:
   - id (primary key)
   - name (super_admin, admin, owner, tenant, staff)
   - created_at
   - updated_at

3. **Tabel permissions**:
   - id (primary key)
   - name
   - created_at
   - updated_at

4. **Tabel role_has_permissions** (pivot table):
   - role_id (foreign key ke tabel roles)
   - permission_id (foreign key ke tabel permissions)

5. **Tabel properties**:
   - id (primary key)
   - owner_id (foreign key ke tabel users)
   - name
   - description
   - address
   - city
   - province
   - postal_code
   - latitude
   - longitude
   - property_type (kos putra, kos putri, kos campur)
   - total_rooms
   - available_rooms
   - facilities (JSON)
   - rules (JSON)
   - is_active
   - is_featured
   - created_at
   - updated_at

6. **Tabel rooms**:
   - id (primary key)
   - property_id (foreign key ke tabel properties)
   - name
   - description
   - room_type (single, double, etc.)
   - floor
   - size
   - price_monthly
   - price_quarterly
   - price_yearly
   - facilities (JSON)
   - is_available
   - created_at
   - updated_at

7. **Tabel room_photos**:
   - id (primary key)
   - room_id (foreign key ke tabel rooms)
   - photo_path
   - is_primary
   - created_at
   - updated_at

8. **Tabel bookings**:
   - id (primary key)
   - room_id (foreign key ke tabel rooms)
   - tenant_id (foreign key ke tabel users)
   - booking_code
   - check_in_date
   - check_out_date
   - duration (dalam bulan)
   - total_price
   - status (pending, confirmed, cancelled, completed)
   - payment_status (unpaid, partially_paid, paid)
   - created_at
   - updated_at

9. **Tabel payments**:
   - id (primary key)
   - booking_id (foreign key ke tabel bookings)
   - payment_code
   - amount
   - payment_method
   - payment_date
   - due_date
   - status (pending, success, failed, expired)
   - payment_proof
   - payment_details (JSON)
   - created_at
   - updated_at

10. **Tabel subscriptions**:
    - id (primary key)
    - owner_id (foreign key ke tabel users)
    - plan (basic, premium, etc.)
    - price_per_room
    - start_date
    - end_date
    - status (active, inactive, cancelled)
    - payment_status (unpaid, paid)
    - created_at
    - updated_at

11. **Tabel subscription_payments**:
    - id (primary key)
    - subscription_id (foreign key ke tabel subscriptions)
    - payment_code
    - amount
    - payment_method
    - payment_date
    - due_date
    - status (pending, success, failed, expired)
    - payment_proof
    - payment_details (JSON)
    - created_at
    - updated_at

12. **Tabel complaints**:
    - id (primary key)
    - booking_id (foreign key ke tabel bookings)
    - tenant_id (foreign key ke tabel users)
    - title
    - description
    - photo_path
    - status (pending, in_progress, resolved, rejected)
    - resolved_at
    - created_at
    - updated_at

13. **Tabel complaint_responses**:
    - id (primary key)
    - complaint_id (foreign key ke tabel complaints)
    - user_id (foreign key ke tabel users)
    - response
    - created_at
    - updated_at

14. **Tabel staff**:
    - id (primary key)
    - owner_id (foreign key ke tabel users)
    - user_id (foreign key ke tabel users)
    - position
    - properties (JSON array of property_ids)
    - created_at
    - updated_at

15. **Tabel expenses**:
    - id (primary key)
    - property_id (foreign key ke tabel properties)
    - category
    - amount
    - description
    - expense_date
    - receipt_photo
    - created_at
    - updated_at

16. **Tabel announcements**:
    - id (primary key)
    - property_id (foreign key ke tabel properties)
    - title
    - content
    - is_published
    - published_at
    - created_at
    - updated_at

17. **Tabel support_tickets**:
    - id (primary key)
    - user_id (foreign key ke tabel users)
    - ticket_code
    - subject
    - description
    - priority (low, medium, high)
    - status (open, in_progress, resolved, closed)
    - resolved_at
    - created_at
    - updated_at

18. **Tabel support_ticket_responses**:
    - id (primary key)
    - ticket_id (foreign key ke tabel support_tickets)
    - user_id (foreign key ke tabel users)
    - response
    - created_at
    - updated_at

19. **Tabel notifications**:
    - id (primary key)
    - user_id (foreign key ke tabel users)
    - title
    - content
    - type
    - is_read
    - read_at
    - created_at
    - updated_at

Ini adalah desain awal struktur tabel untuk setiap entitas. Selanjutnya, saya akan membuat diagram ER untuk visualisasi model database dan mendefinisikan atribut dan tipe data untuk setiap tabel secara lebih detail.

Sekarang saya akan mendesain struktur tabel untuk setiap entitas yang telah diidentifikasi:

### Desain Struktur Tabel

#### 1. Tabel `users`
- id (primary key)
- name
- email
- password
- phone
- role (enum: super_admin, admin, owner, tenant, staff)
- profile_photo_path
- email_verified_at
- remember_token
- created_at
- updated_at

#### 2. Tabel `roles`
- id (primary key)
- name (super_admin, admin, owner, tenant, staff)
- created_at
- updated_at

#### 3. Tabel `permissions`
- id (primary key)
- name
- created_at
- updated_at

#### 4. Tabel `role_has_permissions` (pivot)
- role_id (foreign key ke tabel roles)
- permission_id (foreign key ke tabel permissions)

#### 5. Tabel `properties`
- id (primary key)
- owner_id (foreign key ke tabel users)
- name
- description
- address
- city
- province
- postal_code
- latitude
- longitude
- property_type (enum: kos_putra, kos_putri, kos_campur)
- total_rooms
- available_rooms
- facilities (JSON)
- rules (JSON)
- is_active
- is_featured
- created_at
- updated_at

#### 6. Tabel `rooms`
- id (primary key)
- property_id (foreign key ke tabel properties)
- name
- description
- room_type (enum: single, double, etc.)
- floor
- size
- price_monthly
- price_quarterly
- price_yearly
- facilities (JSON)
- is_available
- created_at
- updated_at

#### 7. Tabel `room_photos`
- id (primary key)
- room_id (foreign key ke tabel rooms)
- photo_path
- is_primary
- created_at
- updated_at

#### 8. Tabel `bookings`
- id (primary key)
- room_id (foreign key ke tabel rooms)
- tenant_id (foreign key ke tabel users)
- booking_code
- check_in_date
- check_out_date
- duration (dalam bulan)
- total_price
- status (enum: pending, confirmed, cancelled, completed)
- payment_status (enum: unpaid, partially_paid, paid)
- created_at
- updated_at

#### 9. Tabel `payments`
- id (primary key)
- booking_id (foreign key ke tabel bookings)
- payment_code
- amount
- payment_method
- payment_date
- due_date
- status (enum: pending, success, failed, expired)
- payment_proof
- payment_details (JSON)
- created_at
- updated_at

#### 10. Tabel `subscriptions`
- id (primary key)
- owner_id (foreign key ke tabel users)
- plan (enum: basic, premium, etc.)
- price_per_room
- start_date
- end_date
- status (enum: active, inactive, cancelled)
- payment_status (enum: unpaid, paid)
- created_at
- updated_at

#### 11. Tabel `subscription_payments`
- id (primary key)
- subscription_id (foreign key ke tabel subscriptions)
- payment_code
- amount
- payment_method
- payment_date
- due_date
- status (enum: pending, success, failed, expired)
- payment_proof
- payment_details (JSON)
- created_at
- updated_at

#### 12. Tabel `complaints`
- id (primary key)
- booking_id (foreign key ke tabel bookings)
- tenant_id (foreign key ke tabel users)
- title
- description
- photo_path
- status (enum: pending, in_progress, resolved, rejected)
- resolved_at
- created_at
- updated_at

#### 13. Tabel `complaint_responses`
- id (primary key)
- complaint_id (foreign key ke tabel complaints)
- user_id (foreign key ke tabel users)
- response
- created_at
- updated_at

#### 14. Tabel `announcements`
- id (primary key)
- property_id (foreign key ke tabel properties)
- title
- content
- is_published
- published_at
- created_at
- updated_at

#### 15. Tabel `expenses`
- id (primary key)
- property_id (foreign key ke tabel properties)
- category
- amount
- description
- expense_date
- receipt_photo
- created_at
- updated_at

#### 16. Tabel `support_tickets`
- id (primary key)
- user_id (foreign key ke tabel users)
- ticket_code
- subject
- description
- priority (enum: low, medium, high)
- status (enum: open, in_progress, resolved, closed)
- resolved_at
- created_at
- updated_at

#### 17. Tabel `support_ticket_responses`
- id (primary key)
- ticket_id (foreign key ke tabel support_tickets)
- user_id (foreign key ke tabel users)
- response
- created_at
- updated_at

#### 18. Tabel `notifications`
- id (primary key)
- user_id (foreign key ke tabel users)
- title
- content
- type
- is_read
- read_at
- created_at
- updated_at