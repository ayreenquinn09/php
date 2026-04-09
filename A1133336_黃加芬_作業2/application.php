<html>
<head>
<title>New York Summer Camp Schedule</title>
<style>
    body {
        background-color: #fde7f5;
    }

    h2 {
        color: #cc0000;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #ccc;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 150px 1fr;
        row-gap: 15px;
        column-gap: 10px;
        align-items: center;
    }

    .form-grid input[type="text"],
    .form-grid input[type="email"],
    .form-grid input[type="date"],
    .form-grid select {
        width: 100%;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .form-grid .full-width {
        grid-column: 1 / span 2;
    }

    .submit-btn {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #cc0000;
        color: white;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .submit-btn:hover {
        background-color: #a00000;
    }
</style>
</head>

<body>

<center>
    <font size="20" color="darkred">7-Day Cultural Learning Trip in New York</font>
</center>

<hr color="#000000" width="100%">

<h2>About the Camp</h2>
<p>
    Welcome to the <font color="#cc0000">New York Summer Camp</font>! 
    The camp will be held in New York for 7 days and 6 nights, 
    featuring cultural experiences, culinary workshops, 
    city sightseeing, and museum visits.
</p>

<hr color="#000000" width="100%">

<h2>Application Form</h2>

<form action="result.php" method="post">
    <div class="form-grid">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label>Gender:</label>
        <div>
            <input type="radio" id="male" name="gender" value="male" required> <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female"> <label for="female">Female</label>
        </div>

        <label for="grade">Grade:</label>
        <select id="grade" name="grade" required>
            <option value="Freshman">Freshman</option>
            <option value="Sophomore">Sophomore</option>
            <option value="Junior">Junior</option>
            <option value="Senior">Senior</option>
        </select>

        <label for="birthday">Date of Birth:</label>
        <input type="date" id="birthday" name="birthday" required>

        <label for="tel">Contact Number:</label>
        <input type="text" id="tel" name="tel" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <div class="full-width">
            <input type="submit" class="submit-btn" value="Submit Application">
        </div>
    </div>
</form>

</body>
</html>