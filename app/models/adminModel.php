<?php
    session_start();
    class adminModel extends DB {
        // ? insert tour data
        // protected function insertData($tourName, $tourDestination, $tourPrice, $tourDescription, $tourImage, $tourStatus)
        protected function insertData($data) {
            try {
                $stmt = $this->connect()->prepare("INSERT INTO `tours` (tour_name, tour_destination, tour_price, tour_description, tour_image, tour_status) VALUES(:name, :destination, :price, :description, :image, :status)");
                $stmt->bindParam("name", $data["name"]);
                $stmt->bindParam("destination", $data["destination"]);
                $stmt->bindParam("price", $data["price"]);
                $stmt->bindParam("description", $data["description"]);
                $stmt->bindParam("image", $data["image"]);
                $stmt->bindParam("status", $data["status"]);
                if($stmt->execute()) {
                    header('location: dashboard');
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
        // ? update inserted data
        // protected function updateData($tourName, $tourDestination, $tourPrice, $tourDescription, $tourImage, $tourStatus, $id) {
        protected function updateData($data) {
            try {
                $stmt = $this->connect()->prepare("UPDATE `tours` SET tour_name = :name, tour_destination = :destination, tour_price = :price, tour_description = :description, tour_image = :image, tour_status = :status WHERE tour_id = :id");
                $stmt->bindParam("name", $data["name"]);
                $stmt->bindParam("destination", $data["destination"]);
                $stmt->bindParam("price", $data["price"]);
                $stmt->bindParam("description", $data["description"]);
                $stmt->bindParam("image", $data["image"]);
                $stmt->bindParam("status", $data["status"]);
                $stmt->bindParam("id", $data["id"]);
                if($stmt->execute()) {
                    echo 'updated success';
                    header("location: dashboard");
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }
        // ? Delete inserted data
        protected function deleteData($id) {
            try {
                $stmt = $this->connect()->prepare("DELETE FROM `tours` WHERE tour_id = :id");
                $stmt->bindParam("id", $id);
                if($stmt->execute()) {
                    header('location: mvc-app/admin/dashboard');
                }
            }catch(PDOException $e) {
                return $e->getMessage();
            }
        }

        // ? Get data from database
        protected function getData() {
            try {
                $stmt = $this->connect()->prepare("SELECT * FROM `tours`");
                $stmt->execute();
                return $stmt->fetchAll();
            }catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        // ? Get one row of data from database
        protected function getRowData($id) {
            try {
                $stmt = $this->connect()->prepare("SELECT * FROM `tours` WHERE tour_id = :id");
                $stmt->bindParam("id", $id);
                $stmt->execute();
                return $stmt->fetch();
            }catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        // ? Get data from database
        protected function getActiveData() {
            try {
                $stmt = $this->connect()->prepare("SELECT * FROM `tours` WHERE `tour_status` = 'active'");
                $stmt->execute();
                return $stmt->fetchAll();
            }catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        // ? Get Most expensive data
        protected function getHiData() {
            try {
                $stmt = $this->connect()->prepare("SELECT * FROM `tours` WHERE `tour_status` = 'active'");
                $stmt->execute();
                return $stmt->fetchAll();
            }catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>