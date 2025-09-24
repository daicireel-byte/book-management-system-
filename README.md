# book-management-system-
myproject

## Installation Steps:

1. **Download these files** to `htdocs/myproject/`
2. **Start XAMPP** (Apache + MySQL)
3. **Open phpMyAdmin** at `http://localhost/phpmyadmin`
4. **Create database** named `library`
5. **Run this SQL:**

```sql
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    genre VARCHAR(100) NOT NULL,
    publication_year INT NOT NULL,
    publisher VARCHAR(255),
    copies INT NOT NULL
);
```

6. **Access the application:** `http://localhost/myproject/viewBook.php`

## Testing:
- **Add Book:** Fill the form and submit
- **View Books:** See all books in table
- **Search:** Use the search box to filter books
- **Duplicate Prevention:** Try adding the same title twice
