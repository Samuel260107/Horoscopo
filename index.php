<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<style>
form{
    position: absolute;
    background-color: black;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    padding: 20px 20px 40px 20px;
    border-radius: 10px;
}
</style>
<body>
    <form action="index1.php" method="get">
        <h1>HORÓSCOPO</h1>
        <br><label for="lblData">Escolha uma data: </label><br>
        <input type="date" name="data">
        <input type="submit">
    </form>
</body>
</html>