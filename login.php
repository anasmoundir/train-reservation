<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <link rel="stylesheet" href="styll.css">
</head>
<body>
    <section class="bg-indigo-50 min-h-screen  flex items-center justify-center ">
        <div class="bg-blue-900 flex rounded-xl shadow-lg max-w-6xl p-4">
            
            <div class="md:block md:flex items-center  hidden w-1/2"> 
                <img class=" rounded-xl"  src="traavel.jpg" alt="">

            </div>
            <div class="md:w-1/2  px-16 py-8"> 
                <h2 class="font-bold text-3xl text-white ml-2 ">Login</h3>
                <form action="loginprocess.php" method ="POST" class="flex flex-col gap-4">
                   
                        <input class="p-3 mt-6  rounded-xl" type="text" name="email" placeholder="Enter your email">

                        <input class="p-3  rounded-xl " type="password" name="password" placeholder="*****************">
                    
                        <input class="p-3 border bg-[#B9E0FF] shadow-lg font-bold rounded-xl hover:scale-105 duration-300 " type="submit" value="LOGIN">

                        <p class="text-white lg:mt-4 md:mt-0">Don't have an accout ?<a href="Register.php" class="text-[#B9E0FF] font-bold hover:text-white "> Register here</a></p>
                </form>
 
            </div>
    
    

        </div>

       
    </section>
    
</body>
</html>