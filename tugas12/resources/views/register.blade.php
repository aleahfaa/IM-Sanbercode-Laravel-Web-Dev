<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: white;
                line-height: 1.6;
                margin: auto;
                padding: 20px;
                color: black;
            }
            .button {
                display: inline-block;
                padding: 10px 20px;
                font-size: 16px;
                color: black;
                background-color: gray;
                text-decoration: none;
                border-radius: 5px;
                text-align: center;
            }
            .button:hover {
                background-color: silver;
            }
        </style>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        <form action="/welcome" method="POST">
            @csrf
            <label for="first-name">First Name:</label><br>
            <input type="text" id="first-name" name="first-name" required><br><br>
            <label for="last-name">Last Name:</label><br>
            <input type="text" id="last-name" name="last-name" required><br><br>
            <label>Gender:</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br><br>
            <label for="nationality">Nationality:</label><br>
            <select id="nationality" name="nationality">
                <option value="indonesian">Indonesian</option>
                <option value="singaporean">Singaporean</option>
                <option value="thai">Thai</option>
                <option value="lao">Lao</option>
                <option value="malaysian">Malay</option>
                <option value="filipino">Filipino</option>
                <option value="sri lankan">Sri Lanka</option>
                <option value="indian">Indian</option>
                <option value="american">American</option>
                <option value="others">Others</option>
            </select><br><br>
            <label for="language-spoken">Language Spoken:</label><br>
            <input type="checkbox" id="bahasa-indonesia" name="language-spoken" value="bahasa-indonesia">
            <label for="bahasa-indonesia">Bahasa Indonesia</label><br>
            <input type="checkbox" id="english" name="language-spoken" value="english">
            <label for="english">English</label><br>
            <input type="checkbox" id="other" name="language-spoken" value="other">
            <label for="other">Other</label><br><br>
            <label for="bio">Bio:</label><br>
            <textarea id="bio" name="bio" rows="5" cols="50"></textarea><br><br>
            <button type="submit" class="button">Sign Up</>
        </form>
    </body>
</html>