const toggleBtn = document.getElementsByClassName('toggle_btn')[0]
            const navbarLinks = document.getElementsByClassName('nav_links') [0]

            toggleBtn.addEventListener('click', () => {
                navbarLinks.classList.toggle('active')
            })
