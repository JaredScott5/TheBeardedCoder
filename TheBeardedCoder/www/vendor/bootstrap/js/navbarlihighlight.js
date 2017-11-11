var thing = window.location.pathname;

//home, about, blog, contact
if(thing.match("blog") || thing.match("blogPost")){
  toggleNavActive(document.getElementById("blog"));
}else if(thing.match("about")){
  toggleNavActive(document.getElementById("about"));
}else if(thing.match("contact")){
  toggleNavActive(document.getElementById("contact"));
}else if (thing.match("index")) {
  toggleNavActive(document.getElementById("home"));
}else{
  "Unknown";
}

function toggleNavActive(element){
  element.classList.add("active");
}
