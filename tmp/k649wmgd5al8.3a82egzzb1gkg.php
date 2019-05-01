<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form 2</title>
</head>
<body>
    <form method="post" action="#">
        <?php if (isset($errors['color']): ?>
            <p><?= ($errors['color') ?></p>
        <?php endif; ?>
        <label for="color">Color
        <select id="color" name="color">
            <?php foreach (($colors?:[]) as $colorOption): ?>
                <option value="<?= ($colorOption) ?>"><?= ($colorOption) ?></option>
            <?php endforeach; ?>
        </select>
        </label><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>