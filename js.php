<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tech Festival Registration</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(to right, #00c6ff, #0072ff);
      color: #222;
      padding: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      color: white;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .container {
      background: white;
      padding: 30px;
      border-radius: 15px;
      width: 100%;
      max-width: 500px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    label {
      display: block;
      margin-top: 10px;
      font-weight: 600;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: 0.2s;
    }

    input:focus {
      border-color: #0072ff;
      box-shadow: 0 0 4px rgba(0,114,255,0.4);
    }

    button {
      margin-top: 15px;
      padding: 10px 15px;
      background: #0072ff;
      border: none;
      color: white;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.2s;
    }

    button:hover {
      background: #005ecc;
    }

    .success {
      background: #e6ffed;
      border: 1px solid #00c851;
      padding: 15px;
      margin-top: 20px;
      border-radius: 10px;
    }

    .activity {
      margin-top: 30px;
      border-top: 2px dashed #ccc;
      padding-top: 20px;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      background: #f1f1f1;
      margin-top: 8px;
      padding: 8px 12px;
      border-radius: 6px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    li button {
      background: #ff4444;
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 12px;
    }
  </style>
</head>
<body>
  <h1>Tech Festival Registration</h1>
  <div class="container">
    <h2>Participant Registration</h2>
    <form id="registerForm">
      <label>Full Name:</label>
      <input type="text" id="name" />

      <label>Email:</label>
      <input type="email" id="email" />

      <label>Phone Number:</label>
      <input type="text" id="phone" />

      <label>Password:</label>
      <input type="password" id="password" />

      <label>Confirm Password:</label>
      <input type="password" id="confirmPassword" />

      <button type="button" onclick="register()">Register</button>
    </form>

    <div id="successMsg"></div>

    <div class="activity">
      <h2>Activity Selection</h2>
      <input type="text" id="activityInput" placeholder="Enter activity name" />
      <button onclick="addActivity()">Add Activity</button>
      <ul id="activityList"></ul>
    </div>
  </div>

  <script>
    function register() {
      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const phone = document.getElementById("phone").value.trim();
      const password = document.getElementById("password").value;
      const confirmPassword = document.getElementById("confirmPassword").value;

      if (!name || !email || !phone || !password || !confirmPassword) {
        alert("All fields are required!");
        return;
      }
      if (!email.includes("@")) {
        alert("Email must contain '@'!");
        return;
      }
      if (!/^[0-9]+$/.test(phone)) {
        alert("Phone number must contain only digits!");
        return;
      }
      if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return;
      }

      document.getElementById("successMsg").innerHTML = `
        <div class="success">
          <h3>Registration Successful!</h3>
          <p><strong>Name:</strong> ${name}</p>
          <p><strong>Email:</strong> ${email}</p>
          <p><strong>Phone:</strong> ${phone}</p>
        </div>
      `;
    }

    function addActivity() {
      const activityName = document.getElementById("activityInput").value.trim();
      if (!activityName) {
        alert("Please enter an activity name!");
        return;
      }

      const li = document.createElement("li");
      li.textContent = activityName;

      const removeBtn = document.createElement("button");
      removeBtn.textContent = "Remove";
      removeBtn.onclick = function() {
        li.remove();
      };

      li.appendChild(removeBtn);
      document.getElementById("activityList").appendChild(li);
      document.getElementById("activityInput").value = "";
    }
  </script>
</body>
</html>
