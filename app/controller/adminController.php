<?php
    session_start();
    class adminController extends Controller {
        // ! views
        // redirect to login
        public function index($error="") {
            $this->view('admin/log-in', ["error"=>$error]);
            $this->view->render();
        }
        // admin dashboard page
        public function Dashboard() {
            if(!isset($_SESSION["logged"])) {
                header('location: http://localhost/new-mvc-oop/public/admin/');
                return;
            }
            
            $this->view('admin/dashboard', $this->displayAllTours());
            $this->view->render();
        }
        // admin addtour page
        public function AddTour() {
            $this->view('admin/add-Tour');
            $this->view->render();
        }
        // admin update tour page
        // public function updateTour($id) {
            
        // }
        
        // admin login page process
        public function Login() {
            if(isset($_POST["submit"]) and !isset($_SESSION["logged"])) {
                $username = $this->validateInput($_POST["username"]);
                $email = $this->validateInput($_POST["email"]);
                $pass = $this->validateInput($_POST["password"]);
                if(empty($username) || empty($email) || empty($pass)) {
                    $this->index("Please Fill All the Fields");
                    return;
                    // header('location: http://localhost/new-mvc-oop/public/admin/');
                }
                $data = array(
                    "username" => $username,
                    "email" => $email,
                    "password" => $pass
                );
                $this->model('Admin');
                if(!$this->model->getAdmin($data)) {
                    $this->index("Please Check username, email or password are incorrect");
                    header('location: http://localhost/new-mvc-oop/public/admin/');
                    return;
                }
                $_SESSION["username"] = $data["username"];
                $_SESSION["logged"] = true;
                header('location: http://localhost/new-mvc-oop/public/admin/dashboard');
            }
        }
        // admin logout process
        public function Logout() {
            unset($_SESSION["logged"]);
            unset($_SESSION["username"]);
            if(!$_SESSION["logged"]) {
                header('location: http://localhost/new-mvc-oop/public/admin/');
            }
        }
        // validate inputs and remove special characters
        public function validateInput($value) {
            if(isset($value) and !empty($value)) {
                $data = trim($value);
                $data = stripcslashes($value);
                $data = htmlspecialchars($value);
                return $data;
            }
        }

        // ? Crud Operations
        // *insert new tour
        public function insertTour() {
            if(isset($_POST["submit"]) and $_SESSION["logged"] === true) {
                $name = $this->validateInput($_POST["name"]);
                $destination = $this->validateInput($_POST["destination"]);
                $price = $this->validateInput($_POST["price"]);
                $description = $this->validateInput($_POST["description"]);
                $duratoin = $this->validateInput($_POST["duratoin"]);
                $image = $_FILES["image"]["name"];
                $status = $this->validateInput($_POST["status"]);
                $data = array(
                    "name" => $name,
                    "destination" => $destination,
                    "price" => $price,
                    "description" => $description,
                    "duration" => $duratoin,
                    "image" => $image,
                    "status" => $status
                );
                $this->model('Tour');
                if($this->model->insertData($data)) {
                    header('location: http://localhost/new-mvc-oop/public/admin/dashboard');
                    return;
                }
                header('location: http://localhost/new-mvc-oop/public/admin/addTour');
            }
        }
        // *update tour
        public function modifyTour($id) {
            $this->view('admin/update-Tour');
            $this->view->render();
            if(isset($_POST["submit"]) and $_SESSION["logged"] === true) {
                $name = $this->validateInput($_POST["name"]);
                $destination = $this->validateInput($_POST["destination"]);
                $price = $this->validateInput($_POST["price"]);
                $description = $this->validateInput($_POST["description"]);
                $duratoin = $this->validateInput($_POST["duratoin"]);
                $image = $_FILES["image"]["name"];
                $status = $this->validateInput($_POST["status"]);
                $data = array(
                    "name" => $name,
                    "destination" => $destination,
                    "price" => $price,
                    "description" => $description,
                    "duration" => $duratoin,
                    "image" => $image,
                    "status" => $status,
                    "id" => $id
                );
                // print_r($data);
                $this->model('Tour');
                if($this->model->updateData($data)) {
                    header('location: http://localhost/new-mvc-oop/public/admin/dashboard');
                    return;
                }
                // header('location: http://localhost/new-mvc-oop/public/admin/update-Tour');
            }
        }
        // *display
        public function displayAllTours() {
            $this->model('Tour');
            return $this->model->displayAllData();
        }
        // *delete
        public function deleteTour($id) {
            $this->model('Tour');
            if(!$this->model->deleteData($id)) {
                header('location: http://localhost/new-mvc-oop/public/admin/dashboard');
                return;
            }
        }
    }