<?php
    require_once "../Model/UserModel.php";
    require_once "../Model/DogModel.php";

    $name = $_SESSION['owners_name'];
    $owner = "Jeric James Viernes";
    $petModel = new Dog();
    $pet = $petModel->fetchPets($owner);

    $userModel = new User();

    $userInfo = $userModel->fetchUserInfo($name);

    if($userInfo !== null){
        $user_fname = $userInfo['first_name'];
        $user_lname = $userInfo['last_name'];
        $email = $userInfo['email'];
    }
    
    $currentDate = date('l, F d, Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../public/logo.png">
    <link href="../src/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5bf9be4e76.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
    <script src="../public/js/clock.js"></script>
</head>
<body class="bg-main-color text-sm">
    <div class="w-full flex h-screen">
        <div class="w-4/5 bg-[#eeeeee] rounded-tr-3xl rounded-br-3xl">
            <div class="w-full h-full flex">
                <!-- Sidebar -->
                <div class="w-1/5 p-4 border-r border-[#555]">
                    <!-- Logo -->
                    <div class="w-full flex items-center justify-center gap-2 mb-24">
                        <img src="../public/logo.png" alt="Paw Icon" class="h-auto w-[30px]">
                        <p class="text-xl font-semibold">PAWFECT</p>
                    </div>
                    <!-- Profile -->
                    <div class="w-full mb-16">
                        <div class="mb-2 w-[150px] h-[150px] rounded-full mx-auto">
                            <img src="../public/hero.jpeg" alt="" class="w-full h-full object-cover rounded-full">
                        </div>
                        <div class="w-full text-center">
                            <p id="name" class="font-medium"><?php echo $user_fname . " " . $user_lname; ?></p>
                            <p id="email"><?php echo $email; ?></p>
                        </div>
                    </div>
                    <!-- Navigations -->
                    <div class="w-full flex flex-col">
                        <button onclick="window.location.href='#'" class="w-full text-left px-4 py-2 border-b-2 border-slate-500">
                            Dashboard
                        </button>
                        <button onclick="window.location.href='pet_owners.php'" class="w-full text-left px-4 py-2 hover:border-b-2 hover:border-slate-500">
                            Pet Owners
                        </button>
                        <button onclick="window.location.href='#'" class="w-full text-left px-4 py-2 hover:border-b-2 hover:border-slate-500">
                            Pets
                        </button>
                    </div>
                </div>
                <!-- Main div -->
                <div class="w-4/5 p-10 h-full">
                    <!-- name -->
                    <div class="w-full mb-10">
                        <p class="text-lg font-medium">Hello, <?php echo $user_fname; ?>!</p>
                        <div class="flex gap-2">
                            <p>Today is <?php echo $currentDate ?></p>
                            <p id="clock"></p>
                        </div>
                    </div>
                    <!-- most followed pet -->
                    <div class="mb-16">
                        <p class="text-lg mb-4">Your most followed pets!</p>
                        <div class="w-full flex items-center justify-evenly">
                            <div class="w-[200px] h-[200px] rounded-md shadow-lg relative">
                                <img src="../public/dogs/mhaya.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                <div class="w-full flex items-center justify-between px-1 bg-[#ffffff6f] py-2 absolute bottom-0 left-0">
                                    <div class="flex gap-1">
                                        <p>Name:</p>
                                        <p>Mhaya</p>
                                    </div>
                                    <div class="flex gap-1 items-center">
                                        <p>11.0k</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15" height="15" fill="red"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-[200px] h-[200px] rounded-md shadow-lg relative">
                                <img src="../public/dogs/marsha.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                <div class="w-full flex items-center justify-between px-1 bg-[#ffffff6f] py-2 absolute bottom-0 left-0">
                                    <div class="flex gap-1">
                                        <p>Name:</p>
                                        <p>Marsha</p>
                                    </div>
                                    <div class="flex gap-1 items-center">
                                        <p>11.0k</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15" height="15" fill="red"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-[200px] h-[200px] rounded-md shadow-lg relative">
                                <img src="../public/dogs/mhaya2.jpg" alt="" class="w-full h-full object-cover rounded-md">
                                <div class="w-full flex items-center justify-between px-1 bg-[#ffffff6f] py-2 absolute bottom-0 left-0">
                                    <div class="flex gap-1">
                                        <p>Name:</p>
                                        <p>Mhaya2</p>
                                    </div>
                                    <div class="flex gap-1 items-center">
                                        <p>11.0k</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15" height="15" fill="red"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pet list -->
                    <div class="w-full shadow-lg h-2/5">
                        <div class="w-full bg-main-color rounded-tl-2xl rounded-tr-2xl py-2 px-4 border-main-color">
                            Your pets
                        </div>
                        <div class="h-[85%] overflow-y-scroll relative">
                            <table class="w-full">
                                <tr class="text-left sticky top-0 left-0 bg-[#eee]">
                                    <th class="px-4 py-2">Pet Name</th>
                                    <th class="px-4 py-2">Pet Breed</th>
                                    <th class="px-4 py-2">Pet Age</th>
                                    <th class="px-4 py-2">Pet Dogtag</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                                <?php
                                    foreach ($pet as $p) {
                                        $pet_name = $p['name'];
                                        $pet_breed = $p['breed'];
                                        $pet_age = $p['age'];
                                        $pet_tag = $p['dog_tag'];
                                ?>
                                <tr class="">
                                    <td class="px-4 py-2"><?php echo $pet_name; ?></td>
                                    <td class="px-4 py-2"><?php echo $pet_breed; ?></td>
                                    <td class="px-4 py-2"><?php echo $pet_age; ?></td>
                                    <td class="px-4 py-2"><?php echo $pet_tag; ?></td>
                                    <td class="px-4 py-2">
                                        <div class="w-1/2 flex gap-4">
                                            <button class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="15" height="15" fill="green"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
                                            </button>
                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15" height="15" fill="blue"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg>
                                            </button>
                                            <button>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="15" height="15" fill="red"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breeding schedule -->
        <div class="w-1/5 p-4">
            <div class="w-full">
                <p class="text-xl font-medium mb-10">Breeding Schedule</p>
                <div class="flex gap-2 items-center ">
                    <div class="w-[50px] h-[50px] rounded-full">
                        <img src="../public/hero.jpeg" alt="image" class="w-full h-full object-cover rounded-full">
                    </div>
                    <div class="">
                        <p class="font-medium">With: Jonathan</p>
                        <p>March 29 2024 - Friday</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>