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
<form method="post" action="./controller/authentification.controller.php" name="registerform">
<div class="min-h-screen   flex flex-col justify-center ">
        <div class="relative py-3 max-w-xl sm:mx-auto">
        <div
                class="absolute inset-0 bg-gradient-to-r from-blue-300 bto-blue-600 shadow-lg transform rounded-3xl">
            </div>
            <div class="relative   bg-white shadow-lg rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                <div>
                        <h1 class=" flex justify-center text-2xl font-semibold">Let's Get Started </h1>
                    </div>
                    <div>
                    <h6 class=" mb-5 text-gray-500 font-semibold">Add Your Personal Details to Continue</h6>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class=" text-base  space-y-4 text-gray-700 text-lg leading-7">

                        <div class="relative">
                           <input type="text" name="first_name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 outline-none borer-rose-600" placeholder="Email address" required />
                           <label class="absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"><b>first name</b></label>
                        </div>   

                        <div class="relative">
                           <input type="text" name="last_name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 outline-none borer-rose-600" placeholder="Email address" required />
                           <label class="absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"><b>last name</b></label>
                        </div>   

                        <div class="relative">
                            <input type="email" name="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 outline-none borer-rose-600" placeholder="Email address" required />
                            <label class="absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"><b>Email</b></label>
                        </div>
                        <div class="relative">
                            <input type="password" name="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 outline-none borer-rose-600" placeholder="Email address" auto_complete="off" required />
                            <label class="absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"><b>Password</b></label>
                        </div>
                            <div class="relative">
                           <input type="password" name="passwordrepeat" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 outline-none borer-rose-600" placeholder="Email address" auto_complete="off" required />
                           <label class="absolute left-0 -top-3.5 text-gray-600 text-sm  peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm"><b>Repeat Password</b></label>
                        </div>

                        <div class="relative">
                                <button  type="submit" name="restart" class="bg-blue-300 text-blue-700 rounded-md px-4 py-1">Reset</button>
                                <button  type="submit" name="save" class="bg-blue-500 text-white rounded-md px-4 py-1">Next</button>
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