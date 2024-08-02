<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        :root {
            --primary-color: #4EA685;
            --secondary-color: #57B894;
            --black: #000000;
            --white: #ffffff;
            --gray: #efefef;
            --gray-2: #757575;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: var(--gray);
        }

        .login-form,
        .dashboard {
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: var(--white);
        }

        .login-form.active,
        .dashboard.active {
            display: flex;
        }

        .login-form input {
            width: 100%;
            padding: 0.6rem;
            margin-bottom: 1rem;
            border: 1px solid var(--gray-2);
            border-radius: 0.5rem;
        }

        .login-form button,
        .logout-btn,
        .upload-btn {
            padding: 0.6rem 1.2rem;
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 1rem;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .content h1 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .content p {
            color: var(--black);
            margin-bottom: 1rem;
        }

        .upload-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .email-display {
            margin-bottom: 1rem;
            font-size: 1rem;
            color: var(--black);
        }
    </style>
</head>

<body>
    <div id="login-form" class="login-form">
        <h1>Login</h1>
        <input type="email" id="email" placeholder="Email" required>
        <input type="password" id="password" placeholder="Password" required>
        <button onclick="login()">Login</button>
    </div>

    <div id="dashboard" class="dashboard">
        <div class="content">
            <h1>Welcome to Your Dashboard</h1>
            <p class="email-display" id="user-email"></p>
            <p>This is a secure area of the application.</p>

            <div class="upload-container">
                <input type="file" id="file-upload" name="file-upload">
                <button class="upload-btn" onclick="uploadFile()">Upload File</button>
            </div>

            <button class="logout-btn" onclick="logout()">Logout</button>
        </div>
    </div>

    <script>
        // Function to handle user login
        function login() {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Simulate a login check
            if (email && password) {
                // Normally, you would check credentials with a server here
                // Simulate a successful login
                document.getElementById('login-form').classList.remove('active');
                document.getElementById('dashboard').classList.add('active');
                document.getElementById('user-email').innerText = `Logged in as: ${email}`;
            } else {
                alert('Please enter both email and password.');
            }
        }

        // Function to simulate a user logout
        function logout() {
            alert('You have been logged out.');
            document.getElementById('dashboard').classList.remove('active');
            document.getElementById('login-form').classList.add('active');
            document.getElementById('email').value = '';
            document.getElementById('password').value = '';
        }

        // Function to handle file upload
        function uploadFile() {
            const fileInput = document.getElementById('file-upload');
            const file = fileInput.files[0];
            if (file) {
                alert(`File "${file.name}" uploaded successfully.`);
                // Here you would typically handle the file upload to the server
            } else {
                alert('No file selected.');
            }
        }
    </script>
</body>

</html>
