<?php if (count($errors) > 0): ?>
    <div class="error">
    <?php foreach ($errors as $error => $value): ?>
        <p><?php echo $value; ?></p>
    <?php endforeach ?>
    </div>
<?php endif ?>