<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>


<h1>Add Posts</h1>
<style>

    body {
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
    }

    form {
        background: #e2e8f0;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0);
        display: grid;
        gap: 15px;
        width: 300px;
        text-align: center;
    }

    input{
        padding: 10px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[name="body"]{
        height: 100px;;
    }

    button{
        padding: 10px;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover{
        background: #0069d9;
    }

</style>

<form action="{{route('submit-post')}}" method="post">
    @csrf
    <input type="text" name="title">
    <input type="text" name="content">
    <button type="submit">Submit</button>
</form>


</body>
</html>
