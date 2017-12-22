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
      $result_set = self::find_this_query("SELECT * FROM users WHERE id = $id LIMIT 1");
      $found_user = mysqli_fetch_array($result_set);
      return self::instantiation($found_user);
   }

   private static function find_this_query($sql) {
      global $database;
      $result_set = $database->query($sql);
      return $result_set;
   }

}


?>