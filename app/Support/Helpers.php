<?php

  function setIcon($type) {
    if($type) {
      return "/images/$type.svg";
    }
  }

  function setData($data) {
    if(isset($data['type'])) {
      $type = $data['type'];
      return $data[$type];
    }
  }
