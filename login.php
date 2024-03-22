<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="public/js/signup-scripts.js"></script>
    <title>Document</title>
</head>
<body class="bg-[#cdcdcd] text-sm overflow-hidden h-screen relative">
    <div class="w-3/4 h-[80%] shadow-xl bg-[#ffc8a8] absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 rounded-2xl z-0">
        <div class="w-full h-full flex items-center justify-center">
            <div class="w-2/5 relative">
                <div>
                    <img src="public/signup-img.png" alt="" class="mx-[18%] w-3/4 h-auto">
                </div>
            </div>
            <div class="w-3/5 h-full p-6 bg-[#eeeeee] rounded-2xl">
                <div class="w-full flex justify-between items-center mb-10">
                    <button onclick="window.location.href='signup.php'" class="flex gap items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" height="16" width="16"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z"/></svg>
                        <p class="w-full">Go back</p>
                    </button>
                    <p>Don't have an account? <a href="signup.php" class="text-blue-500">Create an account!</a></p>
                </div>
                <p class="text-2xl">Welcome to <span class="font-semibold">Pawfect!</span></p>
                <p class="text-slate-800 mb-10">Login to your account.</p>
                <form action="Controller/UserController.php" method="POST" class="w-1/2 mx-auto">
                    <div class="w-full flex flex-col gap-2 mb-5">
                        <label for="">Email Address</label>
                        <input type="text" name="email" class="w-full p-2 outline-none rounded-xl border focus:border-[#ffc8a8] shadow-md">
                    </div>
                    <div class="w-full flex gap-2 mb-8">
                        <div class="w-full flex flex-col gap-1">
                            <div>
                                <label for="">Password</label>
                                <div class="relative">
                                    <input id="pass" type="password" name="password" class="w-full p-2 outline-none rounded-xl border focus:border-[#ffc8a8] shadow-md">
                                    <button type="submit" onclick="togglePassword()" class="absolute right-2 top-1/2 transform -translate-y-1/2" >
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="15" width="15" fill="#4b4b4b"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex items-center">
                        <button name="login" class="bg-[#ffc8a8] w-full py-2 rounded-xl">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>