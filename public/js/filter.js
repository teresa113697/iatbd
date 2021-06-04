let list_of_huisdieren = document.getElementsByTagName("li");
console.log(list_of_huisdieren);

let checkbox_hond = document.getElementById("Hond");
let checkbox_kat= document.getElementById("Kat");
let checkbox_konijn= document.getElementById("Konijn");
let checkbox_vogel= document.getElementById("Vogel");

checkbox_hond.checked = true;
checkbox_kat.checked = true;
checkbox_konijn.checked = true;
checkbox_vogel.checked = true;

function filter(checkbox, soort) {
    checkbox.addEventListener('change', function() {
        if(checkbox.checked) {
            for(let i = 0; i < list_of_huisdieren.length; i++) {
                if (list_of_huisdieren[i].dataset.soort == soort) {
                    list_of_huisdieren[i].style.display = '';
                }
            }
        }
        else {
            for(let i = 0; i < list_of_huisdieren.length; i++) {
                if (list_of_huisdieren[i].dataset.soort == soort) {
                    list_of_huisdieren[i].style.display = 'none';
                }
            }
        }
    
    });
}

filter(checkbox_hond, 'Hond');
filter(checkbox_kat, 'Kat');
filter(checkbox_konijn, 'Konijn');
filter(checkbox_vogel, 'Vogel');

