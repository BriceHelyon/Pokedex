document.getElementById('btnadd').addEventListener("click",
add_user);

function add_user(e){
  e.preventDefault();
   console.log("Bouton cliqué");
   let nm = document.getElementById("nameid").value;
   let em = document.getElementById("emailid").value;
   let pw = document.getElementById("passwordid").value;
// console.log(nm);
// console.log(em);
// console.log(pw);



const xhr = new XMLHttpRequest();

xhr.open("POST", "insert.php", true);


xhr.setRequestHeader("Content-Type", "application/json");

xhr.onload = () => {
    if(xhr.status ===200){
console.log(xhr.responseText);
    }else {
        console.log("Problème rencontré");
    }
};


const mydata = {name: nm, email: em, password: pw};
console.log(mydata);


// CONVERT JS en JSON STRING
const data = JSON.stringify(mydata);
console.log(data);
xhr.send(data);

}

