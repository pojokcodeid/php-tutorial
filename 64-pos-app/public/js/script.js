(() => {
  'use strict'

  const storedTheme = localStorage.getItem('theme')

  const getPreferredTheme = () => {
    if (storedTheme) {
      return storedTheme
    }

    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
  }

  const setTheme = function (theme) {
    if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      document.documentElement.setAttribute('data-bs-theme', 'dark')
    } else {
      document.documentElement.setAttribute('data-bs-theme', theme)
    }
  }

  setTheme(getPreferredTheme())

  const showActiveTheme = (theme, focus = false) => {
    const themeSwitcher = document.querySelector('#bd-theme')

    if (!themeSwitcher) {
      return
    }

    let logo = document.getElementById("logo");
    if (theme === "dark") {
      if (logo)
        logo.src = "./aset/img/pojokocde-w.png";
    } else {
      if (logo)
        logo.src = "./aset/img/pojokcode.png";
    }

    const themeSwitcherText = document.querySelector('#bd-theme-text')
    const activeThemeIcon = document.querySelector('.theme-icon-active use')
    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
    const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
      element.classList.remove('active')
      element.setAttribute('aria-pressed', 'false')
    })

    btnToActive.classList.add('active')
    btnToActive.setAttribute('aria-pressed', 'true')
    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
    const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
    themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

    if (focus) {
      themeSwitcher.focus()
    }
  }

  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    if (storedTheme !== 'light' || storedTheme !== 'dark') {
      setTheme(getPreferredTheme())
    }
  })

  window.addEventListener('DOMContentLoaded', () => {
    showActiveTheme(getPreferredTheme())

    document.querySelectorAll('[data-bs-theme-value]')
      .forEach(toggle => {
        toggle.addEventListener('click', () => {
          const theme = toggle.getAttribute('data-bs-theme-value')
          localStorage.setItem('theme', theme)
          setTheme(theme)
          showActiveTheme(theme, true)
        })
      })
  })
})()

function myFunction2(x) {
  if (x.matches) { //
    //for responsive sidebar
    let sidebar = document.getElementById("mySidebar");
    let main = document.getElementById("main");
    sidebar.style.transition = "all 0.3s";
    sidebar.removeAttribute('inactive');
    sidebar.style.marginLeft = "-300px";
    sidebar.style.top = "0";
    sidebar.style.left = "0";
    sidebar.style.bottom = "0";
    sidebar.style.height = "auto";
    sidebar.style.marginTop = "60px";
    sidebar.style.paddingBottom = "65px";
    sidebar.setAttribute('inactive', 'inactive');
    main.style.marginLeft = "0";
    //iconbar
    let iconbar2 = document.getElementById("btsColapse");
    iconbar2.setAttribute('inactive', '');
    let icon2 = document.createElement("i");
    icon2.classList.add("fa-solid");
    icon2.classList.add("fa-arrow-right");
    icon2.setAttribute("id", "btnClose");
    let btnclose = document.getElementById("btnClose");
    if (!btnclose) {
      iconbar2.appendChild(icon2);
    }
    let btnBar = document.getElementById("btnLeft");
    iconbar2.removeChild(btnBar);
  } else {
    //for sidebar
    let sidebar = document.getElementById("mySidebar");
    let main = document.getElementById("main");
    if (main) {
      main.style.transition = "all 0.3s";
      main.style.marginLeft = "300px";
    }
    if (sidebar) {
      sidebar.style.left = "0";
      sidebar.style.marginLeft = "0";
      sidebar.style.width = "300px";
      sidebar.classList.add("active");
      sidebar.style.marginLeft = "0";
      sidebar.removeAttribute('inactive');
      sidebar.style.transition = "all 0.3s";
    }

    //buttin diubah
    let iconbar = document.getElementById("btsColapse");
    let btnClose = document.getElementById("btnClose");
    let icon = document.createElement("i");
    icon.classList.add("fa-solid");
    icon.classList.add("fa-arrow-left");
    icon.setAttribute("id", "btnLeft");
    if (iconbar) {
      iconbar.appendChild(icon);
      iconbar.removeAttribute('inactive');
    }
    if (btnClose) {
      iconbar.removeChild(btnClose);
    } else {
      let btnClose = document.getElementById("btnLeft");
      if (iconbar)
        iconbar.removeChild(btnClose);
    }
  }
}

var x = window.matchMedia("(max-width: 990px)")
myFunction2(x) // Call listener function at run time
x.addListener(myFunction2) // Attach listener function on state changes


function closeNav() {
  let sidebar = document.getElementById("mySidebar");
  let main = document.getElementById("main");
  let iconbar = document.getElementById("btsColapse");
  var x = window.matchMedia("(max-width: 990px)")
  if (sidebar.hasAttribute('inactive')) {
    main.style.transition = "all 0.3s";
    if (x.matches) {
      main.style.marginLeft = "0";
    } else {
      main.style.marginLeft = "305px";
    }
    sidebar.classList.add("active");
    sidebar.style.marginLeft = "0";
    sidebar.style.top = "0";
    sidebar.style.bottom = "0";
    sidebar.style.left = "0";
    sidebar.removeAttribute('inactive');
    sidebar.style.transition = "all 0.3s";
  } else {
    sidebar.setAttribute('inactive', 'inactive');
    sidebar.style.transition = "all 0.3s";
    sidebar.style.marginLeft = "-300px";
    if (x.matches) {
      sidebar.style.marginLeft = "-300px";
    }
    main.style.marginLeft = "0";
    main.style.transition = "all 0.3s";
  }

  if (iconbar.hasAttribute('inactive')) {
    let iconbar = document.getElementById("btsColapse");
    let btnClose = document.getElementById("btnClose");
    let icon = document.createElement("i");
    icon.classList.add("fa-solid");
    icon.classList.add("fa-arrow-left");
    icon.setAttribute("id", "btnLeft");
    iconbar.appendChild(icon);
    iconbar.removeChild(btnClose);
    iconbar.removeAttribute('inactive');
  } else {
    let iconbar2 = document.getElementById("btsColapse");
    iconbar2.setAttribute('inactive', '');
    let icon2 = document.createElement("i");
    icon2.classList.add("fa-solid");
    icon2.classList.add("fa-arrow-right");
    icon2.setAttribute("id", "btnClose");
    iconbar2.appendChild(icon2);
    let btnBar = document.getElementById("btnLeft");
    iconbar2.removeChild(btnBar);
  }
}

//custom date select
// $(".date-modal").datepicker({
//   changeMonth: true,
//   changeYear: true,
//   beforeShow: function (el, dp) {
//     $(el).parent().append($('#ui-datepicker-div'));
//     $('#ui-datepicker-div').hide();
//   },
//   onSelect: function () {
//     $(this).change();
//   }
// });

//date 2 type non modal
// $(".date2").datepicker({
//   changeMonth: true,
//   changeYear: true
// });

function edit(mode) {
  if (mode == "update") {
    document.getElementById("mode").value = "update";
    document.getElementById("form").submit();
  } else {
    Swal.fire({
      icon: "warning",
      title: "Konfirmasi",
      text: "Yakin akan dihapus?",
      showCancelButton: true,
      confirmButtonText: "Ya",
      cancelButtonText: "Tidak",
      reverseButtons: true,
    }).then((result) => {
      if (result.isConfirmed) {
        document.getElementById("mode").value = "delete";
        document.getElementById("form").submit();
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        return false;
      }
    });
  }
}

// for drop down menu
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
