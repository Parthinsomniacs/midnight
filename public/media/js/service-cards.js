/**
 * Service Cards - Sticky Stack Animation (Skiper16 style)
 * Pure GSAP + ScrollTrigger implementation
 */
(function () {
  if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;

  var container = document.querySelector(".service-stack");
  if (!container) return;

  var cards = gsap.utils.toArray(".service-card");
  var totalCards = cards.length;
  if (!totalCards) return;

  // Set initial top offset for each card's inner (creates the stacking visual)
  cards.forEach(function (card, i) {
    var inner = card.querySelector(".service-card-inner");
    if (inner) {
      inner.style.top = "calc(-5vh + " + (i * 20 + 250) + "px)";
    }
  });

  // Single ScrollTrigger on the container tracking scroll progress
  ScrollTrigger.create({
    trigger: container,
    start: "start start",
    end: "end end",
    scrub: 0.5,
    onUpdate: function (self) {
      var progress = self.progress;

      cards.forEach(function (card, i) {
        var inner = card.querySelector(".service-card-inner");
        if (!inner) return;

        // Same formula as Skiper16:
        // targetScale = Math.max(0.5, 1 - (totalCards - i - 1) * 0.1)
        // range = [i * 0.25, 1]
        // scale = useTransform(progress, range, [1, targetScale])
        var targetScale = Math.max(0.5, 1 - (totalCards - i - 1) * 0.1);
        var rangeStart = i * (1 / (totalCards + 1));
        var rangeEnd = 1;

        var localProgress = 0;
        if (progress > rangeStart) {
          localProgress = Math.min((progress - rangeStart) / (rangeEnd - rangeStart), 1);
        }

        var scale = 1 + (targetScale - 1) * localProgress;
        inner.style.transform = "scale(" + scale + ")";
      });
    },
  });
})();
