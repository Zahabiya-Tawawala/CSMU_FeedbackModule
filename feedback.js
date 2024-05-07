
// Function to add selector
function addSelector(element) {
    var container = document.getElementById('selectors-container');
    if (container.children.length < 10) {
        var newSelector = element.closest('.subject-selector').cloneNode(true);
        container.appendChild(newSelector);
    } else {
        alert('Maximum of 10 subjects allowed.');
    }
}

// Function to remove selector
function removeSelector(element) {
    var container = document.getElementById('selectors-container');
    if (container.children.length > 1) {
        container.removeChild(element.closest('.subject-selector'));
    } else {
        alert('At least one subject must be selected.');
    }
}

// const allStar = document.querySelector('.rating .fa-star')

// allStar.forEach((item, idx) => {
//     item.addEventListener('click' , function () {
//          for(let i = 0; i< allStar.length; i++) {
//             if(i <= idx) {
//                 allStar[i].classList.replace('fa-regular fa-star', 'fa-solid fa-star')
//             }
//          }
//     })
// })

// const allStars = document.querySelectorAll('.rating .fa-star');

// allStars.forEach((item, idx) => {
//     item.addEventListener('click', function () {
//         for (let i = 0; i < allStars.length; i++) {
//             if (i <= idx) {
//                 allStars[i].classList.replace('fa-regular', 'fa-solid');
//             }
//         }
//     });
// });

document.querySelectorAll('.rating').forEach((rating, index) => {
    const stars = rating.querySelectorAll('.fa-star');

    stars.forEach((star, idx) => {
        star.addEventListener('click', function () {
            stars.forEach((s, i) => {
                if (i <= idx) {
                    s.classList.replace('fa-regular', 'fa-solid');
                } else {
                    s.classList.replace('fa-solid', 'fa-regular');
                }
            });
            rating.querySelector('input[name="rating"]').value = idx + 1;
        });
    });
});

// to hide the form once data is sent to db
// document.querySelectorAll('.btn-primary').forEach(btn => {
//     btn.addEventListener('click', function() {
//         // Hide the feedback form
//         const form = this.closest('course-feedback-wrapper');
//         form.style.display = 'none';
//         // You can also submit the form data to a server here using AJAX if needed
//     });
// });