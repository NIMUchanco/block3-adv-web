<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Builder</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #202b38;
        }

        header {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            margin: 0;
        }

        h1 {
            margin-top: 0;
            color: #fff;
        }

        h3 {
            color: aliceblue;
        }

        ul {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            place-items: center;
            grid-gap: 1em;
            padding: 0;
        }

        ul li {
            list-style: none;
        }

        a {
            text-decoration: none;
            color: #d0cfcf;
            transition: all .3s;
        }

        a:hover {
            text-decoration: none;
            color: pink;
        }

        form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: .5em;
        }

        form:nth-of-type(2) {
            grid-template-columns: repeat(4, 1fr);
        }

        table {
            background-color: #fff;
            border-radius: 0.9rem;
        }

        th, td {
            border: 1px solid #202b38;
            padding: 0.25em;
            text-align: center;
        }

        th {
            background-color: #d0cfcf;
        }

        th:first-of-type {
            border-start-start-radius: 0.65rem;
        }

        th:last-of-type {
            border-start-end-radius: 0.65rem;
        }

        tr:last-of-type td:first-of-type {
            border-end-start-radius: 0.65rem;
        }

        tr:last-of-type td:last-of-type {
            border-end-end-radius: 0.65rem;
        }

        table a {
            color: #39a33c;
        }

        table a:hover {
            color: #2e7e2a;
        }

        table a:nth-last-child(1) {
            color: #ce4a4a;
        }

        table a:nth-last-child(1):hover {
            color: #a32a2a;
        }
    </style>
</head>
<body>
    <header>
        <h1>Computer Builder</h1>
        <nav>
            <ul>
                <li><a href="index.php">Form</a></li>
                <li><a href="index.php/views/form.php?link=table">Table</a></li>
            </ul>
        </nav>
    </header>
