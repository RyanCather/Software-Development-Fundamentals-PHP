<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1>Heading</h1>

<div class="container-fluid">
    <form>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="inputMessage" class="form-label">Message</label>
            <input type="text" class="form-control" id="inputMessage">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>