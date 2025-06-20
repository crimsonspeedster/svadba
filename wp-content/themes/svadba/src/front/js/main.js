let triggerMenu = document.querySelector('.burger-trigger');
let header = document.querySelector('.header');
let box = document.querySelector('.box');
let body = document.body;
let html = document.documentElement; // Додаємо обмеження на всю сторінку

if (triggerMenu && header && box) {
    triggerMenu.addEventListener('click', () => {
        const isActive = header.classList.toggle('active');
        box.classList.toggle('active');
        html.classList.toggle('no-scroll', isActive);
    });
} else {
    console.warn('Один або кілька елементів (.burger-trigger, #header, .box) не знайдено.');
}

let dropTrigger = document.querySelector('.dropdown');
let dropContent = document.querySelector('.dropdown-content');
dropTrigger.addEventListener('click', ()=>{
  dropContent.classList.toggle("show");
  dropTrigger.classList.toggle("show1");
})

  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
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

document.querySelectorAll('.scroll-to-form').forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelector('.form-section').scrollIntoView({
        behavior: 'smooth'
      });
    });
  });



let menuContent = document.querySelector('.box');
let contactsBox = document.querySelector('.contacts-box');
let menu = document.querySelector('.header__menu');
let menuParent = menuContent.parentElement; // Початковий батьківський елемент .box
let contactsParent = contactsBox.parentElement; // Початковий батьківський елемент .contacts-box
let menuOriginalParent = menu.parentElement; // Початковий батьківський елемент menu
let isMoved = false; // Флаг для перевірки перенесення

let LangBox = document.querySelector('.dropdown');
let TopNav = document.querySelector('.top-nav');


function handleResize() {

  // console.log(window.innerWidth);
  
  if (window.innerWidth > 768) {
    if (!isMoved) {
      header.insertAdjacentElement('afterend', menuContent);
      header.insertAdjacentElement('afterend', contactsBox);
      header.insertAdjacentElement('afterend', menu);
      TopNav.insertAdjacentElement('beforeend', LangBox);
      isMoved = true;
    }
  } else {
    if (isMoved) {
      menuParent.appendChild(menuContent);
      menuOriginalParent.appendChild(menu);
      contactsParent.appendChild(contactsBox);
      menuContent.appendChild(LangBox);
      isMoved = false;
    }
  }
}

// Виклик функції при завантаженні сторінки
handleResize();

// Додаємо слухач події на зміну розміру вікна
window.addEventListener('resize', handleResize);


window.onload = function () {
  let footer = document.querySelector(".footer");
  let bgImage = footer.getAttribute("data-bg");

  if (bgImage) {
      let style = document.createElement("style");
      style.innerHTML = `
          .footer::before {
              background-image: url('${bgImage}');
          }
      `;
      document.head.appendChild(style);
  }
};

let acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    let panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}




let lastScrollTop = 0;
let headerIs = document.querySelector('.box');
let debounceTimeout;
let scrollThreshold = 5; // Поріг прокрутки, щоб не реагувати на невеликі зміни

window.addEventListener('scroll', function() {
    clearTimeout(debounceTimeout);

    debounceTimeout = setTimeout(() => {
        let scrollTop = window.scrollY || document.documentElement.scrollTop;

        if (Math.abs(scrollTop - lastScrollTop) <= scrollThreshold) {
            // Ігноруємо невеликі зміни прокрутки
            return;
        }

        lastScrollTop = scrollTop;
    }, 100); // Збільшена затримка для більш плавного ефекту
});


const selectors = ['p', 'h2', 'blockquote', '.wp-block-image', 'image-it'];

selectors.forEach(selector => {
  document.querySelectorAll(selector).forEach(el => {
    el.classList.add('sanimate', 'scroll');
  });
});

// Обробка зображень окремо, з виключенням img всередині .owl-theme
// document.querySelectorAll('img').forEach(img => {
//   if (!img.closest('.owl-theme') || !img.closest('.wrp-image-column')) {
//     img.classList.add('sanimate', 'scroll');
//   }
// });

document.querySelectorAll('img').forEach(img => {
  if (img.closest('.image-it') ) {
    img.classList.add('sanimate', 'scroll');
  } else {
    return;
  }
});

let blocks = document.querySelectorAll('.scroll.sanimate');
// let clientsSlides = document.querySelectorAll('.clients-slider > .slide.sanimate');

let observerCallback = (entries, observer) => {
  entries.forEach(entry => {
      if (entry.isIntersecting) {
          entry.target.classList.add('fadeInUp');
          observer.unobserve(entry.target);
      }
  });
};

blocks.forEach(block => {
  new IntersectionObserver(observerCallback, {
      threshold: 0.2
  }).observe(block);
});



let animations = document.querySelectorAll('.sanimate');
animations.forEach(el => {
    let {
        delay,
        duration,
        timing
    } = el.dataset;

    if (delay)
        el.style.animationDelay = delay;

    if (duration)
        el.style.animationDuration = duration;

    if (timing)
        el.style.animationTimingFunction = timing;
});



headerIs.querySelectorAll('.menu_item').forEach(li => {
  li.addEventListener('mouseenter', e => {
    let sub = li.querySelector('.sub-menu');
    if (!sub) return; // перевірка: якщо sub нема, нічого не робимо

    let {left: offsetLeft, width: subWidth} = sub.getBoundingClientRect();
    let width = window.innerWidth;
    let mustOffsetRight = 80;
    let diff = (subWidth + offsetLeft + mustOffsetRight) - width;

    // if (0 < diff){
    //     sub.style.left = `${parseFloat(getComputedStyle(sub)['left']) - diff}px`;
    // }
  });
});







if(document.querySelector(".blog")){
  const pagList = document.querySelector('ul.page-numbers');
  const allPageNumbers = pagList.querySelectorAll('li');
  const gag = document.createElement("li");
  gag.classList.add("pag-gag");
  const grp = document.createElement("span");
  grp.classList.add("center-paging");
  
  allPageNumbers.forEach(el => {
    if (!['prev', 'next'].some(className => el.firstElementChild.classList.contains(className))){
      grp.insertAdjacentElement("beforeend", el);
    }
  });

  const firstelemPag = allPageNumbers[0];
  const lastElemPag = allPageNumbers[allPageNumbers.length-1];
  
  if (firstelemPag.firstElementChild.classList.contains('prev')){
    firstelemPag.insertAdjacentElement("afterend", grp);
    if (!lastElemPag.firstElementChild.classList.contains("next")){
      grp.insertAdjacentElement("afterend", gag);
    }
  } else {
    lastElemPag.insertAdjacentElement("beforebegin", grp);
    if (!firstelemPag.firstElementChild.classList.contains('prev')){
      grp.insertAdjacentElement("beforebegin", gag);
    }
  }

}



const popup = document.getElementById('popup');
const closeBtn = document.querySelector('.close');

// Закриття попапу
closeBtn.addEventListener('click', function () {
    popup.classList.add('hidden');
});

document.addEventListener('wpcf7mailsent', function() {
    popup.classList.remove('hidden');
}, false);


