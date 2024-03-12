function frmLogin(e) {
    e.preventDefault();
    const usuario = document.getElementById("usuario");
    const clave = document.getElementById("clave");
    if (usuario.value == "") {
        clave.classList.remove("is-invalid");
        usuario.classList.add("is-invalid");
        usuario.focus();
    } else if (clave.value == "") {
        usuario.classList.remove("is-invalid");
        clave.classList.add("is-invalid");
        clave.focus();
    } else {
        //consumir una api 
        //const url = base_url + "Usuarios/validar";
        const url =  $url1 = "http://161.132.206.104/apizgroup/validacionUsuario/";
        const frm = document.getElementById("frmLogin");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                console.log(res);             
                if (res.icono == "success") {
                    //window.location = base_url + "Principal/index/?data="+res.data.c_f;}
                    //window.location = base_url + "Principal/index/?data="+res;
                    //console.log(res.data.empresa_id[0].empresa_id);

                    window.location = base_url + "Principal/sesion/"+res.data.id+"/"+res.data.usuario+"/"+res.data.apellidos+"/"+res.data.nombres+"/"+res.data.correo+"/"+res.data.c_f+"/"+res.data.empresa_id[0].empresa_id;
                    //window.location = base_url + "Principal/index";   
                } else {
                    document.getElementById("alerta").classList.remove("d-none");
                    document.getElementById("alerta").innerHTML = res.msg;
               
                }
            }
        }
    }
}