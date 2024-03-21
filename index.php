<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="src/output.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>
    #header{
        background-image: url('public/hero.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
</head>
<body class="p-4 bg-[#fdfdfd] text-sm">
    <!-- Header -->
    <div id="header" class="w-full h-screen rounded-3xl relative mb-28">
        <div class="w-2/5 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <p class="text-5xl text-center font-semibold text-[#e9e9e9]">Breed with condifence:</p>
            <p class="text-2xl text-center text-[#e9e9e9]">Where Dogs Find Their Perfect Match</p>
            <form action="" class="w-full flex gap-2">
                <input type="search" class="w-3/4 py-2 px-4 text-white bg-[#e9e9e982] rounded-full outline-none" placeholder="Search here">
                <button class="w-1/4 py-2 bg-[#e9e9e9] rounded-full">Search</button>
            </form>
        </div>
        
        <div class="w-3/4 flex items-center justify-evenly rounded-md absolute -bottom-8 left-1/2 transform -translate-x-1/2">
            <div class="w-1/6 flex flex-col items-center justify-center bg-[#ffc8a8] py-2 rounded-xl shadow-lg">
                <p class="text-center text-lg font-medium">Total Dog Owners</p>
                <p>30</p>
            </div>
            <div class="w-1/6 flex flex-col items-center justify-center bg-[#ffc8a8] py-2 rounded-xl shadow-lg">
                <p class="text-center text-lg font-medium">Total Dogs Listed</p>
                <p>39</p>
            </div>
            <div class="w-1/6 flex flex-col items-center justify-center bg-[#ffc8a8] py-2 rounded-xl shadow-lg">
                <p class="text-center text-lg font-medium">Total Pairings</p>
                <p>28</p>
            </div>
            <div class="w-1/6 flex flex-col items-center justify-center bg-[#ffc8a8] py-2 rounded-xl shadow-lg">
                <p class="text-center text-lg font-medium">Total Rating</p>
                <p>5.0</p>
            </div>
        </div>
        <div class="w-full flex items-center justify-between p-4">
            <a href="#" class="w-1/3 text-2xl font-bold text-[#e9e9e9]">PAW'FECT MATCH</a>
            <div class="bg-[#e9e9e935] w-1/3 flex items-center justify-between py-2 px-4 rounded-full">
                <a href="" class="hover:text-white hover:text-semibold transition duration-200">Home</a>
                <a href="">Features</a>
                <a href="">About</a>    
                <a href="">Contacts</a>
            </div>
            <div class="w-1/3 flex justify-end gap-2">
                <a href="signup.php" class="px-6 py-1 rounded-full bg-[#e9e9e9]">Signup</a>
            </div>
        </div>
    </div>
    <!-- Features -->
    <div class="w-full mb-28">
        <div class="w-4/5 flex justify-between mx-auto mb-10">
            <p class="w-1/6 text-xl font-semibold">FEATURES</p>
            <p class="w-1/2">Explore our website's standout features, designed with you in mind. Discover user-friendly navigation, powerful search capabilities, and seamless communication tools. From intuitive profiles to tailored matchmaking, our features are crafted to enhance your experience and connect you with what matters most.</p>
        </div>
        <div class="w-4/5 mx-auto">
            <div class="w-full h-[300px] flex gap-10 mb-10">
                <div class="w-1/2 shadow-2xl bg-[#f1f1f1] rounded-xl p-10 flex flex-col items-center justify-center gap-3">
                    <p class="text-2xl font-semibold">Dog and Owner Profile Creation</p>
                    <p>Easily set up a profile for you and for your dog, including details such as breed, age, color and legal documents.</p>
                </div>
                <div class="w-1/2 shadow-2xl bg-[#f1f1f1] rounded-xl p-10 flex flex-col items-center justify-center gap-3">
                    <p class="text-2xl font-semibold">Advanced Search</p>
                    <p>Find the perfect mate for your dog by filtering through potential matches based on criteria like breed, color, and age.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->
    <div class="w-full">
        <div class="w-4/5 flex justify-between mx-auto mb-10">
            <div></div>
            <div></div>
        </div>
    </div>
</body>
</html>