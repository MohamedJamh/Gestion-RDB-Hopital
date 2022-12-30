<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<form method="post" action="./controller/authentification.controller.php" name="loginform">
    <div class="min-h-screen  flex flex-col justify-center ">
        <div class="relative py-3 max-w-xl mx-auto">
            <div
                    class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform rounded-3xl">
            </div>
            <div class="relative px-4 py-10 bg-white shadow-lg rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <div>
                        <h1 class=" flex justify-center text-2xl font-semibold">Welcome Back !</h1>
                    </div>
                    <div>
                        <h6 class="text-gray-500 font-semibold">Login with your details to continue</h6>
                    </div>

                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="relative">
                                <input type="text" name="user"
                                       class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                                       placeholder="Email address" required/>
                                <label class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"><b>Email
                                        or Username</b></label>
                            </div>
                            <div class="relative">
                                <input type="password" name="password" auto_complete="off"
                                       class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                                       placeholder="Password" required/>
                                <label class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"><b>Password</b></label>
                            </div>
                            <div class="relative">
                                <button type="submit" name="login"
                                        class=" mt-2 bg-blue-500 text-white rounded-md px-2 py-1">Sing In
                                </button>
                            </div>
                            <div>
                                <h6 class=" flex justify-center text-gray-500 font-semibold text-xs">Don't have an
                                    account ? <a href="SingUp.php" class="text-black font-bold	">Sing Up</a></h6>
                                <p class="font-bold text-red-400">
                                    <?php
                                        echo @$_SESSION['message'];
                                        unset($_SESSION['message']);
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>