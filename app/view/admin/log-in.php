<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <!-- box-icons librarry -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="relative flex justify-center items-center lg:container lg:mx-auto md:container md:mx-auto sm:container sm:mx-auto w-full h-screen bg-violet-800">
        <div class="card px-5 py-4 bg-white rounded w-2/5">
            <header class="text-center flex justify-between items-center mb-8">
                <h1 class="font-semibold text-lg">Admin Log in</h1>
                <a href="../home/"><button class="py-1 px-2 focus:outline-none focus:ring ring-red-100 rounded text-red-400"><i class='bx bx-exit pr-2' ></i>Cancel</button></a>
            </header>
            <p><?php echo $this->view_data["error"]?></p>
            <form class="py-2" action="http://localhost/new-mvc-oop/public/admin/login" method="POST">
                <label class="block w-full mb-2">
                    <span class="block text-sm font-medium text-slate-700 mb-2">Username</span>
                    <input type="text" name="username" class="peer h-9 w-full pl-2 py-1 border border-violet-200 rounded focus:outline-none focus:ring ring-violet-300" placeholder="Ex:.Jhon Doe" required/>
                </label>        
                <label class="block w-full mb-2">
                    <span class="block text-sm font-medium text-slate-700 mb-2">Email</span>
                    <input type="email" name="email" class="peer h-9 w-full pl-2 py-1 border border-violet-200 rounded focus:outline-none focus:ring ring-violet-300" placeholder="Ex:.Email@gmail.com" required/>
                </label>
                <label class="block w-full mb-2">
                    <span class="block text-sm font-medium text-slate-700 mb-2">Password</span>
                    <input type="password" name="password"  class="peer h-9 w-full pl-2 py-1 border border-violet-200 rounded focus:outline-none focus:ring ring-violet-300" placeholder="Password" required/>
                </label>
                <label class="block col-span-1 col-start-3 w-full">
                    <button type="submit" name="submit" class="w-full border border-2 text-violet-700 rounded mt-5 py-2 px-5 border-violet-800 focus:outline-none focus:ring ring-violet-700 hover:bg-violet-800 hover:text-white transition-colors">Log in</button>
                </label>
            </form>
        </div>
    </div>
</body>
</html>