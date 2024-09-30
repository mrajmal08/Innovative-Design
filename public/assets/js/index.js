// Get popup elements
var popup = document.getElementById('popup');
var popupImage = document.getElementById('popup-image');
var closeBtn = document.getElementsByClassName('close')[0];

// Display the clicked image in the popup
document.querySelectorAll('.popup-img').forEach(item => {
    item.addEventListener('click', function () {
        popup.style.display = "block";
        popupImage.src = this.src;
    });
});

// Close the popup when the user clicks on the close button
closeBtn.onclick = function() {
    popup.style.display = "none";
}

// Close the popup if user clicks anywhere outside the image
popup.onclick = function(event) {
    if (event.target == popup) {
        popup.style.display = "none";
    }
}



// Wishlist Array
let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

// Send design to designer
function sendToDesigner(image) {
    alert(`Design sent to designer: ${image}`);
}

// Add design to wishlist
function addToWishlist(name, image) {
    const itemExists = wishlist.some(item => item.image === image);
    if (!itemExists) {
        wishlist.push({ name, image });
        localStorage.setItem('wishlist', JSON.stringify(wishlist));
        alert(`${name} added to wishlist!`);
    } else {
        alert(`${name} is already in the wishlist.`);
    }
}

// Remove design from wishlist
function removeFromWishlist(image) {
    wishlist = wishlist.filter(item => item.image !== image);
    localStorage.setItem('wishlist', JSON.stringify(wishlist));
    loadWishlist();
}

// Load wishlist items on the wishlist page
function loadWishlist() {
    const wishlistContainer = document.getElementById('wishlist');
    wishlistContainer.innerHTML = '';
    wishlist.forEach(item => {
        const li = document.createElement('li');
        li.innerHTML = `
            <span><strong>${item.name}</strong></span>
            <img src="${item.image}" alt="${item.name}">
            <button onclick="removeFromWishlist('${item.image}')">Remove</button>
        `;
        wishlistContainer.appendChild(li);
    });
}

// Filter designs
function filterDesigns(filterType) {
    const galleryItems = document.querySelectorAll('.gallery-item');
    galleryItems.forEach(item => {
        if (filterType === 'all' || item.dataset.type === filterType) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

// Open Image in Modal
function openModal(imageSrc) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modal-image');
    modalImage.src = imageSrc;
    modal.style.display = 'block';
}

// Close Modal
function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'none';
}

if (document.getElementById('wishlist')) {
    loadWishlist();
}


$(document).ready(function() {
    // Magnific Popup for enlarging images
    $('.gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    // Wishlist functionality
    $('.wishlist-btn').click(function() {
        let imageSrc = $(this).siblings('img').attr('src');

        // Check if the image is already in the wishlist
        if ($('#wishlist img[src="' + imageSrc + '"]').length === 0) {
            let wishlistItem = $('<div class="wishlist-item"></div>');
            let wishlistImage = $('<img>').attr('src', imageSrc);
            let removeBtn = $('<button class="remove-btn">X</button>');

            removeBtn.click(function() {
                $(this).parent().remove();
            });

            wishlistItem.append(wishlistImage).append(removeBtn);
            $('#wishlist').append(wishlistItem);
        }
    });

    // Send to Designer
    $('#send-to-designer').click(function() {
        let wishlistImages = $('#wishlist img').map(function() {
            return $(this).attr('src');
        }).get();

        if (wishlistImages.length > 0) {
            alert('Designs sent to interior designer: ' + wishlistImages.join(', '));
            // Here you would actually send the data via AJAX or a form
        } else {
            alert('No designs in the wishlist to send.');
        }
    });
});
