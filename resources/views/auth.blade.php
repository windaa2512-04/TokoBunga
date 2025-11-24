<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Register - Whispering Flora</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        :root {
            --color-pastel-bliss-1: #FFB5A7; 
            --color-pastel-bliss-2: #FCD5CE; 
            --color-pastel-bliss-3: #F8EDEB; 
            --color-pastel-bliss-4: #F9DCC4; 
            --color-pastel-bliss-5: #FEC89A; 
            
            --color-text-dark: #5A4B4B; 
            --color-text-light: #8C7878; 
            --color-button-primary: #B2967D; 
            --color-accent-strong: #ED3878; 

            --font-display: 'Playfair Display', serif;
            --font-body: 'Quicksand', sans-serif;
        }

        body {
            margin: 0; padding: 0;
            font-family: var(--font-body);
            color: var(--color-text-dark);
            min-height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: var(--color-pastel-bliss-3); 
        }

        .split-auth-container {
            display: flex;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08), 0 5px 15px rgba(0, 0, 0, 0.05); 
            max-width: 1000px; 
            width: 90%;
            overflow: hidden; 
            min-height: 600px; 
        }

        .auth-image-panel {
            flex: 1; 
            background: url('{{ asset("images/logo.png") }}') no-repeat center center; 
            background-size: cover;
            position: relative;
            display: flex;
            flex-direction: column; 
            justify-content: flex-end; 
            color: white; 
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            padding: 20px;
            text-align: center;
        }

        .auth-image-panel::before { 
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.2) 60%, rgba(0, 0, 0, 0.1) 100%);
        }
        
        .auth-image-panel-content {
            position: relative;
            z-index: 1;
        }

        .auth-image-panel h2 {
            font-family: var(--font-display);
            font-size: 38px;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .auth-image-panel p {
            font-size: 18px;
            line-height: 1.5;
        }

        .auth-form-panel {
            flex: 1; 
            padding: 50px 40px; 
            display: flex;
            flex-direction: column;
            justify-content: center; 
        }

        .welcome-title {
            font-family: var(--font-display);
            font-size: 32px; 
            color: var(--color-accent-strong);
            margin-bottom: 20px; 
            text-align: center;
            line-height: 1.2;
        }

        .auth-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px; 
            border-bottom: 1px solid var(--color-pastel-bliss-2);
        }

        .auth-tab-button {
            background: none;
            border: none;
            padding: 12px 20px; 
            font-family: var(--font-body);
            font-size: 16px; 
            font-weight: 600;
            color: var(--color-text-light);
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .auth-tab-button.active {
            color: var(--color-accent-strong);
        }

        .auth-tab-button.active::after {
            content: '';
            position: absolute;
            bottom: -1px; 
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--color-accent-strong);
            border-radius: 2px;
        }

        .auth-form-wrapper {
            position: relative;
            min-height: 280px; 
            transition: height 0.5s ease-in-out;
            margin-top: 15px; 
        }

        .auth-form {
            position: absolute; 
            top: 0;
            left: 0;
            width: 100%;
            opacity: 0;
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
            transform: translateX(20px); 
            pointer-events: none; 
        }

        .auth-form.active {
            opacity: 1;
            transform: translateX(0);
            pointer-events: auto; 
            position: relative; 
        }
        
        .auth-form h2 {
            font-family: var(--font-display);
            font-size: 28px; 
            color: var(--color-accent-strong);
            margin-bottom: 15px; 
            text-align: center;
        }

        .form-group {
            margin-bottom: 12px; 
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px; 
            font-weight: 500;
            color: var(--color-text-dark);
            font-size: 14px; /* DIUBAH: Font size label lebih kecil */
        }

        .form-group input,
        .form-group select { 
            width: 100%; /* Ditetapkan 100% dari parent, padding & border akan masuk dalam hitungan berkat box-sizing */
            padding: 10px; 
            border: 1px solid var(--color-pastel-bliss-2);
            border-radius: 8px; 
            font-family: var(--font-body);
            font-size: 14px; 
            color: var(--color-text-dark);
            transition: border-color 0.3s, box-shadow 0.3s;
            background-color: var(--color-pastel-bliss-3); 
            box-sizing: border-box; /* PENTING: Memastikan padding dan border dihitung dalam lebar */
            /* Hapus semua properti khusus dropdown dari sini (background-image, appearance, padding-right, dll.) */
        }

        /* Styling KHUSUS untuk SELECT (dropdown) */
        .form-group select { 
            -webkit-appearance: none; 
            -moz-appearance: none;    
            appearance: none;         
            background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23ED3878%22%20d%3D%22M287%20162.7c-3.6%203.6-7.8%206-12.3%207.2-4.5%201.2-9.2%200-13.7-3.6L146.2%2050.5%2031.4%20166.3c-4.5%203.6-9.2%204.8-13.7%203.6-4.5-1.2-8.7-3.6-12.3-7.2-7.2-7.2-7.2-18.4%200-25.6L133.5%2012.3c7.2-7.2%2018.4-7.2%2025.6%200l133.5%20133.5c7.2%207.2%207.2%2018.4%200%2025.6z%22%2F%3E%3C%2Fsvg%3E'); 
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 12px;
            padding-right: 30px; /* Memberi ruang untuk panah */
        }

        .form-group input:focus,
        .form-group select:focus { 
            outline: none;
            border-color: var(--color-accent-strong);
            box-shadow: 0 0 0 2px rgba(237, 56, 120, 0.3); 
            background-color: white; 
        }

        .form-submit-button {
            width: 100%;
            padding: 12px 20px; 
            border-radius: 20px; 
            background-color: var(--color-accent-strong);
            color: white;
            font-family: var(--font-body);
            font-size: 16px; 
            font-weight: 700;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 5px 15px rgba(237, 56, 120, 0.3);
            margin-top: 8px; 
        }

        .form-submit-button:hover {
            background-color: #d12e69; 
            transform: translateY(-1px); 
            box-shadow: 0 6px 15px rgba(237, 56, 120, 0.4); 
        }

        .forgot-password {
            margin-top: 8px; 
            font-size: 13px; 
            text-align: center;
        }

        .forgot-password a {
            color: var(--color-text-light);
            text-decoration: none;
        }

        .forgot-password a:hover {
            color: var(--color-accent-strong);
            text-decoration: underline;
        }

        /* Responsive Design untuk Split Layout */
        @media (max-width: 900px) {
            .split-auth-container {
                flex-direction: column; 
                max-width: 500px;
                min-height: unset; 
            }
            .auth-image-panel {
                min-height: 250px; 
                justify-content: center; 
                padding: 40px 20px; 
            }
            .welcome-title {
                font-size: 28px; 
                margin-top: 15px; 
                margin-bottom: 10px; 
            }
            .auth-form-panel {
                padding: 35px 30px; 
            }
            .auth-tabs {
                margin-bottom: 15px; 
            }
            .auth-form h2 {
                margin-bottom: 12px; 
            }
            .form-group {
                margin-bottom: 10px; 
            }
            .form-group label,
            .form-group input,
            .form-group select { /* DITAMBAHKAN: Untuk select */
                font-size: 13px; /* DIUBAH: Font size lebih kecil */
            }
            .form-submit-button {
                margin-top: 6px; 
            }
            .forgot-password {
                margin-top: 6px; 
            }
        }

        @media (max-width: 600px) {
            .auth-image-panel {
                min-height: 200px;
                padding: 30px 20px;
            }
            .auth-image-panel h2 {
                font-size: 30px;
            }
            .auth-image-panel p {
                font-size: 16px;
            }
            .auth-form-panel {
                padding: 25px 20px; 
            }
            .welcome-title {
                font-size: 22px; 
                margin-bottom: 10px;
            }
            .auth-tab-button {
                font-size: 14px; 
                padding: 8px 10px; 
            }
            .auth-form h2 {
                font-size: 22px; 
            }
            .form-group label,
            .form-group input,
            .form-group select { /* DITAMBAHKAN: Untuk select */
                font-size: 12px; /* DIUBAH: Font size lebih kecil */
            }
            .form-group input,
            .form-group select { /* DITAMBAHKAN: Untuk select */
                padding: 8px; 
            }
            .form-submit-button {
                font-size: 14px; 
                padding: 10px 15px;
            }
            .forgot-password {
                font-size: 11px; 
            }
        }
    </style>
</head>
<body>
    <div class="split-auth-container">
        <div class="auth-image-panel">
            <div class="auth-image-panel-content">
                <p>Jika kata tak cukup, biar bunga yang bicara.</p>
            </div>
        </div>

        <div class="auth-form-panel">
            <h1 class="welcome-title">Welcome to Whispering Flora!</h1> 

            <div class="auth-tabs">
                <button class="auth-tab-button active" data-tab="signin">Sign In</button>
                <button class="auth-tab-button" data-tab="signup">Sign Up</button>
            </div>

            <div class="auth-form-wrapper">
                {{-- Sign In Form --}}
                <form class="auth-form active" id="signin-form">
                    <h2>Welcome Back!</h2>
                    <div class="form-group">
                        <label for="signin-email">Email</label>
                        <input type="email" id="signin-email" name="email" required autocomplete="email">
                    </div>
                    <div class="form-group">
                        <label for="signin-password">Password</label>
                        <input type="password" id="signin-password" name="password" required autocomplete="current-password">
                    </div>
                    {{-- BARU: Dropdown Role untuk Sign In --}}
                    <div class="form-group">
                        <label for="signin-role">Role</label>
                        <select id="signin-role" name="role" required>
                            <option value="">Select your role</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                            <option value="manager">Manager</option>
                        </select>
                    </div>
                    <button type="submit" class="form-submit-button">Sign In</button>
                    <p class="forgot-password"><a href="#">Forgot Password?</a></p>
                </form>

                {{-- Sign Up Form --}}
                <form class="auth-form" id="signup-form">
                    <h2>Let's Join Whispering Flora!</h2> 
                    <div class="form-group">
                        <label for="signup-name">Full Name</label>
                        <input type="text" id="signup-name" name="name" required autocomplete="name">
                    </div>
                    <div class="form-group">
                        <label for="signup-email">Email</label>
                        <input type="email" id="signup-email" name="email" required autocomplete="email">
                    </div>
                    <div class="form-group">
                        <label for="signup-password">Password</label>
                        <input type="password" id="signup-password" name="password" required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <label for="signup-confirm-password">Confirm Password</label>
                        <input type="password" id="signup-confirm-password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    {{-- BARU: Dropdown Role untuk Sign Up --}}
                    <div class="form-group">
                        <label for="signup-role">Role</label>
                        <select id="signup-role" name="role" required>
                            <option value="">Select your role</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                            <option value="manager">Manager</option>
                        </select>
                    </div>
                    <button type="submit" class="form-submit-button">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const signInForm = document.getElementById('signin-form');
        const signUpForm = document.getElementById('signup-form');
        const signInTab = document.querySelector('[data-tab="signin"]');
        const signUpTab = document.querySelector('[data-tab="signup"]');
        const authFormWrapper = document.querySelector('.auth-form-wrapper');

        function updateFormWrapperHeight() {
            if (signInForm.classList.contains('active')) {
                authFormWrapper.style.height = signInForm.offsetHeight + 'px';
            } else if (signUpForm.classList.contains('active')) {
                authFormWrapper.style.height = signUpForm.offsetHeight + 'px';
            }
        }

        function showTab(tabName) {
            if (tabName === 'signin') {
                signInTab.classList.add('active');
                signUpTab.classList.remove('active');
                signInForm.classList.add('active');
                signUpForm.classList.remove('active');
            } else {
                signUpTab.classList.add('active');
                signInTab.classList.remove('active');
                signUpForm.classList.add('active');
                signInForm.classList.remove('active');
            }
            // Panggil updateFormWrapperHeight setelah transisi form selesai (opsional, untuk akurasi)
            setTimeout(updateFormWrapperHeight, 500); 
        }

        signInTab.addEventListener('click', () => showTab('signin'));
        signUpTab.addEventListener('click', () => showTab('signup'));

        window.addEventListener('load', () => {
            showTab('signin');
        });
        
        window.addEventListener('resize', updateFormWrapperHeight); // Perbaiki agar selalu update

        // Memastikan tinggi wrapper diupdate saat form diisi (jika konten berubah)
        signInForm.addEventListener('input', updateFormWrapperHeight);
        signUpForm.addEventListener('input', updateFormWrapperHeight);

        signInForm.addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Sign In clicked! (Implement your Laravel login logic)');
        });

        signUpForm.addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Sign Up clicked! (Implement your Laravel registration logic)');
        });
    </script>
</body>
</html>