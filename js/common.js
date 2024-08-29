//headerのmenu

const toggleButton = document.querySelector(".toggle-button");
const { body } = document;
toggleButton.addEventListener("click", () => {
  body.classList.toggle("open");
  let text = toggleButton.innerHTML;
  toggleButton.innerHTML = text === "menu" ? "close" : "menu";
});

// hoverで該当indexの画像のみにclass付与

const switchImages = (target, image) => {
  const bodies = document.querySelectorAll(target);
  const imgs = document.querySelectorAll(image);

  bodies.forEach((body, i) => {
    imgs[0].classList.add("selected");
    body.addEventListener("mouseover", () => {
      imgs.forEach((img) => {
        img.classList.remove("selected");
      });
      imgs[i].classList.add("selected");
    });
  });
};
switchImages(".switchTarget", ".switchImage");

// 表示画面の一定ラインでにターゲット要素が入ったらクラス付与

const toggleClass = (
  selector,
  threshold = 0,
  marginTop = "0px",
  marginBottom = "0px",
  selector2
) => {
  const targets = document.querySelectorAll(selector);
  const lists = document.querySelectorAll(selector2);
  if (!targets[0]) return;

  const setShow = (entries) => {
    entries.forEach((entry) => {
      const target = entry.target;
      const i = target.dataset.id;
      if (entry.isIntersecting) {
        lists[0]
          ? lists[i].classList.add("current")
          : target.classList.add("show");
      } else {
        lists[0]
          ? lists[i].classList.remove("current")
          : target.classList.remove("show");
      }
    });
  };

  const options = {
    rootMargin: `${marginTop} 0px ${marginBottom}`,
    threshold: threshold,
  };

  const observer = new IntersectionObserver(setShow, options);
  targets.forEach((target) => {
    observer.observe(target);
  });
};

toggleClass(".anime60", undefined, undefined, "-40%");
toggleClass(".anime80", undefined, undefined, "-20%");
toggleClass(".anime-center", undefined, "-50%", "-50%");
toggleClass(".main section", undefined, "-50%", "-50%", ".local-nav li");

// reCaptchaシステム

const sendBtn = document.getElementById("sendBtn");
if (sendBtn) {
  sendBtn.addEventListener("click", function (e) {
    e.preventDefault();

    // ここにサイトキーを入れて下さい
    const siteKey = "6LdPBysqAAAAAI2Ui0F5bDq5vflDTU2PvHe3kUtM";

    grecaptcha.ready(function () {
      grecaptcha.execute(siteKey, { action: "submit" }).then(function (token) {
        document.getElementById("recaptchaResponse").value = token;
        document.getElementById("inquiry").submit();
      });
    });
  });
}

const modals = document.querySelectorAll("dialog");
const modalShow = () => {
  if (!modals[0]) return;
  const openButtons = document.querySelectorAll(".modal-open");
  const closeButtons = document.querySelectorAll(".modal-close");
  openButtons.forEach((btn, i) => {
    btn.addEventListener("click", () => {
      modals[i].showModal();
    });
  });
  closeButtons.forEach((btn, i) => {
    btn.addEventListener("click", () => {
      modals[i].close();
    });
  });
};
modalShow();

// パララックス

const windowHeight = window.innerHeight;
const windowWidth = window.innerWidth;

const parallax = (parent, targets, distance, type) => {
  const $areas = document.querySelectorAll(parent);
  const $targets = document.querySelectorAll(targets);
  if (!$areas[0]) return;

  document.addEventListener("scroll", () => {
    if (type) {
      const scroll = $areas[0].getBoundingClientRect().top;
      const position = scroll - windowHeight;
      const ratio = 1 - $areas[0].clientHeight / windowHeight;
      if (position > 0) return;
      $targets.forEach((target) => {
        target.style.translate = `0 ${-position * distance * ratio}px`;
      });
      return;
    }

    $areas.forEach((area, i) => {
      const scroll = area.getBoundingClientRect().top;
      const position = scroll - windowHeight;
      const ratio = windowWidth / windowHeight;
      const end = area.getBoundingClientRect().bottom;
      if (position > 0 || end < 0) return;
      $targets[i].style.translate = `0 ${-position * distance * ratio}px`;
    });
  });
};

parallax(".parallax-area", ".parallax", 0.06);
parallax(".parallax-bg", ".far0", .008, true);
parallax(".parallax-bg", ".far1", .016, true);
parallax(".parallax-bg", ".far2", .024, true);
parallax(".parallax-bg", ".far3", .032, true);

const doSlick = (selector) => {
  const mySlick = document.querySelector(selector);
  if (!mySlick) return;
  $(selector).slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 6000,
    cssEase: "linear",
    slidesToShow: 2.5,
    pauseOnHover: false,
    infinite: true,

    responsive: [
      {
        breakpoint: 750,
        settings: {
          speed: 4000,
          slidesToShow: 1.4,
        },
      },
    ],
  });
};
doSlick(".slick-infinite");

const doItemSlick = (selector) => {
  const mySlick = document.querySelectorAll(selector);
  if (!mySlick[0]) return;
  const noscript = document.querySelectorAll(".slick-item noscript");
  noscript.forEach(node => {
    node.remove();
  })
  
  $(selector).slick({
    arrows: false,
    dots: true,
    swipe: true,
    infinite: false,
  });
};
doItemSlick(".slick-item");

const smoothToggle = () => {
  const toggleArr = document.querySelectorAll(".smooth-toggle");
  const buttonArr = document.querySelectorAll(".smooth-button");
  if (!toggleArr[0]) return;
  toggleArr.forEach((toggle, i) => {
    const button = buttonArr[i];
    const textNode = button.firstElementChild
    button.addEventListener("click", () => {
      toggle.classList.toggle("smooth-open");
      let text = textNode.innerHTML;
      textNode.innerHTML = text === "もっと見る" ? "閉じる" : "もっと見る";
    });
  });
};
smoothToggle();

// 中心からランダムな上方向に画像が飛び出るアニメーション

const popAnime = () => {
  const popBtn = document.querySelector(".contact-btn");
  if (!popBtn) return

  const popArea = document.querySelector(".pop-area");
  const url = popArea.dataset.url
  const popAreaH = popArea.offsetHeight;
  const popItem = document.querySelector(".pop-item");
  const rand = (min, max) => Math.floor(Math.random() * (max - min) + min);
  const num = 2;
  
  for (let i = 0; i < num; i++) {
    const clone = popItem.cloneNode(true);
    popArea.appendChild(clone);
  }
  
  const playAnime = () => {
    const items = document.querySelectorAll(".pop-item");
  
    items.forEach((item) => {
      const itemW = rand(10, 20);
      item.style.width = `${itemW}%`;
      const itemH = item.offsetHeight;
      const child = item.firstElementChild;
      const gChild = child.firstElementChild;
      gChild.style.background = `url(${url}/img/contact.svg) center/contain no-repeat`;
  
      const xBegin = (100 / itemW - 1) * 50;
      const xEnd = rand(0, 100 / itemW - 1) * 100;
  
      const yBottom = (popAreaH / itemH) * 100;
      const yTop = rand(1, popAreaH / itemH - 1) * 100;
  
      const rBegin = 0;
      const rEnd = -(xBegin - xEnd) * 1;
  
      const durationTime = (1 - (yTop / yBottom) ** 2) * 3000;
      const delayTime = rand(0, 1000);
  
      const options = {
        duration: durationTime,
        delay: delayTime,
        fill: "forwards",
      };
  
      item.animate(
        [
          { translate: `${xBegin}%`, opacity: 1 },
          { opacity: 1 },
          { translate: `${xEnd}%`, opacity: 0 },
        ],
        options
      );
  
      child.animate(
        [
          {
            translate: `0 ${yBottom}%`,
            easing: "cubic-bezier(0.33, 1, 0.68, 1)",
          },
          { translate: `0 ${yTop}%`, easing: "cubic-bezier(0.32, 0, 0.67, 0)" },
          { translate: `0 ${yBottom}%` },
        ],
        options
      );
  
      gChild.animate({ rotate: [`${rBegin}deg`, `${rEnd}deg`] }, options);
    });
  };
  
  popBtn.addEventListener("mouseover", playAnime);
}
popAnime()


const validateForm = () => {
  const form = document.querySelectorAll(".has-value");
  const submitButton = document.querySelector('input[name="btn_confirm"]');
  if (!form[0]) return;
  let OKList = [];

  const handleOK = (node, isMail) => {
    if (!OKList.includes(node.name)) OKList = [...OKList, node.name];
    if (isMail) {
      node.classList.remove("is-error-mail");
      node.classList.add("is-ok");
    } else {
      node.classList.remove("is-error");
      node.classList.add("is-ok");
    }
  };

  const handleErr = (node, isMail) => {
    OKList = OKList.filter((value) => value !== node.name);
    if (isMail) {
      node.classList.add("is-error-mail");
      node.classList.remove("is-ok");
    } else {
      node.classList.add("is-error");
      node.classList.remove("is-ok");
    }
  };

  const validateValue = (e, node) => {
    const type = e.target.name;
    const val = e.target.value.trim();

    switch (type) {
      case "email":
        const mPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (val) {
          node.classList.remove("is-error");
          mPattern.test(val) ? handleOK(node, true) : handleErr(node, true);
        } else {
          handleErr(node);
        }
        break;

      case "phone":
        const pPattern = /^\d{2,5}-?\d{1,4}-?\d{4}$/;
        const pPattern2 = /^\d{10,11}$/;
        const pPattern3 = /^[0-9-]{12,13}$/;
        const isValidate = val.includes("-")
          ? val && pPattern.test(val) && pPattern3.test(val)
          : val && pPattern.test(val) && pPattern2.test(val);
        isValidate ? handleOK(node) : handleErr(node);
        break;

      case "content-type":
        val !== "0" ? handleOK(node) : handleErr(node);
        break;

      case "agree":
        e.target.checked ? handleOK(node) : handleErr(node);
        break;

      default:
        val ? handleOK(node) : handleErr(node);
    }
  };

  form.forEach((node) => {
    node.addEventListener("input", (e) => {
      validateValue(e, node);
      const isAllCorrect = OKList.length === form.length;
      submitButton.disabled = isAllCorrect ? false : true;
    });

    // confirm画面からbackボタンででphpで値を保持して戻ってきた時の処理(1回のみ)
    if (node.value) OKList.push(node.name);
  });

  // safari用
  const checkbox = document.querySelector("[type='checkbox']");
  checkbox.addEventListener("click", () => {
    checkbox.focus();
  });

  // confirm画面からbackボタンででphpで値を保持して戻ってきた時の処理(1回のみ)
  const isAlreadyAllFill = OKList.length === form.length;
  if (isAlreadyAllFill) {
    submitButton.disabled = false;
    form.forEach((node) => node.classList.add("is-ok"));
  } else {
    OKList = [];
  }
};
validateForm();