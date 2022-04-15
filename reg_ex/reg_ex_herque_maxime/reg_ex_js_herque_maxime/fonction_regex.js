function validateEmail(Email)
  {
    let regex = /\S+@\S+\.\S+/;
  }
  if (Email.match(regex)) {
    return true;
  }
  else {
    return false;
  }
  }
