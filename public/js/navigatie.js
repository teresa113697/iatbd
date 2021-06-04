function openMenu() {
    let navBar = document.getElementById("navBar");

    if (navBar.style.display === "flex") {
      navBar.style.display = "none";
    } else {
      navBar.style.display = "flex";
    }
  }