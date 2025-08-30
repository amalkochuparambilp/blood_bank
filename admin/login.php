<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #d32f2f 0%, #b71c1c 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .form-title {
            text-align: center;
            color: #333;
            margin-bottom: 1rem;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        label {
            color: #555;
            font-weight: bold;
        }

        input {
            padding: 0.75rem;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #667eea;
        }

        .login-btn {
            background: linear-gradient(135deg, #f44336 0%, #b71c1c 100%);
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.2s;
            margin-top: 1rem;
        }

        .login-btn:hover {
            transform: translateY(-2px);
        }

        .error-message {
            color: #e74c3c;
            text-align: center;
            margin-top: 1rem;
            display: none;
        }

        .success-message {
            color: #27ae60;
            text-align: center;
            margin-top: 1rem;
            display: none;
        }

        .forgot-password {
            text-align: center;
            margin-top: 1rem;
        }

        .forgot-password a {
            color: #667eea;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="form-title">Admin Login</h2>
        <form class="login-form" id="loginForm">
            <div class="input-group">
                <label for="username">Username or Email</label>
                <input type="text" id="username" name="username" required>
            </div>
            
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <button type="submit" class="login-btn">Login</button>
            
            <div class="error-message" id="errorMessage">
                Invalid username or password. Please try again.
            </div>
            
            <div class="success-message" id="successMessage">
                Login successful! Redirecting...
            </div>
            
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('errorMessage');
            const successMessage = document.getElementById('successMessage');
            
            // Simple validation (in a real app, this would be server-side)
            // Demo credentials
            const validUsers = {
                'admin': 'password123',
                'user@example.com': 'mypassword',
                'demo': 'demo123'
            };
            
            if (validUsers[username] && validUsers[username] === password) {
                // Successful login
                errorMessage.style.display = 'none';
                successMessage.style.display = 'block';
                
                // Redirect after successful login (simulate)
                setTimeout(function() {
                    alert('Login successful! In a real application, you would be redirected to the dashboard.');
                    window.location.href = 'dashboard.html';
                }, 1500);
            } else {
                // Failed login
                successMessage.style.display = 'none';
                errorMessage.style.display = 'block';
            }
        });
    </script>
</body>
</html>