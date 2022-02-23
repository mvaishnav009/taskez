  // tab function for login and signup
        function loginSignup(tabSwitch) {
        var i;
        var x = document.getElementsByClassName("tabS");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        document.getElementById(tabSwitch).style.display = "block";  
        }
        
        // eye for password visibility
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            this.classList.toggle("bi-eye");
        });
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
 