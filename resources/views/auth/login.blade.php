<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <!-- Login Form Card -->
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">

        <!-- Title and Description -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-semibold text-green-500">Log In</h2>
            <p class="text-gray-600">Welcome back! Please log in to your account.</p>
        </div>

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4 relative">
                <label for="email" class="sr-only">Email Address</label>
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <i class="fas fa-envelope text-gray-400"></i>
                </span>
                <input id="email" type="email" name="email" placeholder="Email Address"
                    class="block w-full px-4 py-3 pl-10 border rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 border-gray-300"
                    required autocomplete="email">
                @error('email')
                    <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4 relative">
                <label for="password" class="sr-only">Password</label>
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <i class="fas fa-lock text-gray-400"></i>
                </span>
                <input id="password" type="password" name="password" placeholder="Password"
                    class="block w-full px-4 py-3 pl-10 border rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 border-gray-300"
                    required autocomplete="current-password">
                <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                    onclick="togglePasswordVisibility('password')">
                    <i class="fas fa-eye" id="eye-password"></i>
                </span>
                @error('password')
                    <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-6">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="h-4 w-4 text-green-500 focus:ring-green-500 border-gray-300 rounded">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>

                <a href="#" class="text-sm text-green-500 hover:underline">Forgot your password?</a>
            </div>

            <!-- Login Button -->
            <button type="submit"
                class="w-full py-3 bg-green-500 text-white rounded-md font-semibold hover:bg-green-600 transition duration-150 ease-in-out">Log In</button>
        </form>

        <!-- Already Registered Link -->
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">Don't have an account?
                <a href="{{ route('register') }}" class="text-green-500 hover:underline">Register</a>
            </p>
        </div>
    </div>

    <script>
        function togglePasswordVisibility(id) {
            const passwordInput = document.getElementById(id);
            const eyeIcon = document.getElementById('eye-password');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>

</body>

</html>