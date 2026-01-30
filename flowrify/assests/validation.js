function validate(){
                let first_name = document.getElementById("first_name").value;
                if (first_name === ""){
                    document.getElementById("first_name_error").innerText = "please enter your first name";
                    return false;
                }
                let last_name = document.getElementById("last_name").value;
                if (last_name === ""){
                    document.getElementById("last_name_error").innerText = "please enter your last name";
                    return false;
                }
                let email = document.getElementById("email").value;
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if(!email.match(mailformat)){
                    document.getElementById("email_error").innerText = "invalid email";
                    return false;
                }

                let password = document.getElementById("password").value;
                if (password === ""){
                    document.getElementById("password_error").innerText = "please enter your password";
                    return false;
                }
                else{
                    if(password.length < 6){
                        document.getElementById("password_error").innerText = "password must be 6 character long";
                        return false;
                    }
                }
                
                let check = document.getElementById("checkbox").checked;
                if(!check){
                    document.getElementById("check_error").innerText = "accept terms and conditions";
                    return false;
                }
                return true;
}