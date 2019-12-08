<?php if (count($erros) > 0): ?>
    <div class="error">
        <?php foreach ($erros as $error): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php endforeach ?>
    </div>
<?php endif ?>