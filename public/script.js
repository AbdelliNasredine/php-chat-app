const form = document.getElementById("form");
const chat = document.getElementById("chat");

function renderMessage(sender , message) {
    // let elm = `
    // <p class="chat-text">
    //     <span class="sender">${sender}</span>
    //     ${message}
    // </p>
    // `;
    let elm  = document.createElement("p");
    let span = document.createElement("span");
    span.className = "sender";
    span.
    console.log(chat);
    chat.innerHTML(elm);
}

form.addEventListener('submit' , function(event){
    event.preventDefault();
    let sender = document.getElementById("sender").nodeValue;
    let message = document.getElementById("message").nodeValue;
    console.log(sender + message);
    renderMessage(sender , message);
});