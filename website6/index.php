<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <title>Search User</title>
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form action="">
            Search User: <input onkeyup="showSuggestion(this.value)" type="text" class="form-control">
        </form>
        <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
    </div>
    <script src="suggest.js"></script>
</body>
</html>