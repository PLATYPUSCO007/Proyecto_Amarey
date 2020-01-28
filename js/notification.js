/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function notify() {
    var name = document.getElementById('name').value;
    var pass = document.getElementById('pass').value;
    if (name === "" || pass === "") {
        window.alert("COMPLETE TODOS LOS CAMPOS POR FAVOR");
    }
}


