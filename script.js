//sweet alert 2 implementation

//var declaration

let firstnameInput = document.getElementById("firstname");
let lastnameInput = document.getElementById("lastname");
let emailInput = document.getElementById("email");
let mailbodyInput = document.getElementById("mailbody");
let sendButton = document.getElementById("send");
let agreeCheckBox = document.getElementById("agree");
let successmessageform = document.getElementById("successmessageform");
let notcheckedmessageform = document.getElementById("notcheckedmessageform");
let notfilledmessageform = document.getElementById("notfilledmessageform");
let firstnameValue;
let lastnameValue;
let emailValue;
let mailbodyValue;
let agreeValue;

//end of var declaration

//on sendbutton click
sendButton.addEventListener("click", (event) => {
    event.preventDefault();
    firstnameValue = firstnameInput.value;
    lastnameValue = lastnameInput.value;
    emailValue = emailInput.value;
    mailbodyValue = mailbodyInput.value;
    agreeValue = agreeCheckBox.checked;
    console.log(agreeValue);
    if (agreeValue === true) {
        agreeValue="on";
    } else {
        agreeValue="off";
    }
    console.log(agreeValue);
    
    if (checkInputs()) {
        let form = new FormData(document.getElementById('sendmailform'));
    
        fetch("sendmail.php", {
            method: "POST", 
            mode : "no-cors",
            body : form
        }).then((result) => {
            let response = result.json();
            if (response = "SUCCESS") {
                successmessageform.style.display = "flex";
                notfilledmessageform.style.display = "none";
                notcheckedmessageform.style.display = "none";
            } 
        });
    }
});

//checking if inputs are empty.
//Return true if all inputs aren't empty

function checkInputs () {

    if (firstnameValue !== "" && firstnameValue &&
        lastnameValue !== "" && lastnameValue &&
        emailValue !== "" && emailValue &&
        mailbodyValue !== "" && mailbodyValue) {
        if (agreeValue !== "off" && agreeValue) {
            return true;
        } else {
            notfilledmessageform.style.display = "none";
            notcheckedmessageform.style.display = "flex";
            successmessageform.style.display = "none";
        }
    } else {
        notfilledmessageform.style.display = "flex";
        notcheckedmessageform.style.display = "none";
        successmessageform.style.display = "none";
        return false;
    }
}
