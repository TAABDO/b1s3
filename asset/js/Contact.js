window.addEventListener("scroll", () => {
  let nav = document.querySelector("header.first-section");
  if (window.scrollY > 50) {
    nav.classList.add("navbar-expand-lg-transparent-remove");
  } else {
    nav.classList.remove("navbar-expand-lg-transparent-remove");

  }
});


const fReservation = document.getElementById("formContact");
const inputnam= document.querySelector(".input-size");
const inputemail = document.querySelector("#input-Email");
const phNumberinput = document.querySelector("#input-phoneNumber");
const Nembersinput = document.querySelector("#input-Nembers");
const Messagerea = document.querySelector("#input-Message");

const msgerrorName = document.getElementById("msg-valid-Nam");
const msgerrorEmail = document.getElementById("msg-valid-Email");
const msgerrorphoneNumber = document.getElementById("msg-valid-phoneNumber");
const msgerrorNembers = document.getElementById("msg-valid-Members");
const msgerrorMessage = document.getElementById("msg-valid-Message");


fReservation.addEventListener('submit',function (e) {
  e.preventDefault();
  callname()
  callEmail();
  callphoneNumber();
  callMessage();
  callNembers();
});

function callname() {
  let regex = /^[A-Za-z]{1,40}$/;
  if (inputnam.value.match(regex)) {
    msgerrorName.style.display = "none";
  } 
  else {
    msgerrorName.style.display = "block";
    msgerrorName.style.color = "red";
  }
};
function callEmail() {
  let pattern = /^[a-zA-Z_]+@(gmail|outlook)\.com$/;
  if (inputemail.value.match(pattern)) {
    msgerrorEmail.style.display = "none";

  } else {
    msgerrorEmail.style.display = "block";
    msgerrorEmail.style.color = "red";
  }
};
function callphoneNumber() {
  let regex = /^ ([ \-_/]*)(\d[ \-_/]*){9}$/;
    if (phNumberinput.value.match(regex)) {
      msgerrorphoneNumber.style.display = "none";
  
    } else {
      msgerrorphoneNumber.style.display = "block";
      msgerrorphoneNumber.style.color = "red";
    }
  };
  function callMessage() {
    let regexs = /^[A-Za-z]{1,400}$/;
    if (Messagerea.value.match(regexs)) {

      msgerrorMessage.style.display = "none";
  
    } else {
      msgerrorMessage.style.display = "block";
      msgerrorMessage.style.color = "red";
    }
  };
  function callNembers() {
    
    let regexs = /^[\w+]{1,20}$/;

    if (Nembersinput.value.match(regexs)) {
      msgerrorNembers.style.display = "none";
    } else {
      msgerrorNembers.style.display = "block";
      msgerrorNembers.style.color = "red";
    }
  };


















