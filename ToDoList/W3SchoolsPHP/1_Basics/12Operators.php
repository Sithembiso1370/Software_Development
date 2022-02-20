<?php

echo "to fill with all kinds of Operators ";
echo '<br>';

// the tenary operator
  // if empty($user) = TRUE, set $status = "anonymous"
  echo $status = (empty($user)) ? "anonymous" : "logged in";
  echo("<br>");

  $user = "John Doe";
  // if empty($user) = FALSE, set $status = "logged in"
  echo $status = (empty($user)) ? "anonymous" : "logged in";