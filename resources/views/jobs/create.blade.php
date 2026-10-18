<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new job</title>
</head>

<body>
    <h1>Create new job!</h1>
    <form action="/jobs" method="POST">
        @csrf
        <label for="title">
            Title
            <input type="text" name="title" id="title" placeholder="Title" />
        </label>
        <label for="description">
            Description
            <input type="text" name="description" id="description" placeholder="description" />
        </label>
        <button type="submit">
            Submit
        </button>
    </form>
</body>

</html>
