<?php
# php code for logout the sessiion variable was email

unset($_SESSION['email']);
# destroy session
session_destroy();
# redirect to "html/" foolderusing js
header("Location: ../html/index.html");
