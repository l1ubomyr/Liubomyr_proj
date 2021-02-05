const HeaderBox = document.getElementById ("header_box");
const HeaderBtn = document.getElementById ("header_button");

HeaderBtn.onclick = function () {
    HeaderBox.classList.toggle ("header_box_active");
    HeaderBtn.classList.toggle ("header_button_active");
}

const GalerryLink = document.getElementById ("gallery_link");

const MenuLink = document.getElementById ("menu_link");

const BlogLink = document.getElementById ("blog_link");

const Gallery = document.getElementById ("gallery");

const Blog = document.getElementById ("blog");

const Menu = document.getElementById ("menu")

GalerryLink.onclick = function () {
        window.scrollTo ({
            left: 0,
            top:Gallery.offsetTop,
            behavior:"smooth"
        });
    };


MenuLink.onclick = function () {
        window.scrollTo ({
            left: 0,
            top:Menu.offsetTop,
            behavior:"smooth"
        });
    };

BlogLink.onclick = function () {
        window.scrollTo ({
            left: 0,
            top:Blog.offsetTop,
            behavior:"smooth"
        });
    };
    
    

const ReservedButton = document.getElementById("reserve_button");
const ReservedModal = document.getElementById("reserved_model");
const ReservedExit = document.getElementById("exit");

ReservedButton.onclick = function () {
    ReservedModal.classList.add ("reserved_model_active");
}

ReservedExit.onclick = function () {
    ReservedModal.classList.remove ("reserved_model_active");
}



