<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));
  
  //echo file_get_contents("php://input");



  $post->userMail = $data->userMail;
  $post->userPhone = $data->userPhone;
  $post->userPass = $data->userPass;
  $post->userGetin = $data->userLogin;
 
  //verify user if exist
  if($post->isUserExist()) {
    $post->login();
  } else {
    //not registred user
    echo json_encode(
      array('message' => 'You are not a registred user. Create your account it free')
    );
  }

// api need to send like this json flow
//   {
//     "userMail": "mailtobsudheer@gmail.com",
//     "userPhone": "9640405005",
//     "userPass": "fgfdg6578fd6g58fg5d8fg",
//     "userLogin": "true"
// }

 
?>

