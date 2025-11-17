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
             <tr>
                <td>Email:</td>
            </tr>
            <tr>
                <td><input type="text" id="email"></td>
            </tr>

            <tr>
                <td>Phone Number:</td>
            </tr>
            <tr>
                <td><input type="text" id="phone"></td>
            </tr>

            <tr>
                <td>Password:</td>
            </tr>
            <tr>
                <td><input type="password" id="password"></td>
            </tr>

<tr>
                <td>Confirm Password:</td>
            </tr>
            <tr>
                <td><input type="password" id="confirmPassword"></td>
            </tr>

            <tr>
                <td align="center">
                    <button type="button" onclick="register()">Register</button>
                </td>
            </tr>
        </table>

        <div id="successMsg" class="success"></div>

        <hr color="Red">
        <h1>Activity Selection</h1>
        <table>
            <tr>
                <td>Enter Activity Name:</td>
            </tr>
            <tr>
                <td><input type="text" id="activityInput"></td>
            </tr>
            <tr>
                <td align="center">
                    <button type="button" onclick="addActivity()">Add Activity</button>
                </td>
            </tr>
        </table>

        <ul id="activityList"></ul>
    </center>
<script>
function register(){
    var name=document.getElementById("name").value.trim();
     var email=document.getElementById("email").value.trim();
     var phone=document.getElementById("phone").value.trim();
     var password=document.getElementById("password").value.trim();
     var confirmPassword=document.getElementById("confirmPassword").value.trim();
if(!name || !email || !phone || !password || !confirmPassword){
    alert("All fields are required!");
    retur;
}
if (!email.includes("@")) {
     alert("Email must contain '@'!");
         return;
}
if (!/^[0-9]+$/.test(phone))) {
     alert("Phone number must contain only digits!");
         return;
}