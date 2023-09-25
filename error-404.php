<?php include_once './header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fonts.css">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./error404.css">
</head>
<body>
    <section class="error_404__main__container">
        <aside class="error404__upperside">
            <img class="error_404__main__img" src="./content/error 404 v2 1.png" alt="">
            <img class="error_404__main__svg" src="./content/error tst.png" alt="">
        </aside>

        <aside class="error404__lowerside">
        <h1>გვერდი ვერ მოიძებნა :/</h1>
        <span>მთავარ გვერდზე დასაბრუნებლად დააჭირე ღილაკს მთავარი გვერდი 👇</span>
        <button class="btn btn_primary">მთავარი გვერდი</button>
        </aside>
    </section>
</body>
</html>
<?php include './footer.php' ?>
<style>
    body {
        all: unset;
        background-color: #060514;
        
    }
    body::-webkit-scrollbar {
        width: 4px; /* width of the scrollbar */
    }
        body::-webkit-scrollbar-thumb {
        background: #6541F7; /* color of the thumb */
        border-radius: 50px; /* rounded corners */
    } 
</style>