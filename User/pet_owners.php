<?php
    require_once "../Model/UserModel.php";

    $userModel = new User();
    $name = $_SESSION['owners_name'];
    $userInfo = $userModel->fetchUserInfo($name);

    if($userInfo !== null){
        $user_fname = $userInfo['first_name'];
        $user_lname = $userInfo['last_name'];
        $email = $userInfo['email'];
    }

    $users = $userModel->fetchUsers();
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
                        <button onclick="window.location.href='user_dashboard.php'" class="w-full text-left px-4 py-2 hover:border-b-2 hover:border-slate-500">
                            Dashboard
                        </button>
                        <button onclick="window.location.href='#'" class="w-full text-left px-4 py-2 border-b-2 border-slate-500">
                            Pet Owners
                        </button>
                        <button onclick="window.location.href='#'" class="w-full text-left px-4 py-2 hover:border-b-2 hover:border-slate-500">
                            Pets
                        </button>
                        <button onclick="window.location.href='#'" class="w-full text-left px-4 py-2 hover:border-b-2 hover:border-slate-500">
                            Breeding
                        </button>
                    </div>
                </div>
                <!-- Main div -->
                <div class="w-4/5 p-10 h-full">
                    <!-- name -->
                    <div class="w-full mb-10">
                        <p class="text-lg font-medium">Hello, <?php echo $user_fname; ?>!</p>
                        <p>Today is Monday, 25 March 2024</p>
                    </div>
                    <div class="w-full">
                        <form action="" method="GET" class="w-full mb-10">
                            <input type="search" name="search" placeholder="Search ..." class="w-1/2 outline-none px-4 py-2 rounded-xl mb-4">
                            <div class="w-full">
                                <table class="w-full">
                                    <tr class="bg-main-color text-left">
                                        <th class="w-[20%] p-2">Name</th>
                                        <th class="w-[20%]">Contact Number</th>
                                        <th class="w-[25%]">Email Address</th>
                                        <th class="">Present Address</th>
                                    </tr>
                                    <?php
                                    foreach($users as $u){
                                        $users_fname = $u['first_name'];
                                        $users_lname = $u['last_name'];
                                        $users_email = $u['email'];
                                        $users_number = $u['contact_number'];
                                        $users_address = $u['address'];
                                    ?>
                                        <tr class="border-b-2" onclick="showUserData('<?php echo $users_email; ?>')">
                                            <td class="w-[20%] p-2"><?php echo $users_fname . ' ' . $users_lname ?></td>
                                            <td class="w-[20%]"><?php echo $users_number ?></td>
                                            <td class="w-[25%]"><?php echo $users_email ?></td>
                                            <td><?php echo $users_address ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                                <script>
                                    function showUserData(email){
                                        var url = 'owners_profile.php/?email=' + encodeURIComponent(email);
                                        window.location.href = url;
                                    }
                                </script>
                            </div>
                        </form>
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