<!-- views/news/detail.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($newsItem['title']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <a href="index.php" class="btn btn-secondary mb-3">Back to Home</a>

        <h1><?= $news->getTitle(); ?></h1>
        <p><strong>Category:</strong>
            <?php
            $category = null;
            if (!empty($categories)) {
                foreach ($categories as $cat) {
                    if ($cat->getId() == $news->getCategoryId()) {
                        $category = $cat;
                        break;
                    }
                }
            }
            echo $category ? $category->getName() : 'N/A';
            ?>
        </p>
        <p><strong>Created At:</strong> <?= $news->getCreatedAt() ?></p>
        <p><strong>Content:</strong></p>
        <p><?= $news->getContent() ?></p>
        <p><strong>Image:</strong></p>
        <img src="<?= $news->getImage() ?>" alt="Image" class="img-fluid">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>