     function myfun() {
            var a = document.getElementById("password").value;
            var b = document.getElementById("passwords").value;
            var c = document.getElementById("name").value;

            if(c == ""){
                document.getElementById("messages1").innerHTML="**Please fill Username";
                return false;
            }

            if(c.length<5){
                document.getElementById("messages1").innerHTML="**Username must be longer than 5";
                return false;
            }

            if(a!=b){
                document.getElementById("messages").innerHTML="**Password are not same";
                return false;
            }

            if(a==""){
                document.getElementById("messages").innerHTML="**Please fill Password";
                return false;
            }

            if(a.length<5){
                document.getElementById("messages").innerHTML="**Password must be longer than 5";
                return false;
            }
           
        }