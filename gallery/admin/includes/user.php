<?php 

class User {

   private $id;
   public $username;
   private $password;
   public $first_name;
   public $last_name;

   private static function instantiation($user_record) {

      $user_object = new self;

      foreach ($user_record as $attribute => $value) {
         if ($user_object->has_the_attribute($attribute)) {
            $user_object->$attribute = $value;
         }
      }

      return $user_object;
   }

   private function has_the_attribute($attribute) {
      $object_properties = get_object_vars($this);
      return array_key_exists($attribute, $object_properties);
   }

   public static function find_all_users() {
      return self::find_this_query("SELECT * FROM users");
   }

   public static function find_user_by_id($id) {
      global $database;
      $the_result_array = self::find_this_query("SELECT * FROM users WHERE id = $id LIMIT 1");
      return !empty($the_result_array) ? array_shift($the_result_array) : false;
   }

   private static function find_this_query($sql) {
      global $database;
      $result_set = $database->query($sql);
      $user_object_array = array();

      while ($row = mysqli_fetch_array($result_set)) {
         $user_object_array[] = self::instantiation($row); 
      }

      return $user_object_array;
   }
}

?>