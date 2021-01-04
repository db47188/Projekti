"use strict";

const form = document.getElementById("postoForm");
const postimet = document.getElementById("posts");

function posto(postimi){
        let tekstInput = document.getElementById("textInput").value;
        postimi.preventDefault();
        postimet.innerHTML += `<p style="background-color:white; margin:5px; padding:5px; border-radius:10px">${tekstInput}</p>`;
        document.getElementById("textInput").value = "";
}

form.addEventListener("submit", posto);