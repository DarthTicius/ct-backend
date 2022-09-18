document.addEventListener("DOMContentLoaded", function () {
    const desktopLinks = document.querySelectorAll(
        ".desktop_menu_warpper .nav_btn"
    );
	const mobileBtnMenu = document.getElementById("mobile_btn_menu");
	const mobilecloseMenu = document.getElementById("close_menu");

	mobileBtnMenu.addEventListener('click', ()=>{
		console.log(mobileBtnMenu);
		mobileBtnMenu.classList.add('is_open');
		document.querySelector('.backdop_menu').classList.add('is_open');
		document.querySelector('.backdrop_nav_wrapper').classList.add('is_open');
	})
	mobilecloseMenu.addEventListener('click', ()=>{
		mobileBtnMenu.classList.remove('is_open');
		document.querySelector('.backdop_menu').classList.remove('is_open');
		document.querySelector('.backdrop_nav_wrapper').classList.remove('is_open');
	})

    desktopLinks.forEach((link) => {
        link.addEventListener("click", () => {
            let parentWrapper =
                link.parentNode.parentNode.closest(".nav_btn_wrapper");

            const notClickedLinks = Array.from(desktopLinks).filter(
                (notClickedLink) => {
                    return notClickedLink !== link;
                }
            );

            notClickedLinks.forEach((notClickedLink) => {
                if (parentWrapper === null || parentWrapper == undefined) {
                    document
                        .querySelectorAll(".nav_btn_data")
                        .forEach((box) => {
                            box.classList.remove("is_active");
                        });
                }
                notClickedLink.classList.remove("is_active");
            });

            link.classList.add("is_active");
            if (!parentWrapper) {
            } else {
                parentWrapper.classList.add("is_active");
                parentWrapper
                    .querySelector(".nav_btn_data")
                    .classList.add("is_active");
            }
        });
    });
});
