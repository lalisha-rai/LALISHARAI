<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            height: 100vh;
            background-color: var(--gray);
        }

        .dashboard {
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .dashboard.active {
            display: flex;
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

        .upload-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 1rem;
        }

        .email-display {
            margin-bottom: 1rem;
            font-size: 1rem;
            color: var(--black);
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 500px;
            border: 1px solid var(--gray-2);
            padding: 1rem;
            box-sizing: border-box;
            margin-top: 20px;
            background-color: #fff;
        }

        .image-display {
            max-width: 100%;
            max-height: 400px;
            display: none;
        }
    </style>
</head>

<body>
    <div id="dashboard" class="dashboard">
        <div class="content">
            <h1>Welcome to Your Dashboard</h1>
            <p class="email-display" id="user-email"></p>
            <p>This is a secure area of the application.</p>

            <div class="upload-container">
                <input type="file" id="file-upload" name="file-upload" accept="image/*">
                <button class="upload-btn" onclick="uploadFile()">Upload Image</button>
            </div>

            <button class="logout-btn" onclick="logout()">Logout</button>
        </div>
        <div class="image-container">
            <img id="uploaded-image" class="image-display" src="#" alt="Uploaded Image">
        </div>
    </div>

    <script>
        // Function to simulate a user logout
        function logout() {
            alert('You have been logged out.');
            document.getElementById('dashboard').classList.remove('active');
            window.location.href = 'index.html';
        }

        // Function to simulate a successful login
        function simulateLogin(email) {
            document.getElementById('dashboard').classList.add('active');
            document.getElementById('user-email').innerText = `Logged in as: ${email}`;
        }

        // Function to handle file upload
        function uploadFile() {
            const fileInput = document.getElementById('file-upload');
            const file = fileInput.files[0];
            const imageDisplay = document.getElementById('uploaded-image');

            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imageDisplay.src = e.target.result;
                    imageDisplay.style.display = 'block';
                };
                reader.readAsDataURL(file);
                alert(`Image "${file.name}" uploaded successfully.`);
            } else {
                alert('Please select a valid image file.');
            }
        }

        // Simulate the login process for demonstration purposes
        simulateLogin('user@example.com'); // Replace with actual user email
    </script>
</body>

</html>
