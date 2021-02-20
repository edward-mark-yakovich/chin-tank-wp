(function() {

    const body = document.querySelector('body'),
          splash = document.querySelector('.c-splash'),
          homeMoreBtn = document.querySelector('.c-splash .c-button--more'),
          searchBtn = document.querySelectorAll('.c-search__btn'),
          searchNavBtn = document.querySelectorAll('.c-header .menu-item-15192');

    let searchTrigger = null;

    const setIntro = function(ev) {
        if (ev.currentTarget.classList.contains('c-button--more') || ev.type === 'scroll') {
            body.classList.add('_enter-site');
            setTimeout(function() {
                body.classList.add('_enter-scroll');
                splash.style.display = 'none';
            }, 1000);
        }
    }

    const toggleSearch = function(ev) {
        ev.preventDefault();

        const searchPanel = document.querySelector('.c-search'),
              isSearchBtn = ev.currentTarget.classList.contains('c-search__btn') || ev.currentTarget.classList.contains('menu-item-15192'),
              panelBtn = searchPanel.querySelector('.c-search__inner .c-button'),
              searchIsOpen = searchPanel.classList.contains('_open');

        if (isSearchBtn && !searchIsOpen) {
            searchPanel.classList.add('_open');
            searchTriggerResult = ev.currentTarget.querySelector('a');
            setTimeout(() => { panelBtn.focus(); }, 700);
        } else if (searchIsOpen) {
            searchPanel.classList.remove('_open');
            setTimeout(() => { searchTriggerResult.focus(); }, 700);
        }
    }

    const stickyNav = function(ev) {
        if (window.pageYOffset > 600) {
            body.classList.add('_sticky-nav');
        } else {
            body.classList.remove('_sticky-nav');
        }
    }

    const vertImg = function(ev) {
        const hasDataScrollerImgComp = document.querySelector('[data-img-scroller="true"]');
        const singlePage = document.querySelector('.c-post > .c-flex');

        if (singlePage !== null && _.isNil(hasDataScrollerImgComp)) {
          const singlePageImg = singlePage.querySelectorAll('img');

          _.forEach(singlePageImg, function(item) {
            if (item.offsetHeight > item.offsetWidth) {
              item.classList.add('c-single__img-vert')
            }
          });
        }
    }

    const articleImgFix = function(ev) {
        // do without jquery
        const $post = $('.c-post > .c-flex');
        const hasDataScrollerImgComp = document.querySelector('[data-img-scroller="true"]');

        if ($post.length && _.isNil(hasDataScrollerImgComp)) {
            $post.find('img').each(function(index, el) {
                const $el = $(el);

                if (!$el.closest('.cott-article__copy-img').length) {
                    $el.closest('a').closest('p > *').unwrap();
                    $el.closest('p > *').unwrap();
                    $el.closest('strong').closest('p > *').unwrap();
                }
            });
        }
    }

    const checkStorage = function() {
        if (!body.classList.contains('home')) {
            return;
        } else {
            const splashName = document.querySelector('.c-splash__inner-pad > a'),
                  page = document.querySelector('.c-page'),
                  storage = window.sessionStorage;

            if (storage.cottHomePost === splashName.dataset.splashPost) {
                document.querySelector('.c-splash').style.display = 'none';
                page.style.transition = 'none';
                page.style.transform = 'none';
                body.classList.add('_enter-site', '_enter-scroll');
            }

            storage.setItem('cottHomePost', splashName.dataset.splashPost);
            body.classList.add('_storage-checked');
        }
    }

    checkStorage();

    if (homeMoreBtn !== null) homeMoreBtn.addEventListener('click', setIntro, false);
    if (splash !== null) splash.addEventListener('scroll', setIntro, false);
    window.addEventListener('scroll', _.throttle(stickyNav, 300), false);
    window.addEventListener('load', vertImg, false);
    window.addEventListener('load', articleImgFix, false);

    if (searchBtn !== null) {
        _.forEach(searchBtn, function(item) {
            item.addEventListener('click', toggleSearch, false);
        }.bind(this));
    }

    if (searchNavBtn !== null) {
        _.forEach(searchNavBtn, function(item) {
            item.addEventListener('click', toggleSearch, false);
        }.bind(this));
    }

}());
