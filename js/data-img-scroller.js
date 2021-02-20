(function() {

  const dataImgScroller = () => {
    const isIE11 = !!window.MSInputMethodContext && !!document.documentMode;
    let topOffset = 0;
    const bodyEl = document.querySelector('body');

    const init = () => {
      const imgList = document.querySelectorAll('[data-img-scroller="true"]');

      if (imgList.length) {
        imgList.forEach(imgListEl => {
          imgListEl.classList.add('data-img-scroller');

          const imgList = imgListEl.cloneNode(true);
          const imgListBtn = document.createElement('button');
          imgListBtn.classList.add('data-img-scroller__btn');
          imgListBtn.setAttribute('type', 'button');
          imgListBtn.innerHTML = "Open Image Gallery";

          imgListEl.appendChild(imgListBtn);
          imgListEl.classList.add('grid');

          imgListBtn.addEventListener('click', () => {
            topOffset = window.pageYOffset;
            createModal(imgList);
          });
        });
      }
    }

    const createModal = (imgList) => {
      const imgScrlrWrap = document.createElement('div');
      const imgScrlr = document.createElement('div');
      const imgScrlrImgs = document.createElement('div');
      const imgScrlrDir = document.createElement('div');
      const imgScrlrBtn = document.createElement('button');

      imgScrlrWrap.classList.add('img-scroller-wrap');
      imgScrlr.classList.add('img-scroller');
      imgScrlrImgs.classList.add('img-scroller__images');
      imgScrlrImgs.classList.add('grid');
      imgScrlrDir.classList.add('img-scroller__dir');
      imgScrlrBtn.classList.add('img-scroller__btn');
      imgScrlrBtn.setAttribute('type', 'button');
      imgScrlrBtn.innerHTML = "Close Image Gallery";

      imgScrlrWrap.appendChild(imgScrlr);
      imgScrlr.appendChild(imgScrlrDir);
      imgScrlr.appendChild(imgScrlrImgs);
      imgScrlr.appendChild(imgScrlrBtn);

      modalImgSetup(imgScrlrImgs, imgList, imgScrlrWrap);
    }

    const modalImgSetup = (imgScrlrImgs, imgList, imgScrlrWrap) => {
      const imgItems = imgList.children;

      imgList.removeAttribute('class');
      imgList.removeAttribute('data-img-scroller');
      imgList.classList.add('grid');

      Array.from(imgItems).forEach(function(item) {
        const imgItem = document.createElement('div');
        const imgItemWrap = document.createElement('div');
        const img = document.createElement('img');
        let caption = null;

        if (item.alt !== "") caption = document.createElement('p');

        imgItem.classList.add('img-scroller__image');
        imgItemWrap.classList.add('img-scroller__image-wrap');
        img.setAttribute('src', item.src);
        if (caption !== null) caption.innerHTML = item.alt;

        imgScrlrImgs.appendChild(imgItem);
        imgItem.appendChild(imgItemWrap);
        imgItemWrap.appendChild(img);

        if (caption !== null) imgItem.appendChild(caption);
      });

      document.body.appendChild(imgScrlrWrap);

      setTimeout(() => {
        if (bodyEl) bodyEl.classList.add('_active--data-img-scroller');
        imgScrlrImgs.scrollTo(0, 0);
        window.scrollTo(0, 0);
      }, 800);
    }

    const closeModal = (ev) => {
      const closeBtn = document.querySelector('.img-scroller__btn');

      if (closeBtn && (ev.target === closeBtn)) {
        const modal = document.querySelector('.img-scroller-wrap');

        if (bodyEl) bodyEl.classList.remove('_active--data-img-scroller');
        window.scrollTo(0, topOffset);
        if (modal) modal.parentNode.removeChild(modal);
      }
    }

    if (!isIE11) {
      document.addEventListener('click', closeModal);
      init();
    }
  };

  window.addEventListener('load', dataImgScroller());

}());
