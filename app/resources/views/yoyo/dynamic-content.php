<div class="border border-gray-100 p-4" yoyo:on="load">

    <?php if ($spinning): ?>

        <?php
        $entries = require __DIR__.'/../../../test-data.php';
        shuffle($entries);
        $entries = array_splice($entries, 0, 3);

        foreach ($entries as $entry):
        ?>
            <h6><?php echo $entry['title']; ?></h6>
        <?php endforeach; ?>

  <?php endif; ?>

</div>
