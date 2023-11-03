# DAW

## Roles
- **Users**: Application users who can search for books, borrow books, and manage their accounts.
- **Administrators**: Users with special privileges for managing books, users, and the book inventory.
- **Database**: The system that stores the application's data, including book information, user details, and loan records.
- **Application Server**: The server that provides web services, processes user requests, and interacts with the database.

## Entities
- **Books**: Information about books, including title, author, ISBN number, and availability.
- **Users**: User details, such as name, email, password, and role (user or administrator).
- **Loans**: Records of borrowed books, including the loan date and due date.

## Processes
- **Registration and Authentication**: The process through which users register and log into the application.
- **Book Search and Display**: Users can search for and view available books in the library.
- **Borrow and Return**: The process of borrowing and returning books by users.
- **Administration of Books and Users**: Administrators can add, edit, and delete books, as well as manage user accounts.
- **Inventory Management**: The process of tracking book inventory and updating availability.

## Database
Using a relational database, such as MySQL, is recommended for storing data. The database tables should include at least tables for books, users, and loans. Here is a simple basic database structure:

- The "Books" table to store information about books.
- The "Users" table to store user information.
- The "Loans" table to track book loans, with information about the loan date and due date.
