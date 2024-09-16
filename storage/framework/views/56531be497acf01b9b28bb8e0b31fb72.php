<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Buku</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Buku</h1>
        <form action="<?php echo e(route('books.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required maxlength="100">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="page_count" class="form-label">Page Count</label>
                <input type="number" class="form-control" id="page_count" name="page_count" required>
            </div>
            <div class="mb-3">
                <label for="author_name" class="form-label">Author Name</label>
                <input type="text" class="form-control" id="author_name" name="author_name" required maxlength="80">
            </div>
            <div class="mb-3">
                <label for="author_email" class="form-label">Author Email</label>
                <input type="email" class="form-control" id="author_email" name="author_email" required maxlength="50">
            </div>
            <div class="mb-3">
                <label for="published_date" class="form-label">Published Date</label>
                <input type="date" class="form-control" id="published_date" name="published_date" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\simple-library\resources\views/books/create.blade.php ENDPATH**/ ?>