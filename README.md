# Registration Application

This project provides a basic user registration system using PHP, MySQL, and Bootstrap.

## Files
1. `index.php`: Frontend for the registration form using Bootstrap for styling.
2. `server.php`: Backend logic to process registration data.
3. `users.sql`: SQL script to set up the database table.

## Improvements Made
### `index.php`
- Simplified and organized the Bootstrap structure.
- Added validation attributes to form inputs.
- Optimized inline styles by using a central `.form-container` class.
- Fixed the navigation bar and form layout for better responsiveness.

### `server.php`
- Added input sanitization using `trim()` for all user inputs.
- Implemented password hashing for secure storage.
- Improved error handling for database operations.
- Closed all database connections after use.

### `users.sql`
- Optimized table structure:
  - Added `AUTO_INCREMENT` to the primary key.
  - Increased password field length to accommodate hashed passwords.
  - Enforced unique constraint on the email field to prevent duplicates.
  - Changed the engine to `InnoDB` for better reliability and foreign key support.

## Usage
1. Import the SQL file (`users.sql`) into your MySQL database.
   ```bash
   mysql -u root -p < users.sql
