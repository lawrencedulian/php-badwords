<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkWord.php" method:"GET">
        <label for="word">Type the Word you want to censor </label>
        <input type="text" id="word" name="word">

        <label for="paragraph">Type a Paragraph</label>
        <input type="text" id="paragraph" name="paragraph">

        <button type="submit">Submit</button>
    </form>
</body>
</html>