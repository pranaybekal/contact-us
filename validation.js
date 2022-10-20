
function validateform(){  
  var name=document.getElementById('name').value;
  var email= document.getElementById('email').value;

  
  if (name==null || name==""){  
    alert("Name can't be blank!!!");
    return false;
  }
  
  if(email==null || email==""){
    alert("Enter valid email address");
    return false;
  }

return true;
}  

