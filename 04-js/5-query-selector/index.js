function showName() {
    let user = document.querySelector("#username").value;
    console.log(user);
    document.querySelector("#welcomeMsg").innerHTML += " " + user;
}