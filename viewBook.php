<?php
require_once "library.php";
$bookObj = new Library();

// SEARCH FUNCTIONALITY ADDED
$search = "";
if (isset($_GET['search'])) {
    $search = trim($_GET['search']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>View Book</title>
    <link rel="stylesheet" href="viewbook.css">
</head>
<body>
    <div class=container>
        <h1>List of Books</h1>
        
        <!-- Search Form -->
        <form action="" method="get">
            <input type="text" name="search" placeholder="Search books..." value="<?= htmlspecialchars($search) ?>">
            <button type="submit">Search</button>
            <?php if (!empty($search)): ?>
                <a href="viewBook.php" style="margin-left: 10px;">Clear Search</a>
            <?php endif; ?>
        </form>
        <br>

        <table class="table">
            <tr>
                <td>No. </td>
                <td>Title</td>
                <td>Author</td>
                <td>Genre</td>
                <td>Publication Year</td>
                <td>Publisher</td>
                <td>Copies</td>
            </tr>
            <?php
                $no_counter = 1;
                // SEARCH PARAMETER ADDED
                foreach ($bookObj->viewBook($search) as $book)
                {
            ?> 
                    <tr>
                        <td><?= $no_counter++ ?></td>
                        <td><?= $book["title"] ?></td>
                        <td><?= $book["author"] ?></td>
                        <td><?= $book["genre"] ?></td>
                        <td><?= $book["publication_year"] ?></td>
                        <td><?= $book["publisher"] ?></td>
                        <td><?= $book["copies"] ?></td>
                    </tr>
            <?php
                }
            ?>
        </table>
        <br>
        <button><a href="addbook.php">Add Book</a></button>
    </div>
</body>
</html>
