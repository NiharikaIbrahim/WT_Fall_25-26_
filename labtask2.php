<!DOCTYPE html>

<head>
    <title>Tech Festival Registration</title>
</head>

<style>
    body {
        background-color: white;
        font-family: Arial, sans-serif;
    }

    h1 {
        color: red;
        font-size: 30px;
    }
    table {
        border-collapse: collapse;
        margin-top: 20px;
    }

    td {
        padding: 8px;
        font-size: 18px;
    }

    input {
        padding: 8px;
        width: 250px;
        border-radius: 5px;
        border: 1px solid #aaa;
    }

    select {
        padding: 8px;
        width: 270px;
        border-radius: 5px;
    }
    button {
        background-color: red;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: darkred;
    }

    hr {
        border: none;
        border-top: 3px solid red;
        width: 60%;
    }
    .success {
        color: green;
        font-weight: bold;
        margin-top: 10px;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        background-color: #f1f1f1;
        padding: 8px;
        margin-top: 6px;
        border-radius: 5px;
        width: 300px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    li button {
        background-color: #ff4444;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        color: white;
        cursor: pointer;
    }
</style>
<body>
    <center>
        <h1>Tech Festival Registration</h1>
        <hr color="Red">

        <table>
            <tr>
                <td>Full Name:</td>
            </tr>
            <tr>
                <td><input type="text" id="name"></td>
            </tr>

