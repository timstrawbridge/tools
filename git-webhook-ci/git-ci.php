<?php
  /*
    purpose:          this file will run the sh script and clone a git repo whenever the URL is triggered by a git deploy
    author:           timothy strawbridge
    date created:     1/15/2020
  */

  // This is for an apache server, nginx will have different headers

  header('Accept: application/json');
  $headers              = apache_request_headers();

  $token                = "987fGDZa98dfa98a798df0Za9sdflkahdZf98af";              # base64 encoded string git trigger ( minus the = )
  $gitlabToken          = "";

  // get X-Gitlab-Token in the header
  foreach( $headers as $key => $value ){
    if( $key == "X-Gitlab-Token" ){
      $gitlabToken    =  $value;
    }
  }

  // validate the token
  if( $gitlabToken == $token ){
    // run .sh file
    shell_exec('sh /path/to/web/folder/git_ci/pull_git.sh');
  }else{
    echo "It looks like you are trying to manually trigger the URL which is a no-no and you really shouldn't do that!";
  }
