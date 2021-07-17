function signIn() {
    var e = document.getElementById("e").value;
    var p = document.getElementById("p").value;

    var form = new FormData();
    form.append("email", e);
    form.append("password", p);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {

            if (e == "dilshanimadushi@gmail.com" && p == "123") {
                window.location = "index.php";
            } else {
                alert("Invalid User");
                window.location = "index.php";
            }
        }
    }


    r.open("POST", "signinprocess.phps", true);
    r.send(form);
}