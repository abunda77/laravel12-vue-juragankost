Sekarang saya akan mendefinisikan relasi Eloquent antar model. Relasi Eloquent adalah cara Laravel untuk mendefinisikan hubungan antar model, yang memungkinkan kita untuk mengakses data terkait dengan mudah.

Berikut adalah relasi Eloquent antar model:

Sekarang saya akan mendefinisikan relasi Eloquent antar model:

### Relasi Eloquent Antar Model

#### 1. Model `User.php` (tambahan relasi)
```php
// Relasi dengan Properties (Owner)
public function properties()
{
    return $this->hasMany(Property::class, 'owner_id');
}

// Relasi dengan Bookings (Tenant)
public function bookings()
{
    return $this->hasMany(Booking::class, 'tenant_id');
}

// Relasi dengan Subscription (Owner)
public function subscription()
{
    return $this->hasOne(Subscription::class, 'owner_id');
}

// Relasi dengan Complaints (Tenant)
public function complaints()
{
    return $this->hasMany(Complaint::class, 'tenant_id');
}

// Relasi dengan SupportTickets
public function supportTickets()
{
    return $this->hasMany(SupportTicket::class);
}

// Relasi dengan Notifications
public function notifications()
{
    return $this->hasMany(Notification::class);
}

// Relasi dengan ComplaintResponses
public function complaintResponses()
{
    return $this->hasMany(ComplaintResponse::class);
}

// Relasi dengan SupportTicketResponses
public function supportTicketResponses()
{
    return $this->hasMany(SupportTicketResponse::class);
}
```

#### 2. Model `Property.php` (tambahan relasi)
```php
// Relasi dengan User (Owner)
public function owner()
{
    return $this->belongsTo(User::class, 'owner_id');
}

// Relasi dengan Rooms
public function rooms()
{
    return $this->hasMany(Room::class);
}

// Relasi dengan Announcements
public function announcements()
{
    return $this->hasMany(Announcement::class);
}

// Relasi dengan Expenses
public function expenses()
{
    return $this->hasMany(Expense::class);
}
```

#### 3. Model `Room.php` (tambahan relasi)
```php
// Relasi dengan Property
public function property()
{
    return $this->belongsTo(Property::class);
}

// Relasi dengan RoomPhotos
public function photos()
{
    return $this->hasMany(RoomPhoto::class);
}

// Relasi dengan Bookings
public function bookings()
{
    return $this->hasMany(Booking::class);
}
```

#### 4. Model `RoomPhoto.php` (tambahan relasi)
```php
// Relasi dengan Room
public function room()
{
    return $this->belongsTo(Room::class);
}
```

#### 5. Model `Booking.php` (tambahan relasi)
```php
// Relasi dengan Room
public function room()
{
    return $this->belongsTo(Room::class);
}

// Relasi dengan User (Tenant)
public function tenant()
{
    return $this->belongsTo(User::class, 'tenant_id');
}

// Relasi dengan Payments
public function payments()
{
    return $this->hasMany(Payment::class);
}

// Relasi dengan Complaints
public function complaints()
{
    return $this->hasMany(Complaint::class);
}
```

#### 6. Model `Payment.php` (tambahan relasi)
```php
// Relasi dengan Booking
public function booking()
{
    return $this->belongsTo(Booking::class);
}
```

#### 7. Model `Subscription.php` (tambahan relasi)
```php
// Relasi dengan User (Owner)
public function owner()
{
    return $this->belongsTo(User::class, 'owner_id');
}

// Relasi dengan SubscriptionPayments
public function payments()
{
    return $this->hasMany(SubscriptionPayment::class);
}
```

#### 8. Model `SubscriptionPayment.php` (tambahan relasi)
```php
// Relasi dengan Subscription
public function subscription()
{
    return $this->belongsTo(Subscription::class);
}
```

#### 9. Model `Complaint.php` (tambahan relasi)
```php
// Relasi dengan Booking
public function booking()
{
    return $this->belongsTo(Booking::class);
}

// Relasi dengan User (Tenant)
public function tenant()
{
    return $this->belongsTo(User::class, 'tenant_id');
}

// Relasi dengan ComplaintResponses
public function responses()
{
    return $this->hasMany(ComplaintResponse::class);
}
```

#### 10. Model `ComplaintResponse.php` (tambahan relasi)
```php
// Relasi dengan Complaint
public function complaint()
{
    return $this->belongsTo(Complaint::class);
}

// Relasi dengan User
public function user()
{
    return $this->belongsTo(User::class);
}
```

#### 11. Model `Announcement.php` (tambahan relasi)
```php
// Relasi dengan Property
public function property()
{
    return $this->belongsTo(Property::class);
}
```

#### 12. Model `Expense.php` (tambahan relasi)
```php
// Relasi dengan Property
public function property()
{
    return $this->belongsTo(Property::class);
}
```

#### 13. Model `SupportTicket.php` (tambahan relasi)
```php
// Relasi dengan User
public function user()
{
    return $this->belongsTo(User::class);
}

// Relasi dengan SupportTicketResponses
public function responses()
{
    return $this->hasMany(SupportTicketResponse::class, 'ticket_id');
}
```

#### 14. Model `SupportTicketResponse.php` (tambahan relasi)
```php
// Relasi dengan SupportTicket
public function ticket()
{
    return $this->belongsTo(SupportTicket::class, 'ticket_id');
}

// Relasi dengan User
public function user()
{
    return $this->belongsTo(User::class);
}
```

#### 15. Model `Notification.php` (tambahan relasi)
```php
// Relasi dengan User
public function user()
{
    return $this->belongsTo(User::class);
}
```