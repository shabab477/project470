
function addError(element)
{
    $(element).removeClass('has-success');
    $(element).addClass('has-error');
}

function addSuccess(element)
{

    $(element).removeClass('has-error');
    $(element).addClass('has-success');
}

function validateName(element, parent)
{
  if(checkForNull(element))
  {
    //remove good class
    //add error class
    addError(parent);
    return false;
  }
  else
  {
    //vice versa
    addSuccess(parent);
    return true;
  }

}



function checkForNull(element)
{
  if(element.value === null || element.value.length == 0)
  {
    return true;
  }
  return false;
}

function validateEmail(element, parent)
{
  if(checkForNull(element) || !checkForEmail(element.value))
  {
    //add good remove bad
    addError(parent);
    return false;
  }
  else
  {
    addSuccess(parent);
    return true;
  } 
}

function validatePass(element, parent)
{
  if(checkForNull(element) || !isAlphaNumeric(element.value))
  {
    //add good remove bad
    addError(parent);
    return false;
  }
  else
  {
    addSuccess(parent);
    return true;
  }
  
}


function validateConf(passElement, confElement, parent)
{
  flag = true;
  if(checkForNull(passElement) || checkForNull(confElement) || passElement.value !== confElement.value)
  {
    //show red
    addError(parent);
    return false;
  }
  else
  {
    addSuccess(parent);
    return true;
  }
}

function validatePhone(element, parent)
{

  if(checkForNull(element) || !isPhone(element.value))
  {
    addError(parent);
    return false;
  }
  else
  {
    addSuccess(parent);
    return true;
  }
}


function isPhone(value)
{
  //put logic
  var phoneReg = /^\d{11}$/;
  return phoneReg.test(value);
}

function isAlphaNumeric(value)
{
  //put logic
  var alphaReg = /^[a-z0-9]{7,}$/i;
  return alphaReg.test(value);
}

function checkForEmail(value)
{
   var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(value);
}

function validateForm(form)
{
  var phone = form['phone'];
  var pass = form['password'];
  var email = form['email'];
  var name = form['name'];

  console.log("value is " + phone.value);

  if(validatePhone(phone)  && validatePass(pass) && validateName(name) && 
    validateEmail(email))
  {
    //submit
    return true;
  }
  else
  {
    //alert 
    bootbox.alert({
        message: "You have not filled the info correctly",
        backdrop: true,
        
    });
  }

    return false;
  
}

function validateFileUpload() {
    
    var fuData = document.getElementById('fileChooser');
    var FileUploadPath = fuData.value;

    if (FileUploadPath == '') {
        bootbox.alert("Please upload an image");


        $("#fileChooser").val('');
        return false;
    } 
    else 
    {
        var Extension = FileUploadPath.substring(
                FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

        var size = fuData.files[0].size / 1024 / 1024;

        if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                        || Extension == "jpeg" || Extension == "jpg" && size <= 2) 
        {
          return true;
        } 
        else 
        {
          bootbox.alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP with size of 2MB. ");
          
          $("#fileChooser").val('');

          return false;
        }
      }
  }



