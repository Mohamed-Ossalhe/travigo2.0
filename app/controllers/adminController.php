<?php
    include 'core/controller.php';
    
class adminController extends adminModel {
    // ? Insert Data
    // public function insertTour($tour_name, $tourDestination, $tourPrice, $tourDescription, $tourImage, $tourStatus) {
    public function insertTour() {
            $tour_name = $_POST['tour_name'];
            $tour_destination = $_POST['tour_destination'];
            $tour_price = $_POST['tour_price'];
            $tour_description = $_POST['tour_description'];
            $tour_image = $_FILES['tour_image'];
            $tour_status = $_POST['tour_status'];
                //prepare image
                $image_name = $_FILES['tour_image']["name"];
                $image_tmp = $_FILES['tour_image']["tmp_name"];
            // echo $image_name;
            // $separate_extension = explode('.', $image_name);
            // $extension = strtolower($separate_extension[1]);

            if(isset($tour_name) || !empty($tour_name) && isset($tour_destination) || !empty($tour_destination) && isset($tour_price) || !empty($tour_price) && isset($tour_description) || !empty($tour_description) && isset($tour_image) || !empty($tour_image) && isset($tour_status) || !empty($tour_status)) {
                $data = array(
                    "name" => $tour_name,
                    "destination" => $tour_destination,
                    "price" => $tour_price,
                    "description" => $tour_description,
                    "image" => $image_name,
                    "status" => $tour_status
                );
                if($this->insertData($data)) {
                    $new_path = '../../img/tours/' . $image_name;
                    move_uploaded_file($image_tmp, $new_path);
                    header('location: dashboard');
                }
            }
        }
        // ? update data
        public function updateTour($id) {
            // ? get data from db to preview before update
            $updateData = $this->displayRow($id);
            //? render page
            Controller::view('update-tour', $updateData);
            //? insert updated data
            if(isset($_GET[$id])) {
                $tour_name = $_POST['tour_name'];
                $tour_destination = $_POST['tour_destination'];
                $tour_price = $_POST['tour_price'];
                $tour_description = $_POST['tour_description'];
                // $tour_image = $_FILES['tour_image'];
                $tour_status = $_POST['tour_status'];
                    //prepare image
                $image_name = $_FILES['tour_image']["name"];
                $image_tmp = $_FILES['tour_image']["tmp_name"];
                // $separate_extension = explode('.', $image_name);
                // $extension = strtolower($separate_extension[1]);

                if(isset($tour_name) || !empty($tour_name) && isset($tour_destination) || !empty($tour_destination) && isset($tour_price) || !empty($tour_price) && isset($tour_description) || !empty($tour_description) && isset($tour_image) || !empty($tour_image) && isset($tour_status) || !empty($tour_status)) {
                    $data = array(
                        "name" => $tour_name,
                        "destination" => $tour_destination,
                        "price" => $tour_price,
                        "description" => $tour_description,
                        "image" => $image_name,
                        "status" => $tour_status,
                        "id" => $id
                    );
                    if($this->updateData($data)) {
                        $new_path = '../../img/tours/' . $image_name;
                        move_uploaded_file($image_tmp, $new_path);
                    }
                }
            }
        }
        // ? Show Data
        public function displayTours() {
            $data = $this->getData();
            return $data;
        }
        // ? Show one row of data
        public function displayRow($id) {
            $data = $this->getRowData($id);
            return $data;
        }
        // ? show active tours
        public function getActiveTours() {
            return $this->getActiveData();
        }
        // ? Delete Tour
        public function deleteTour($id) {
            $this->deleteData($id);
        }
        
        // render admin views
        public function index() {
            // $this->view('dashboard', []);
            Controller::view('dashboard', []);
        }
        public function dashboard() {
            // $this->view('dashboard', []);
            Controller::view('dashboard', []);
        }
        public function addTour() {
            Controller::view('add-tour', []);
        }
        public function login() {
            Controller::view('log-in', []);
        }
        public function logout() {
            session_destroy();
            Controller::view('home', []);
        }
}

?>