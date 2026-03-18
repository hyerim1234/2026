const studies = {
  hakitshop: {
    id: "hakitshop",
    index: "01",
    title: "HAKIT Shop",
    subtitle: "뷰티 브랜드 스토어 리뉴얼 · 2026",
    meta: "뷰티 · 브랜딩 · 2026",
    description:
      "브랜드 소개부터 상품 상세, 커뮤니티, 장바구니까지 폭넓게 구성한 뷰티 커머스 프로젝트입니다. 비주얼 중심의 브랜드 경험과 쇼핑 흐름이 함께 보이도록 여러 화면을 일관된 톤으로 정리했습니다.",
    tags: ["커머스", "브랜드 경험", "반응형"],
    metricLabel: "구현 페이지",
    metricValue: "24+",
    image: "./portfolio/hakit_shop/img/visual_Bg.jpg",
    cardImage: "./portfolio/hakit_shop/img/visual_Bg.jpg",
    imageAlt: "HAKIT Shop 대표 화면",
    badge: "★ 주요 작업",
    url: "./portfolio/hakit_shop/html/main.html",
  },
  anantihotel: {
    id: "anantihotel",
    index: "02",
    title: "ANANTI HOTEL",
    subtitle: "호텔 프로모션 사이트 · 2026",
    meta: "호텔 · 브랜딩 · 2026",
    description:
      "객실, 프로모션, 부대시설, 여행 정보까지 이어지는 호텔 경험을 시각 중심으로 풀어낸 프로젝트입니다. 풍부한 이미지와 서브 페이지 구조를 통해 브랜드 무드를 강화했습니다.",
    tags: ["호텔 브랜딩", "웹사이트", "서브 페이지"],
    metricLabel: "서브 페이지",
    metricValue: "7+",
    image: "./portfolio/ananti_hotel/ananti_hotel_plan/img/hotel_main.png",
    cardImage: "./portfolio/ananti_hotel/ananti_hotel_plan/img/hotel_main.png",
    imageAlt: "ANANTI HOTEL 대표 화면",
    badge: "★ 브랜딩 프로젝트",
    url: "./portfolio/ananti_hotel/html/anantimain.html",
  },
  foodcenter: {
    id: "foodcenter",
    index: "03",
    title: "Food Center",
    subtitle: "서울 식생활종합센터 클론코딩 · 2026",
    meta: "공공 · 정보 구조 · 2026",
    description:
      "메인 화면과 공지, 강좌, 조사 페이지를 포함한 공공 정보성 사이트 프로젝트입니다. 정보 구조와 게시판형 콘텐츠 흐름을 안정적으로 구성하는 데 집중했습니다.",
    tags: ["공공 웹", "게시판", "정보 구조"],
    metricLabel: "구성 페이지",
    metricValue: "8+",
    image: "./portfolio/food/images/main.jpg",
    cardImage: "./portfolio/food/images/main.jpg",
    imageAlt: "Food Center 대표 화면",
    badge: "★ 콘텐츠 프로젝트",
    url: "./portfolio/food/pages/main.php",
  },
  travelblog: {
    id: "travelblog",
    index: "04",
    title: "Travel Blog",
    subtitle: "여행 매거진 · 블로그 UI · 2026",
    meta: "콘텐츠 · 매거진 · 2026",
    description:
      "여행 기사와 추천 콘텐츠를 카드형 레이아웃과 탭 인터랙션으로 풀어낸 프로젝트입니다. 매거진 스타일의 시선 흐름과 가벼운 인터랙션이 중심이 됩니다.",
    tags: ["콘텐츠", "탭 UI", "웹사이트"],
    metricLabel: "콘텐츠 모듈",
    metricValue: "4+",
    image: "./portfolio/travelblog/source/tokyo.jpg",
    cardImage: "./portfolio/travelblog/source/tokyo.jpg",
    imageAlt: "Travel Blog 대표 화면",
    badge: "★ 콘텐츠 프로젝트",
    url: "./portfolio/travelblog/html/index.html",
  },
  farmvillage: {
    id: "farmvillage",
    index: "05",
    title: "Farm Village",
    subtitle: "농업 기업 웹사이트 클론코딩 · 2026",
    meta: "기업 · 반응형 · 2026",
    description:
      "Tailwind CSS를 활용해 기업 소개, 사업 안내, 예약 흐름까지 담은 반응형 웹사이트를 구현한 프로젝트입니다. 구조적인 내비게이션과 섹션형 콘텐츠 구성이 특징입니다.",
    tags: ["기업 사이트", "Tailwind CSS", "반응형"],
    metricLabel: "구성 페이지",
    metricValue: "7+",
    image: "./portfolio/farm/assets/img/main_bg.jpg",
    cardImage: "./portfolio/farm/assets/img/main_bg.jpg",
    imageAlt: "Farm Village 대표 화면",
    badge: "★ 반응형 프로젝트",
    url: "./portfolio/farm/html/index.html",
  },
};

const tabViews = {
  all: {
    featured: "hakitshop",
    cards: ["anantihotel", "foodcenter", "travelblog"],
  },
  responsive: {
    featured: "farmvillage",
    cards: ["hakitshop", "foodcenter", "travelblog"],
  },
  branding: {
    featured: "anantihotel",
    cards: ["hakitshop", "farmvillage", "foodcenter"],
  },
  content: {
    featured: "foodcenter",
    cards: ["travelblog", "farmvillage", "anantihotel"],
  },
};

const featureEl = document.querySelector("[data-case-feature]");
const gridEl = document.querySelector("[data-case-grid]");
const tabButtons = document.querySelectorAll("[data-filter]");
const reduceMotionQuery = window.matchMedia("(prefers-reduced-motion: reduce)");
const prefersReducedMotion = reduceMotionQuery.matches;
const headerFrame = document.querySelector("[data-site-header]");
const progressBar = document.querySelector("[data-scroll-progress]");
const menuToggle = document.querySelector("[data-menu-toggle]");
const mobileMenu = document.querySelector("[data-mobile-menu]");
const scrollTargets = document.querySelectorAll("[data-scroll-target]");

const setMenuOpen = (isOpen) => {
  document.body.classList.toggle("is-menu-open", isOpen);
  mobileMenu?.classList.toggle("is-open", isOpen);
  mobileMenu?.setAttribute("aria-hidden", String(!isOpen));
  menuToggle?.classList.toggle("is-open", isOpen);
  menuToggle?.setAttribute("aria-expanded", String(isOpen));
  menuToggle?.setAttribute("aria-label", isOpen ? "메뉴 닫기" : "메뉴 열기");
};

const scrollToTarget = (selector) => {
  if (selector === "#top") {
    window.scrollTo({ top: 0, behavior: prefersReducedMotion ? "auto" : "smooth" });
    return;
  }

  const target = document.querySelector(selector);
  if (!target) {
    return;
  }

  const headerOffset = headerFrame ? headerFrame.getBoundingClientRect().height + 28 : 96;
  const top = target.getBoundingClientRect().top + window.scrollY - headerOffset;

  window.scrollTo({
    top: Math.max(top, 0),
    behavior: prefersReducedMotion ? "auto" : "smooth",
  });
};

const updateNavOnScroll = () => {
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;

  headerFrame?.classList.toggle("is-scrolled", scrollTop > 40);

  if (progressBar) {
    progressBar.style.width = `${progress}%`;
  }
};

window.addEventListener("scroll", updateNavOnScroll, { passive: true });
window.addEventListener("load", updateNavOnScroll);
window.addEventListener("resize", () => {
  updateNavOnScroll();
  if (window.innerWidth > 820) {
    setMenuOpen(false);
  }
});

updateNavOnScroll();

scrollTargets.forEach((button) => {
  button.addEventListener("click", () => {
    setMenuOpen(false);
    scrollToTarget(button.dataset.scrollTarget);
  });
});

menuToggle?.addEventListener("click", () => {
  const nextState = !menuToggle.classList.contains("is-open");
  setMenuOpen(nextState);
});

mobileMenu?.addEventListener("click", (event) => {
  if (event.target === mobileMenu) {
    setMenuOpen(false);
  }
});

mobileMenu?.querySelectorAll("a[href^='mailto:']").forEach((link) => {
  link.addEventListener("click", () => {
    setMenuOpen(false);
  });
});

window.addEventListener("keydown", (event) => {
  if (event.key === "Escape") {
    setMenuOpen(false);
  }
});

const parseCountDescriptor = (text) => {
  const value = text.trim();
  const prefixMatch = value.match(/^([+\-−]?)(.*)$/);

  if (!prefixMatch) {
    return null;
  }

  const prefix = prefixMatch[1] === "-" ? "−" : prefixMatch[1];
  const remainder = prefixMatch[2];
  const numberMatch = remainder.match(/^(\d+(?:\.\d+)?)(.*)$/);

  if (!numberMatch) {
    return null;
  }

  const decimals = (numberMatch[1].split(".")[1] || "").length;

  return {
    countTo: Number(numberMatch[1]),
    decimals,
    prefix,
    suffix: numberMatch[2],
  };
};

const setCountConfig = (element, text) => {
  const descriptor = parseCountDescriptor(text);
  if (!descriptor) {
    return;
  }

  element.dataset.countTo = String(descriptor.countTo);
  element.dataset.countDecimals = String(descriptor.decimals);
  element.dataset.countPrefix = descriptor.prefix;
  element.dataset.countSuffix = descriptor.suffix;
};

const formatCount = (value, options = {}) => {
  const { decimals = 0, prefix = "", suffix = "" } = options;
  return `${prefix}${value.toFixed(decimals)}${suffix}`;
};

const animateCount = (element, { force = false } = {}) => {
  if (!element) {
    return;
  }

  if (!element.dataset.countTo) {
    setCountConfig(element, element.textContent || "");
  }

  const countTo = Number(element.dataset.countTo ?? "0");
  const decimals = Number(element.dataset.countDecimals ?? "0");
  const prefix = element.dataset.countPrefix ?? "";
  const suffix = element.dataset.countSuffix ?? "";
  const duration = Number(element.dataset.countDuration ?? "1100");
  const animationKey = `${countTo}|${decimals}|${prefix}|${suffix}`;

  if (!force && element.dataset.countAnimated === animationKey) {
    return;
  }

  element.classList.remove("is-counting");
  void element.offsetWidth;
  element.classList.add("is-counting");

  if (prefersReducedMotion) {
    element.textContent = formatCount(countTo, { decimals, prefix, suffix });
    element.dataset.countAnimated = animationKey;
    return;
  }

  const start = performance.now();

  const frame = (now) => {
    const progress = Math.min((now - start) / duration, 1);
    const eased = 1 - (1 - progress) ** 3;
    const currentValue = countTo * eased;

    element.textContent = formatCount(currentValue, { decimals, prefix, suffix });

    if (progress < 1) {
      window.requestAnimationFrame(frame);
      return;
    }

    element.textContent = formatCount(countTo, { decimals, prefix, suffix });
    element.dataset.countAnimated = animationKey;
  };

  window.requestAnimationFrame(frame);
};

const animateCountsIn = (container, options) => {
  if (!container) {
    return;
  }

  container.querySelectorAll("[data-count-up]").forEach((element) => {
    animateCount(element, options);
  });
};

if (featureEl && gridEl && tabButtons.length > 0) {
  let activeFeaturedUrl = "";
  const featureRefs = {
    image: featureEl.querySelector("[data-feature-image]"),
    badge: featureEl.querySelector("[data-feature-badge]"),
    metricLabel: featureEl.querySelector("[data-feature-metric-label]"),
    metricValue: featureEl.querySelector("[data-feature-metric-value]"),
    index: featureEl.querySelector("[data-feature-index]"),
    meta: featureEl.querySelector("[data-feature-meta]"),
    title: featureEl.querySelector("[data-feature-title]"),
    subtitle: featureEl.querySelector("[data-feature-subtitle]"),
    description: featureEl.querySelector("[data-feature-description]"),
    tags: featureEl.querySelector("[data-feature-tags]"),
    footerLink: featureEl.querySelector("[data-feature-link-text]"),
    buttonLink: featureEl.querySelector("[data-feature-link-button]"),
  };

  const createTag = (text, variant) => {
    const tag = document.createElement("span");
    tag.className = `case-tag ${variant}`;
    tag.textContent = text;
    return tag;
  };

  const createCaseCard = (studyId) => {
    const study = studies[studyId];
    const card = document.createElement("a");
    card.className = "case-card";
    card.href = study.url;
    card.setAttribute("aria-label", `${study.title} 프로젝트 페이지로 이동`);

    const media = document.createElement("div");
    media.className = "case-card__media";

    const image = document.createElement("img");
    image.src = study.cardImage;
    image.alt = study.imageAlt;

    const overlay = document.createElement("div");
    overlay.className = "case-card__media-overlay";

    const metric = document.createElement("div");
    metric.className = "case-card__metric";

    const metricValue = document.createElement("strong");
    metricValue.className = "count-up-value";
    metricValue.dataset.countUp = "";
    metricValue.textContent = study.metricValue;
    setCountConfig(metricValue, study.metricValue);

    const metricLabel = document.createElement("span");
    metricLabel.textContent = study.metricLabel;

    metric.append(metricValue, metricLabel);
    media.append(image, overlay, metric);

    const body = document.createElement("div");
    body.className = "case-card__body";

    const header = document.createElement("div");
    header.className = "case-card__header";

    const titleWrap = document.createElement("div");
    const title = document.createElement("h3");
    title.textContent = study.title;
    const subtitle = document.createElement("p");
    subtitle.textContent = study.subtitle;
    titleWrap.append(title, subtitle);

    const index = document.createElement("strong");
    index.textContent = study.index;

    header.append(titleWrap, index);

    const description = document.createElement("p");
    description.className = "case-card__description";
    description.textContent = study.description;

    const tags = document.createElement("div");
    tags.className = "case-card__tags";
    study.tags.forEach((tagText) => {
      tags.append(createTag(tagText, "case-tag--neutral"));
    });

    body.append(header, description, tags);
    card.append(media, body);

    return card;
  };

  const renderFeatured = (studyId) => {
    const study = studies[studyId];
    activeFeaturedUrl = study.url;

    featureRefs.image.src = study.image;
    featureRefs.image.alt = study.imageAlt;
    featureRefs.badge.textContent = study.badge;
    featureRefs.metricLabel.textContent = study.metricLabel;
    featureRefs.metricValue.textContent = study.metricValue;
    setCountConfig(featureRefs.metricValue, study.metricValue);
    featureRefs.index.textContent = study.index;
    featureRefs.meta.textContent = study.meta;
    featureRefs.title.textContent = study.title;
    featureRefs.subtitle.textContent = study.subtitle;
    featureRefs.description.textContent = study.description;
    featureRefs.footerLink.href = study.url;
    featureRefs.buttonLink.href = study.url;
    featureRefs.buttonLink.setAttribute("aria-label", `${study.title} 프로젝트 페이지로 이동`);
    featureEl.setAttribute("aria-label", `${study.title} 프로젝트 페이지로 이동`);

    featureRefs.tags.replaceChildren();
    study.tags.forEach((tagText) => {
      featureRefs.tags.append(createTag(tagText, "case-tag--accent"));
    });
  };

  const renderCards = (cardIds) => {
    gridEl.replaceChildren(...cardIds.map(createCaseCard));
  };

  let transitionTimer = null;

  const setActiveFilter = (filter) => {
    const view = tabViews[filter];
    if (!view) {
      return;
    }

    tabButtons.forEach((button) => {
      const isActive = button.dataset.filter === filter;
      button.classList.toggle("is-active", isActive);
      button.setAttribute("aria-selected", String(isActive));
    });

    featureEl.classList.add("is-transitioning");
    gridEl.classList.add("is-transitioning");

    window.clearTimeout(transitionTimer);
    transitionTimer = window.setTimeout(() => {
      renderFeatured(view.featured);
      renderCards(view.cards);

      requestAnimationFrame(() => {
        featureEl.classList.remove("is-transitioning");
        gridEl.classList.remove("is-transitioning");
        animateCountsIn(featureEl, { force: true });
        animateCountsIn(gridEl, { force: true });
      });
    }, 180);
  };

  tabButtons.forEach((button) => {
    button.addEventListener("click", () => {
      setActiveFilter(button.dataset.filter);
    });
  });

  featureEl.addEventListener("click", (event) => {
    if (event.target.closest("a")) {
      return;
    }

    if (activeFeaturedUrl) {
      window.location.href = activeFeaturedUrl;
    }
  });

  featureEl.addEventListener("keydown", (event) => {
    if ((event.key === "Enter" || event.key === " ") && activeFeaturedUrl) {
      event.preventDefault();
      window.location.href = activeFeaturedUrl;
    }
  });

  renderFeatured(tabViews.all.featured);
  renderCards(tabViews.all.cards);
}

const countTargets = document.querySelectorAll("[data-count-up]");

if ("IntersectionObserver" in window && !prefersReducedMotion) {
  const countObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) {
        return;
      }

      animateCount(entry.target);
      observer.unobserve(entry.target);
    });
  }, { threshold: 0.35 });

  countTargets.forEach((target) => {
    countObserver.observe(target);
  });
} else {
  countTargets.forEach((target) => {
    animateCount(target);
  });
}

const revealTargets = document.querySelectorAll("[data-reveal]");

if ("IntersectionObserver" in window && !prefersReducedMotion) {
  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) {
        return;
      }

      entry.target.classList.add("is-visible");
      observer.unobserve(entry.target);
    });
  }, { threshold: 0.18 });

  revealTargets.forEach((target) => {
    revealObserver.observe(target);
  });
} else {
  revealTargets.forEach((target) => {
    target.classList.add("is-visible");
  });
}

const logEntries = document.querySelectorAll("[data-log-entry]");

logEntries.forEach((entry) => {
  const toggle = entry.querySelector("[data-log-toggle]");
  if (!toggle) {
    return;
  }

  toggle.addEventListener("click", () => {
    const isOpen = entry.classList.contains("is-open");

    logEntries.forEach((item) => {
      item.classList.remove("is-open");
      item.querySelector("[data-log-toggle]")?.setAttribute("aria-expanded", "false");
    });

    if (!isOpen) {
      entry.classList.add("is-open");
      toggle.setAttribute("aria-expanded", "true");
    }
  });
});
