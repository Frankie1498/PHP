<?php
    session_start();
   echo $session = session_encode().'<br>';
   echo $session = session_decode($session);