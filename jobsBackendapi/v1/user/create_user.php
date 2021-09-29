<?php 
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../config/Database.php';
include_once '../models/user/Userclass.modl.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate blog post object
$post = new User($db);

// Get raw posted data
$data = json_decode(file_get_contents("php://input"));

  //verify if not an object
  if(is_object($data)){
    $post->userMail = $data->userMail;
    $post->userPhone = $data->userPhone;
    $post->userPass = $data->userPass;
    $post->userName = $data->userName;
    exicuteReq($post);
  }
  else{
    echo json_encode(
      array('message' => 'invalid Request')
    );
  }

  function exicuteReq($post){
    //verify user if exist
      if($post->isUserExist()) {
        echo json_encode(
          array('message' => 'user all ready exist')
        );
      } else {
        //create account
        if($post->createUser()) {
            echo json_encode(
              array('message' => 'Account creation successfull')
            );
          } else {
            //create account req failed
            echo json_encode(
                array('message' => 'Account creation failed')
              );
          }
      }
  }

// api need to send like this json flow sign up
// {
    // "userMail": "dfds@gmdfail.1",
    // "userPhone": "1234567895",
    // "userPass": "fgfdg6578fd6g58fg5d8fg",
    // "userName": "sudheer"
// }

?>