<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Tour</title>
    <!-- box-icons librarry -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="relative flex justify-center items-center lg:container lg:mx-auto md:container md:mx-auto sm:container sm:mx-auto w-full h-screen bg-violet-800">
        <div class="card px-6 py-4 bg-white rounded w-4/5">
            <header class="text-center flex justify-between items-center mb-8">
                <h1 class="font-semibold text-lg">Add New Tour</h1>
                <a href="/mvc-app/admin/dashboard"><button class="py-1 px-2 focus:outline-none focus:ring ring-red-100 rounded text-red-400"><i class='bx bx-exit pr-2' ></i>Cancel</button></a>
            </header>
            <div class="add-tour-form">
                <form action="<?php echo 'insertTour'; ?>" class="grid md:grid-cols-3 gap-y-4 gap-x-7" method="POST" enctype="multipart/form-data">
                    <label class="block w-full">
                        <span class="block text-sm font-medium text-slate-700 mb-2">Tour Name</span>
                        <input type="text" name="tour_name" class="h-9 w-full pl-2 py-1 border border-violet-200 rounded focus:outline-none focus:ring ring-violet-300" placeholder="Ex:.Paris, Safi"/>
                    </label>
                    <label class="block w-full">
                        <span class="block text-sm font-medium text-slate-700 mb-2">Tour Destination</span>
                        <input type="text" name="tour_destination" class="h-9 w-full pl-2 py-1 border border-violet-200 rounded focus:outline-none focus:ring ring-violet-300" placeholder="Ex:.Greece, Morocco"/>
                    </label>
                    <label class="block w-full">
                        <span class="block text-sm font-medium text-slate-700 mb-2">Tour Price</span>
                        <input type="number" name="tour_price" class="h-9 w-full pl-2 py-1 border border-violet-200 rounded focus:outline-none focus:ring ring-violet-300" placeholder="Ex:.$100"/>
                    </label>
                    <label class="block w-full col-span-full">
                        <span class="block text-sm font-medium text-slate-700 mb-2">Tour Description</span>
                        <textarea name="tour_description" id="description" class="w-full pl-2 py-1 border border-violet-200 rounded focus:outline-none focus:ring ring-violet-300" cols="30" rows="5" placeholder="Ex:.Description"></textarea>
                    </label>
                    <label class="block col-span-2">
                        <span class="block text-sm font-medium text-slate-700 mb-2">Tour Image</span>
                        <input type="file" name="tour_image" class="w-full border border-violet-200 rounded focus:outline-none focus:ring ring-violet-300
                            file:mr-4 file:py-2 file:px-4
                            file:rounded file:border-0
                            file:text-sm file:font-semibold
                            file:bg-violet-50 file:text-violet-700
                            hover:file:bg-violet-100
                        "/>
                    </label>
                    <label class="block col-span-1">
                        <span class="block text-sm font-medium text-slate-700 mb-2">Tour Status</span>
                        <select name="tour_status" class="h-9 w-full pl-2 py-1 border border-violet-200 rounded focus:outline-none focus:ring ring-violet-300" name="status" id="status">
                            <option class="px-4 py-1 hover:bg-violet-400 border-b" value="active">Active</option>
                            <option class="px-4 py-1 hover:bg-violet-400 border-b" value="unactive">unActive</option>
                        </select>
                    </label>
                    <label class="block col-span-1 col-start-3 w-full">
                        <button type="submit" name="submit" class="w-full border border-2 text-violet-700 rounded mt-5 py-2 px-5 border-violet-800 focus:outline-none focus:ring ring-violet-700 hover:bg-violet-800 hover:text-white transition-colors">Save</button>
                    </label>
                </form>
            </div>
        </div>
    </div>
</body>
</html>