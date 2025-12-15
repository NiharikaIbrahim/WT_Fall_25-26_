<!DOCTYPE html> 
<body> 
    <h2>Event Booking Form</h2> 
    <form id="regForm"> 
 
        <label>Full Name:</label> 
        <input type="text" class="inputs"> 
        <span class="error"></span><br> 
 
        <label>Email:</label> 
        <input type="email" class="inputs"> 
        <span class="error"></span><br> 
 
        <label>Number of Tickets:</label> 
        <input type="number" class="inputs"> 
        <span class="error"></span><br> 
 
        <label>Event Type:</label> 
        <select class="inputs"> 
            <option value="Workshop">Workshop</option> 
            <option value="Seminar">Seminar</option> 
            <option value="Networking">Networking</option> 
        </select> 
        <span class="error"></span><br> 
 
        <label>DOB:</label> 
        <input type="date" class="inputs"> 
        <span class="error"></span><br> 
 
        <label>Agree Terms & Condition:</label> 
        <input type="checkbox" class="inputs"> 
        <span class="error"></span><br> 
 
        <br><br> 
        <button type="submit"> Book Now</button> 
    </form>
<script>
    const form = document.getElementById("regForm"); 
const inputs = document.querySelectorAll(".inputs"); 
let error = document.querySelectorAll(".error"); 
 
form.addEventListener("submit", function (event) { 
    let ok = true; 
 
    if (inputs[0].value === "") { 
        error[0].innerHTML = "Name is required."; 
        ok = false; 
    } else { 
        error[0].innerHTML = ""; 
    } 
 
    if (inputs[1].value === "") { 
        error[1].innerHTML = "Email required."; 
        ok = false; 
    } else { 
        error[1].innerHTML = ""; 
    } 
 
    const ticketNum = Number(inputs[2].value); 
    if (inputs[2].value === "") { 
        error[2].innerHTML = "Tickets is required."; 
        ok = false; 
    } else if (isNaN(ticketNum) || ticketNum <= 0) { 
        error[2].innerHTML = "Must be a positive number."; 
        ok = false; 
    } else { 
        error[2].innerHTML = ""; 
    } 
 
    if (inputs[3].value === "") { 
        error[3].innerHTML = "Type required."; 
        ok = false; 
    } else { 
        error[3].innerHTML = ""; 
    } 
 
    if (inputs[4].value === "") { 
        error[4].innerHTML = "DOB is required."; 
        ok = false; 
    } else { 
        error[4].innerHTML = ""; 
    } 
 
    if (!inputs[5].checked) { 
        error[5].innerHTML = "Must agree to terms."; 
        ok = false; 
    } else { 
        error[5].innerHTML = ""; 
    } 
 
    if (!ok) { 
        event.preventDefault(); 
    } else { 
        alert("Booking successful"); 
    } 
}); 
</script>
</body>
</html>
