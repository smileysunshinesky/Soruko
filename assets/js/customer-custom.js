(function () {
    "use strict";
  
    /* header dashboards dropdown */
    document.querySelectorAll(".dashboard-dropdown .dropdown-item").forEach((ele)=>{
      if(ele.href == location.href){
        document.querySelector(".dashboard-dropdown").parentElement.querySelector('.header-dashboards-button').innerHTML = `
        ${ele.innerText}
        <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block float-end"></i>
        `
          ele.classList.add('active')
      }
    })
  
    let AllHref = []
  
    document.querySelector(".main-menu").children[0].querySelectorAll(".side-menu__item").forEach((ele)=>{
      AllHref.push(ele.href)
      if(location.href != ele.href){
      }
      ele.onclick = ()=>{
        if(location.href == ele.href){
          document.querySelector(".dashboard-dropdown").parentElement.querySelector('.header-dashboards-button').innerHTML = ` 
          ${ele.innerText} Dashboard
          <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
          `
        }
      }
    })
  
    if (!AllHref.includes(location.href)) {
      document.querySelector(".dashboard-dropdown").parentElement.querySelector('.header-dashboards-button').innerHTML = ` Dashboard
          <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
          `
    }
    /* header dashboards dropdown */
  
    /* page loader */
    function hideLoader() {
      const loader = document.getElementById("loader");
      loader.classList.add("d-none")
    }
  
    window.addEventListener("load", hideLoader);
    /* page loader */
  
    /* tooltip */
    const tooltipTriggerList = document.querySelectorAll(
      '[data-bs-toggle="tooltip"]'
    );
    const tooltipList = [...tooltipTriggerList].map(
      (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
    );
  
    /* popover  */
    const popoverTriggerList = document.querySelectorAll(
      '[data-bs-toggle="popover"]'
    );
    const popoverList = [...popoverTriggerList].map(
      (popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl)
    );
  
    /* header theme toggle */
    function toggleTheme() {
      let html = document.querySelector("html");
      if (html.getAttribute("data-theme-mode") === "dark") {
        html.setAttribute("data-theme-mode", "light");
        html.setAttribute("data-header-styles", "light");
        html.setAttribute("data-menu-styles", "light");
        html.setAttribute("data-header-styles", "light");
      } else {
        html.setAttribute("data-theme-mode", "dark");
        html.setAttribute("data-header-styles", "dark");
        if (!localStorage.getItem("primaryRGB")) {
          html.setAttribute("style", "");
        }
        html.setAttribute("data-menu-styles", "dark");
      }
    }
    let layoutSetting = document.querySelector(".layout-setting");
    layoutSetting.addEventListener("click", toggleTheme);
    /* header theme toggle */
  
    /* Choices JS */
    document.addEventListener("DOMContentLoaded", function () {
      var genericExamples = document.querySelectorAll("[data-trigger]");
      for (let i = 0; i < genericExamples.length; ++i) {
        var element = genericExamples[i];
        new Choices(element, {
          allowHTML: true,
          placeholderValue: "This is a placeholder set in the config",
          searchPlaceholderValue: "Search",
        });
      }
    });
    /* Choices JS */
  
    /* footer year */
    document.getElementById("year").innerHTML = new Date().getFullYear();
    /* footer year */
  
    /* node waves */
    Waves.attach(".btn-wave", ["waves-light"]);
    Waves.init();
    /* node waves */
  
    /* card with close button */
    let DIV_CARD = ".card";
    let cardRemoveBtn = document.querySelectorAll(
      '[data-bs-toggle="card-remove"]'
    );
    cardRemoveBtn.forEach((ele) => {
      ele.addEventListener("click", function (e) {
        e.preventDefault();
        let $this = this;
        let card = $this.closest(DIV_CARD);
        card.remove();
        return false;
      });
    });
    /* card with close button */
  
    /* card with fullscreen */
    let cardFullscreenBtn = document.querySelectorAll(
      '[data-bs-toggle="card-fullscreen"]'
    );
    cardFullscreenBtn.forEach((ele) => {
      ele.addEventListener("click", function (e) {
        let $this = this;
        let card = $this.closest(DIV_CARD);
        card.classList.toggle("card-fullscreen");
        card.classList.remove("card-collapsed");
        e.preventDefault();
        return false;
      });
    });
    /* card with fullscreen */
  
    /* count-up */
    var i = 1;
    setInterval(() => {
      document.querySelectorAll(".count-up").forEach((ele) => {
        if (ele.getAttribute("data-count") >= i) {
          i = i + 1;
          ele.innerText = i;
        }
      });
    }, 10);
    /* count-up */
  
    /* back to top */
    const scrollToTop = document.querySelector(".scrollToTop");
    const $rootElement = document.documentElement;
    const $body = document.body;
    window.onscroll = () => {
      const scrollTop = window.scrollY || window.pageYOffset;
      const clientHt = $rootElement.scrollHeight - $rootElement.clientHeight;
      if (window.scrollY > 100) {
        scrollToTop.style.display = "flex";
      } else {
        scrollToTop.style.display = "none";
      }
    };
    scrollToTop.onclick = () => {
      window.scrollTo(0, 0);
    };
    /* back to top */
  
    /* header dropdowns scroll */
    var myHeadernotification = document.getElementById("header-notification-scroll");
    new SimpleBar(myHeadernotification, { autoHide: true });
  
    var myHeaderCart = document.getElementById("header-cart-items-scroll");
    new SimpleBar(myHeaderCart, { autoHide: true });
    /* header dropdowns scroll */
  })();
  
  /* full screen */
  var elem = document.documentElement;
  function openFullscreen() {
    let open = document.querySelector(".full-screen-open");
    let close = document.querySelector(".full-screen-close");
  
    if (
      !document.fullscreenElement &&
      !document.webkitFullscreenElement &&
      !document.msFullscreenElement
    ) {
      if (elem.requestFullscreen) {
        elem.requestFullscreen();
      } else if (elem.webkitRequestFullscreen) {
        /* Safari */
        elem.webkitRequestFullscreen();
      } else if (elem.msRequestFullscreen) {
        /* IE11 */
        elem.msRequestFullscreen();
      }
      close.classList.add("d-block");
      close.classList.remove("d-none");
      open.classList.add("d-none");
    } else {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.webkitExitFullscreen) {
        /* Safari */
        document.webkitExitFullscreen();
      } else if (document.msExitFullscreen) {
        /* IE11 */
        document.msExitFullscreen();
      }
      close.classList.remove("d-block");
      open.classList.remove("d-none");
      close.classList.add("d-none");
      open.classList.add("d-block");
    }
  }
  /* full screen */
  
  /* toggle switches */
  let customSwitch = document.querySelectorAll(".toggle");
  customSwitch.forEach((e) =>
    e.addEventListener("click", () => {
      e.classList.toggle("on");
    })
  );
  /* toggle switches */
  
  /* header dropdown close button */
  
  /* for cart dropdown */
  const headerbtn = document.querySelectorAll(".dropdown-item-close");
  headerbtn.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();
      button.parentNode.parentNode.parentNode.parentNode.parentNode.remove();
      document.getElementById("cart-data").innerText = `${
        document.querySelectorAll(".dropdown-item-close").length
      } `;
      document.getElementById("cart-icon-badge").innerText = `${
        document.querySelectorAll(".dropdown-item-close").length
      }`;
      console.log(
        document.getElementById("header-cart-items-scroll").children.length
      );
      if (document.querySelectorAll(".dropdown-item-close").length == 0) {
        let elementHide = document.querySelector(".empty-header-item");
        let elementShow = document.querySelector(".empty-item");
        elementHide.classList.add("d-none");
        elementShow.classList.remove("d-none");
      }
    });
  });
  /* for cart dropdown */
  
  /* for notifications dropdown */
  const headerbtn1 = document.querySelectorAll(".dropdown-item-close1");
  headerbtn1.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();
      button.parentNode.parentNode.parentNode.parentNode.remove();
      document.getElementById("notifiation-data").innerText = `${
        document.querySelectorAll(".dropdown-item-close1").length
      } Unread`;
      if (document.querySelectorAll(".dropdown-item-close1").length == 0) {
        let elementHide1 = document.querySelector(".empty-header-item1");
        let elementShow1 = document.querySelector(".empty-item1");
        elementHide1.classList.add("d-none");
        elementShow1.classList.remove("d-none");
      }
    });
  });
  /* for notifications dropdown */
  