<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/notes" class="text-blue-500 underline">go back...</a>
            </p>

            <p><?= htmlspecialchars($note['body']) ?></p>

            <form class="mt-6" method="POST">
                <input type="hidden" name="__method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="text-sm text-red-500">DELETE</button>
            </form>
        </div>
    </main>

<?php require base_path('views/partials/footer.php') ?>