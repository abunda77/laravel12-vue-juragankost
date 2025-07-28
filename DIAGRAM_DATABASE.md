erDiagram
    USERS ||--o{ PROPERTIES : owns
    USERS ||--o{ BOOKINGS : makes
    USERS ||--o{ COMPLAINTS : submits
    USERS ||--o{ SUPPORT_TICKETS : creates
    USERS ||--|| SUBSCRIPTIONS : has
    USERS }|--|| ROLES : has
    ROLES }|--o{ PERMISSIONS : has
    
    PROPERTIES ||--o{ ROOMS : contains
    PROPERTIES ||--o{ ANNOUNCEMENTS : has
    PROPERTIES ||--o{ EXPENSES : has
    
    ROOMS ||--o{ ROOM_PHOTOS : has
    ROOMS ||--o{ BOOKINGS : reserved_by
    
    BOOKINGS ||--o{ PAYMENTS : has
    BOOKINGS ||--o{ COMPLAINTS : has
    
    SUBSCRIPTIONS ||--o{ SUBSCRIPTION_PAYMENTS : has
    
    COMPLAINTS ||--o{ COMPLAINT_RESPONSES : has
    
    SUPPORT_TICKETS ||--o{ SUPPORT_TICKET_RESPONSES : has
    
    USERS ||--o{ NOTIFICATIONS : receives
