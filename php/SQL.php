<?php
    class SQL {
        public static $connection = null;

        public static function Connect() {
            self::$connection = new mysqli("sql4.freesqldatabase.com", "sql4415051", "DpGlFGBfdq", "sql4415051");
        }

        public static function MakeQuery($query) {
            if (self::$connection -> connect_errno) {
                echo "Failed to connect to MySQL: " . self::$connection -> connect_error;
                exit();
            }

            return self::$connection->query($query);
        }

        /// Return a single results for SQL query
        public static function GetResult($query) {
            $result = self::MakeQuery($query);
            if ($result->num_rows == 0) return null;
            while($result_row = $result->fetch_object()){
                $result->close();
                return $result_row;
            }
        }
        
        /// Return an array of results for SQL query
        public static function GetResults($query) {
            $result = self::MakeQuery($query);
            if ($result->num_rows == 0) return null;
            $results = array();
            while($result_row = $result->fetch_object()){
                array_push($results, $result_row);
            }
            $result->close();
            return $results;
        }
    }
?>