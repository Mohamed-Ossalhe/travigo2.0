<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travigo :: Dashboard</title>
    <!-- box-icons librarry -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- header -->
    <header class="py-4 bg-violet-600">
        <div class="lg:container md:container md:mx-auto sm:container sm:mx-auto lg:mx-auto text-white flex justify-between items-center px-3">
            <div class="logo text-4xl">Travigo</div>
            <div class="username flex gap-7 items-center">
                <p class="pl-4"><i class='bx bxs-user-circle pr-2'></i><?php echo $_SESSION["username"]?></p>
                <a href="http://localhost/new-mvc-oop/public/admin/logout" class="px-4 py-1 hover:bg-violet-400"><i class='bx bx-log-out-circle pr-2'></i>Log Out</a>
            </div>
        </div>
    </header>
    <div class="main-content">
        <div class="lg:container md:container md:mx-auto sm:container sm:mx-auto lg:mx-auto text-white px-5">
            <!-- cards -->
            <header class="content-header py-7">
                <!-- start cards -->
                <div class="cards-wrapper grid md:grid-cols-3 gap-7">
                    <!-- card -->
                    <div class="card p-5 bg-violet-500 w-full rounded-md">
                        <span>Total Tours</span>
                        <h1 class="text-4xl font-bold m-4"><?=count($this->view_data)?></h1>
                    </div>
                    <!-- card -->
                    <div class="card p-5 bg-violet-500 w-full rounded-md">
                        <span>Active Tours</span>
                        <h1 class="text-4xl font-bold m-4"></h1>
                    </div>
                    <!-- card -->
                    <div class="card p-5 bg-violet-500 w-full rounded-md">
                        <span>Most Expensive Tour</span>
                        <h1 class="text-4xl font-bold m-4">Satorini Tour</h1>
                    </div>
                </div>
            </header>
            <!-- crud table -->
            <table class="w-full text-left text-black table-auto border">
                <thead class="bg-violet-400">
                    <tr class="divide-x">
                        <th class="p-2">ID</th>
                        <th class="p-2">Tour Image</th>
                        <th class="p-2">Tour Name</th>
                        <th class="p-2">Tour Description</th>
                        <th class="p-2">Tour Duration</th>
                        <th class="p-2">Price</th>
                        <th class="p-2">Status</th>
                        <th class="p-2">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tour -->
                    <?php
                    if($this->view_data){
                        foreach($this->view_data as $data){?>
                        <tr class="border-b-2 divide-x">
                            <td class="p-2 text-center"><?=$data["tour_id"]?></td>
                            <td class="p-2">
                                <img src="../../../public/img/tours/<?=$data["tour_image"]?>" alt="image" class="max-h-20">
                            </td>
                            <td class="p-2"><?=$data["tour_name"]?></td>
                            <td class="p-2"><?=$data["tour_description"]?></td>
                            <td class="p-2"><?=$data["tour_duration"]?></td>
                            <td class="p-2 text-center"><?=$data["tour_price"]?></td>
                            <td class="p-2 text-center"><?=$data["tour_status"]?></td>
                            <td class="p-2 text-center">
                                <a href="http://localhost/new-mvc-oop/public/admin/modifyTour/<?=$data["tour_id"]?>" class="text-3xl text-cyan-800 mr-2"><i class='bx bx-edit'></i></a>
                                <a href="show?" class="text-3xl text-violet-800 mr-2"><i class='bx bx-show-alt'></i></a>
                                <a href="http://localhost/new-mvc-oop/public/admin/deleteTour/<?=$data["tour_id"]?>" class="text-3xl text-red-500"><i class='bx bx-trash-alt'></i></a>
                            </td>
                        </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
            <div class="buttons text-right my-3">
                <a href="../admin/addTour/" class="add-tour">
                    <button class="bg-indigo-800 text-white mt-4 py-2 px-4 rounded focus:outline-none focus:ring hover:bg-indigo-500 transition-colors"><i class='bx bx-plus mr-2'></i>Add New Tour</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>