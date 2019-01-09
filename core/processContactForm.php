<?php
require 'matt/src/validation/validate.php';

use matt\validation;

$message = null;
$valid = new Validate();
$input = filter_input_array(INPUT_POST);

$args = [
  'name' => FILTER_SANITIZE_STRING,
  'subject' => FILTER_SANITIZE_STRING,
  'message' => FILTER_SANITIZE_STRING,
  'email' => FILTER_SANITIZE_EMAIL
];

if(!empty($input)){
  $valid->validation = [
    'email'=>[[
      'rule'=>'email',
      'message'=>'Please enter a valid email'
    ],[
      'rule'=>'notEmpty',
      'message'=>'Please enter an email'
    ]],
    'name'=>[[
      'rule'=>'notEmpty',
      'message'=>'Please enter a your name'
    ]],
    'message'=>[[
      'rule'=>'notEmpty',
      'message'=>'Please add a message'
    ]]
  ];

  $valid->check($input);

  if(empty($valid->errors)){

    # Instantiate the client.
    //$mgClient = new Mailgun(MG_KEY);
    //$domain = MG_DOMAIN;
/*
    # Make the call to the client.
    $result = $mgClient->sendMessage("$domain",
              array('from'    => "{$input['name']} <{$input['email']}>",
                    'to'      => 'Matthew Campen <mattcampen@gmail.com>',
                    'subject' => $input['subject'],
                    'text'    => $input['message']
                  )
                );
    # You can see a record of this email in your logs: https://app.mailgun.com/app/logs
    var_dump($result);
*/
                $response = 200;
                if($response === 200){
                  header ('LOCATION:thanks.php');
                }
    //$message = "<div class=\"alert alert-success\">Your form has been submitted!</div>";
  }else{
    $message = "<div class=\"alert alert-danger\">Your form has errors!</div>";
  }
}

