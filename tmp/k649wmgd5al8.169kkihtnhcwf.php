<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form 1</title>
</head>
<body>
    <form method="post" action="#">
        <label for="animal">Animal
            <input type="text" name='animalName' id="animal">
        </label><br>
        <input type="submit" value="Next">
        <span>
            <check if="isset(@errors['animal']")>
                <?= ($errors['animal']) ?>
            
        </span>
    </form>
</body>
</html>